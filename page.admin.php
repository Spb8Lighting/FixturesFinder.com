<?php
//To do on this page:
// #TRANSFORM to be sort out from here
//
//Ingestion process can be long ... very long
set_time_limit(-1);
ini_set('memory_limit', -1);

//For time tracking execution
$rustart = time();
//To gather feedback message after admin operation
$feedback = array();

//Only for debug purpose, permit to specify specific Manufacturer and associated Fixtures
//Only used by StopExec() and DisplayExec()
$DebugManuf = 'Ablelite';
$DebugFixture = 'ADA 75s';
//If $BreakAt set to more than 0, the ingestion process will be stop after X ($BreakAt) profile ingested
$BreakAt = 0;
$BreakAtCount = 0;

function StopExec($manuf, $fixt, $dump=FALSE) {
	global $DebugManuf, $DebugFixture;
	if($manuf == $DebugManuf AND $fixt == $DebugFixture) {
		return TRUE;
	} else { return FALSE; }
}
function DisplayExec($manuf, $fixt, $dump) {
	global $DebugManuf, $DebugFixture;
	if($manuf == $DebugManuf AND $fixt == $DebugFixture) {
		var_dump($dump);
	}
}
// Delete all cache content of _CacheFolder_
function EmptyCache() {
	global $feedback;
	array_map('unlink', glob($_SERVER['DOCUMENT_ROOT'].'/'._CacheFolder_."*"));
	$feedback[] = 'Cache cleaned';
}
// Delete all cache file of "Pages"
function CleanDetail($file, $text) {
	global $feedback;
	$CacheName = CacheFile($file);
	$CacheNameHead = $_SERVER['DOCUMENT_ROOT'].'/'.$CacheName._CacheHead_;
	$CacheNameBody = $_SERVER['DOCUMENT_ROOT'].'/'.$CacheName._CacheBody_;
	if(file_exists($CacheNameHead)) {
		unlink($CacheNameHead);
	}
	if(file_exists($CacheNameBody)) {
		unlink($CacheNameBody);
	}
	$feedback[] = $text.' Cache cleaned';
	unset($CacheName, $CacheNameHead, $CacheNameBody);
}
// Delete all cache file starting by "$start"
function CleanFixtureCache($start) {
	global $feedback;
	$files = glob($_SERVER['DOCUMENT_ROOT'].'/'._CacheFolder_."*");
	foreach($files as $file){
		if(is_file($file)) {
			if(substr(basename($file), 0, strlen($start)) == $start) {
				unlink($file);
			}
		}
	}
	unset($files);
	$feedback[] = 'Fixture Detail Cache cleaned';
}
// Compute the stats info from database content
function UpdateStats() {
	global $feedback, $DMXChartManager;
	$Stats = $DMXChartManager->SetStatsInfos();
	$feedback[] = $Stats['NbManufacturer'].' manufacturer'.(($Stats['NbManufacturer']>1) ? 's' : '');
	$feedback[] = $Stats['NbFixtures'].' fixture'.(($Stats['NbFixtures']>1) ? 's' : '');
	$feedback[] = $Stats['NbDMXCharts'].' DMX Chart'.(($Stats['NbDMXCharts']>1) ? 's' : '');
	unset($Stats);
}
// This function check if the file exists whatever is the case is not good. But it can be a strict search by setting the 2nd argument to TRUE
function fileExists($fileName, $caseSensitive=true) {
	global $DMXChartManager, $FolderLib;
	//If the file exists just return it, that's easy!
	if(file_exists($fileName)) {
		return $fileName;
	}
	//If file was not found and it has been specified that the file found should respect the case, track this file not available in database and return FALSE
	if($caseSensitive) {
		// Do not track into database if it is during the preset ingestion
		if(!sPreset) {
			$DMXChartManager->QualityScan('File missing', strtoupper(substr(strrchr($fileName, '.'), 1)), '', '', '', $fileName);
		}
		return false;
	}
	// Handle case insensitive requests
	$directoryName = dirname($fileName);
	$fileArray = glob($directoryName . '/*', GLOB_NOSORT);
	$fileNameLowerCase = strtolower($fileName);
	foreach($fileArray as $file) {
		if(strtolower($file) == $fileNameLowerCase) {
			//File found in a different case, that's OK
			return $file;
		}
	}
	//File not found in another case :( Free memory!
	unset($directoryName, $fileArray, $fileNameLowerCase);

	// Do not track into database if it is during the preset ingestion
	if(!sPreset) {
		$DMXChartManager->QualityScan('File missing', strtoupper(substr(strrchr($fileName, '.'), 1)), '', '', '', $fileName);
	}
	return false;
}
//#TOBECHECKED if used before #TOBEDELETED
function LogFile($content) {
	global $rustart;
	file_put_contents('log.txt', file_get_contents('log.txt').(time()-$rustart).' '.$content."\n");
}
// Based on database content + some "static page", it will generate locally the sitemap.xml file for Google Console
function CreateSitemap() {
	global $feedback, $DMXChartManager, $xml, $xml_urlset;
	$xml = new DOMDocument('1.0', 'UTF-8');
	$xml_urlset = $xml->createElement('urlset');
	$xml_urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
	$xml_urlset->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
	$xml_urlset->setAttribute('xsi:schemaLocation', 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');
	AddURL(_Domain_, 'daily', '1');
	$Datas = $DMXChartManager->DisplayAll();
	foreach($Datas AS $Row){
		$Fixtures = array_filter(explode(',', $Row['Fixture']));
		if(count($Fixtures) > 0) {
			foreach($Fixtures AS $Fixture) {
				AddURL(_Domain_.'/'.FixtureURL($Row['Manufacturer'], $Fixture), 'monthly', '0.9');
			}
		}
	}
	AddURL(_Domain_.'/'._List_, 'monthly', '0.8');
	AddURL(_Domain_.'/'._Changelog_, 'weekly', '0.7');
	AddURL(_Domain_.'/'._Synchro_, 'daily', '0.7');
	$xml->formatOutput = true;
	$xml->preserveWhiteSpace = false;
	$xml->save('sitemap.xml');
	$feedback[] = '<a href="./sitemap.xml">Sitemap updated!</a>';
	unset($xml, $xml_urlset, $Datas, $Fixtures);
}
// Sub Function for CreateSitemap()
function AddURL($url, $freq, $prio) {
	global $xml, $xml_urlset;
	$xml_url = $xml->createElement('url');
	$xml_loc = $xml->createElement('loc', $url);
	$xml_url->appendChild($xml_loc);

	$xml_changefreq = $xml->createElement('changefreq', $freq);
	$xml_url->appendChild($xml_changefreq);

	$xml_priority = $xml->createElement('priority', $prio);
	$xml_url->appendChild($xml_priority);
	$xml_urlset->appendChild($xml_url);
	$xml->appendChild($xml_urlset);
}
//#TRANSFORM Set an integer value on 3 digits
function Digit3($var, $twobits=false) {
	if($twobits) {
		$number = floor((int) $var / 256);
	} else {
		$number = (int) $var;
	}
	return str_pad($number, 3, '0', STR_PAD_LEFT);
}
// Transform the Fixture XML Input value into readable text
function CheckSemanticValue($Value, $type, $manufacturer, $fixture) {
	global $DMXChartManager;
	$strValue = (string) $Value;
	if(strlen($strValue) > 0) {
		if(isset($Value['unit'])) {
			$ValueUnit = strtolower((string) $Value['unit']);
			switch($ValueUnit) {
				case 'deg':
				return $strValue.'°';
				break;
				case 'hz':
				return $strValue.'Hz';
				break;
				case 'rpm':
				return $strValue.'RPM';
				break;
				case 'rgb':
				switch($strValue) {
					case '(255,,)':
					case '(,255,)':
					case '(,,255)':
					return 'Max';
					break;
					case '(0,,)':
					case '(,0,)':
					case '(,,0)':
					return 'Min';
					break;
					default:
					return $strValue;
					break;
				}
				break;
				default:
				return $strValue;
				break;
			}
		}
	} else {
		$ValueSemantic = strtolower((string) $Value['semantic']);
		switch($ValueSemantic) {
			case 'sllow':
				//Track default of langage into database
				$DMXChartManager->QualityScan('Bad wording', 'value', $manufacturer, $fixture, 'Slow', (string) $Value['semantic']);
				return 'Slow';
				break;
			default:
				return (string) $Value['semantic'];
				break;
		}
	}
}
// From XML Fixture File, following the type of information, get the color/picture
function ReplaceSlot($ChannelID, $xml, $SlotID) {
	global $DMXChartManager;
	$TypeWheel = FALSE;
	$ChannelID = (string) $ChannelID;
	$SlotID = (string) $SlotID;
	if(preg_match('/^color ?([0-9]{1,})?$/i', $ChannelID)) {
		$TypeWheel = _modeColor_;
	} elseif(preg_match('/^gobo ?([0-9]{1,})?$/i', $ChannelID)) {
		$TypeWheel = _modeGobo_;
	} elseif(preg_match('/^animation ?([0-9]{1,})?$/i', $ChannelID)) {
		$TypeWheel = _modeAnimation_;
	}
	if($TypeWheel) {
		$SlotIDArray = array_filter(explode('[50]:', (string) $SlotID));
		if($TypeWheel == _modeColor_ AND count($SlotIDArray) > 1) {
			$WheelInfos = $xml->xpath('//Physics/Wheel[@label="'.$ChannelID.'"]/WheelAccessory[@slot="'.$SlotIDArray[0].'"]');
			if(count($WheelInfos) > 0) {
				list($ColorName1, $ColorHex1) = $DMXChartManager->RetrieveAccessory('span', $TypeWheel, $WheelInfos[0]['manufacturer'], $WheelInfos[0]['id'], TRUE);
			}
			$WheelInfos = $xml->xpath('//Physics/Wheel[@label="'.$ChannelID.'"]/WheelAccessory[@slot="'.$SlotIDArray[1].'"]');
			if(count($WheelInfos) > 0) {
				list($ColorName2, $ColorHex2) = $DMXChartManager->RetrieveAccessory('span', $TypeWheel, $WheelInfos[0]['manufacturer'], $WheelInfos[0]['id'], TRUE);
			}
			if(isset($ColorName1) AND isset($ColorName2)) {
				$ValueContent = '<span class="WheelSlot" title="'.$ColorName1.' '.$ColorName2.'" style="background: linear-gradient(90deg, '.$ColorHex1.' 50%, '.$ColorHex2.' 50%);"></span> '.$ColorName1.' '.$ColorName2;
			}
		} else {
			$SlotID = str_replace('[50]:', '-', $SlotID);
			$WheelInfos = $xml->xpath('//Physics/Wheel[@label="'.$ChannelID.'"]/WheelAccessory[@slot="'.$SlotID.'"]');
			if(count($WheelInfos) > 0) {
				$ValueContent = $DMXChartManager->RetrieveAccessory('span', $TypeWheel, $WheelInfos[0]['manufacturer'], $WheelInfos[0]['id']).' '.$WheelInfos[0]['id'];
			}
		}
	}
	if(!isset($ValueContent)) {
		$SlotID = str_replace('[50]:', '-', $SlotID);
		$ValueContent = $ChannelID.' '.$SlotID;
	}
	return $ValueContent;
}
// This function will parse the XML file provided and will compute the profile for store into database
function SaveDMXChart($infos, $xml) {
	global $DMXChartManager, $BreakAtCount, $FolderLib;
	$TotalChannel = 0;
	$TotalWheel = 0;
	$PrevWheelName = '';
	$iColor = 0;
	$iGobo = 0;
	$iAnimation = 0;
	foreach($xml->Physics AS $Physic) {
		if(!sPreset) {
			foreach($Physic->Wheel AS $Wheel) {
				$WheelName = (string) $Wheel['label'];
				if(preg_match('/^color ?([0-9]{1,})?$/i', $WheelName, $Matches)) {
					if($PrevWheelName != $WheelName) {
						$PrevWheelName = $WheelName;
						$iColor++;
					}
					if(!isset($infos['colordetails'.$iColor])) {
						$infos['colordetails'.$iColor] = '';
					}
					if(!isset($infos['colorslots'.$iColor])) {
						$infos['colorslots'.$iColor] = 0;
					}
					foreach($Wheel->WheelAccessory AS $Slot) {
						$SlotID = (int) $Slot['slot'];
						$SlotManufacturer = (string) $Slot['manufacturer'];
						$SlotName = (string) $Slot['id'];
						$infos['colordetails'.$iColor].= "\n".$WheelName.'|'.$SlotID.'|'.$SlotManufacturer.'|'.$SlotName;
						$infos['colorslots'.$iColor]++;
					}
					$infos['colordetails'.$iColor] = trim($infos['colordetails'.$iColor]);
					$TotalWheel++;
				} elseif(preg_match('/^gobo ?([0-9]{1,})?$/i', $WheelName, $Matches)) {
					if($PrevWheelName != $WheelName) {
						$PrevWheelName = $WheelName;
						$iGobo++;
					}
					if(!isset($infos['gobodetails'.$iGobo])) {
						$infos['gobodetails'.$iGobo] = '';
					}
					if(!isset($infos['goboslots'.$iGobo])) {
						$infos['goboslots'.$iGobo] = 0;
					}
					foreach($Wheel->WheelAccessory AS $Slot) {
						$SlotID = (int) $Slot['slot'];
						$SlotManufacturer = (string) $Slot['manufacturer'];
						$SlotName = (string) $Slot['id'];
						$infos['gobodetails'.$iGobo].= "\n".$WheelName.'|'.$SlotID.'|'.$SlotManufacturer.'|'.$SlotName;
						$infos['goboslots'.$iGobo]++;
					}
					$infos['gobodetails'.$iGobo] = trim($infos['gobodetails'.$iGobo]);
					$TotalWheel++;
				} elseif(preg_match('/^animation ?([0-9]{1,})?$/i', $WheelName, $Matches)) {
					if($PrevWheelName != $WheelName) {
						$PrevWheelName = $WheelName;
						$iAnimation++;
					}
					if(!isset($infos['animationdetails'.$iAnimation])) {
						$infos['animationdetails'.$iAnimation] = '';
					}
					if(!isset($infos['animationslots'.$iAnimation])) {
						$infos['animationslots'.$iAnimation] = 0;
					}
					foreach($Wheel->WheelAccessory AS $Slot) {
						$SlotID = (int) $Slot['slot'];
						$SlotManufacturer = (string) $Slot['manufacturer'];
						$SlotName = (string) $Slot['id'];
						$infos['animationdetails'.$iAnimation].= "\n".$WheelName.'|'.$SlotID.'|'.$SlotManufacturer.'|'.$SlotName;
						$infos['animationslots'.$iAnimation]++;
					}
					$infos['animationdetails'.$iAnimation] = trim($infos['animationdetails'.$iAnimation]);
					$TotalWheel++;
				}
				unset($WheelName, $SlotID, $SlotManufacturer, $SlotName);
			}
		}
	}
	foreach($xml->Protocol AS $Protocol) {
		foreach($Protocol->Channel AS $DMX) {
			if($DMX['offset']) {
				if(!sPreset) {
					$infos['ch'.(intval($DMX['offset'])+1)] = (string) $DMX['ID'];
				}
				$TotalChannel++;
			}
		}
	}
	if(!sPreset) {
		if(!empty($xml->Head)) {
			$infos['mh'] = TRUE;
		}
	}
	$infosParam = array();
	$Parameters = $xml->xpath("//Parameter");
	$RealNameID =  $xml->xpath("//Parameter/parent::Wheel");
	foreach($Parameters AS $Parameter) {
		$ParameterName = (string) $Parameter['name'];
		$ParameterRes = (int) $Parameter['resolution'];
		foreach($Parameter->Protocol AS $Protocol) {
			$ProtocolIDREF = (string) $Protocol['IDREF'];
			if(strpos($ProtocolIDREF,':') > 0) {
				list($Label, $RealIDRef) = explode(':', $ProtocolIDREF);
				$IDRef = $xml->xpath("//Protocol[@label=\"".$Label."\"]/Channel[@ID=\"".$RealIDRef."\"]");
			} else {
				$IDRef = $xml->xpath("//Protocol/Channel[@ID=\"".$ProtocolIDREF."\"]");
			}
			if(isset($IDRef[0]['offset'])) {
				$DMXChannel = 'ch'.((int) $IDRef[0]['offset'] + 1);
				if(isset($infosParam[$DMXChannel.'details']) AND !empty($infosParam[$DMXChannel.'details'])) {
					$ValueRange = $infosParam[$DMXChannel.'details'];
				} else {
					$ValueRange = array();
				}
				foreach($Parameter->Range AS $Range) {
					$Is16Bits = ($ParameterRes == 16 OR (int) $Range['channelMinValue'] > 255 OR (int) $Range['channelMaxValue'] > 255) ? TRUE : FALSE;
					$Plage = Digit3($Range['channelMinValue'], $Is16Bits).'-'.Digit3($Range['channelMaxValue'], $Is16Bits);
					if($Range['dynamic'] == 'linear') {
						if(count($Range->Value) > 0) {
							foreach($Range->Value AS $Value) {
								$Is16Bits = ($ParameterRes == 16 OR (int) $Value['channelRangePos'] > 255) ? TRUE : FALSE;
								$ValueRange[$Plage][$ParameterName][Digit3($Value['channelRangePos'], $Is16Bits)] = CheckSemanticValue($Value, 'linear', $infos['manufacturer'], $infos['fixture']);
							}
						}
						if(count($Range->Slot) > 0) {
							foreach($Range->Slot AS $Value) {
								$Is16Bits = ($ParameterRes == 16 OR (int) $Value['channelRangePos'] > 255) ? TRUE : FALSE;
								$ValueContent = ReplaceSlot((isset($IDRef[0]['ID']) ? $IDRef[0]['ID'] : $RealNameID[0]['label']), $xml, $Value['nr']);
								$ValueRange[$Plage][$ParameterName][Digit3($Value['channelRangePos'], $Is16Bits)] = $ValueContent;
							}
						}
					} else {
						if(count($Range->Value) > 0) {
							$ValueRange[$Plage][$ParameterName][$Plage] = CheckSemanticValue($Range->Value, false, $infos['manufacturer'], $infos['fixture']);
						} elseif(count($Range->Slot) > 0) {
							$ValueContent = ReplaceSlot((isset($IDRef[0]['ID']) ? $IDRef[0]['ID'] : $RealNameID[0]['label']), $xml, $Range->Slot['nr']);
							$ValueRange[$Plage][$ParameterName][$Plage] = $ValueContent;
						}
					}
				}
				ksort($ValueRange);
				$infosParam[$DMXChannel.'details'] = $ValueRange;
			}
		}
	}
	ksort($infosParam);
	foreach($infosParam AS $ChannelID => $Ranges) {
		$FInal = '';
		foreach($Ranges AS $Range => $RangeContents) {
			$NbOfParam = count($RangeContents);
			ksort($RangeContents);
			if($NbOfParam == 1) {
				foreach($RangeContents AS $DMXContent) {
					ksort($DMXContent);
					$NbVal = count($DMXContent);
					$PrevDMXVal = FALSE;
					foreach($DMXContent AS $DMXVal => $DMXName) {
						if($NbVal == 2) {
							if(!$PrevDMXVal) {
								$PrevDMXVal = $DMXName;
								$FInal.= $DMXVal.'-';
							} else {
								$FInal.= $DMXVal.' '.$PrevDMXVal.' '.$DMXName."\n";
							}
						} else {
							$FInal.= $DMXVal.' '.$DMXName."\n";
						}
					}
				}
			} else {
				uasort($RangeContents, function ($a, $b) {
					$a = count($a);
					$b = count($b);
					return ($a == $b) ? 0 : (($a > $b) ? -1 : 1);
				});
				foreach($RangeContents AS $DMXContent) {
					ksort($DMXContent);
					$NbVal = count($DMXContent);
					$PrevDMXVal = FALSE;
					foreach($DMXContent AS $DMXVal => $DMXName) {
						if($NbVal > 1) {
							if(!$PrevDMXVal) {
								$PrevDMXVal = $DMXName;
								$FInal.= $DMXVal.'-';
							} else {
								$FInal.= $DMXVal.' '.$PrevDMXVal.'-'.$DMXName;
								$PrevDMXVal = FALSE;
							}
						} else {
							$FInal.= ' > '.$DMXName."\n";
						}
					}
				}
			}
		}
		$infos[$ChannelID] = trim($FInal);
	}
	$infos['channels'] = $TotalChannel;
	$infos['wheel'] = $TotalWheel;
	$infos['lastdate'] = $FolderLib;
	if($BreakAt > 0) {
		$BreakAtCount++;
		if($BreakAtCount == $BreakAt) {
			die();
		}
	}
	//See Specific Fixture
	//StopExec($infos['manufacturer'], $infos['fixture'], $infos);
	if(sPreset) {
		$DMXChartManager->Update(new DMXChart($infos));
	} else {
		$DMXChartManager->Save(new DMXChart($infos));
	}
	unset($TotalChannel, $xml, $infos);
}
function SetAndSavePicture($type, $AccessoriesXml, $Manufacturer) {
	global $DMXChartManager, $FolderLib;
	switch($type) {
		case _modeGobo_:
		$Pictures = $AccessoriesXml->GoboIndex->Gobo;
		$PicturesManufacturer = (string) $AccessoriesXml->GoboIndex['manufacturer'];
		$csvType = 'Gobo';
		break;
		case _modeAnimation_:
		$Pictures = $AccessoriesXml->AnimationIndex->Animation;
		$PicturesManufacturer = (string) $AccessoriesXml->AnimationIndex['manufacturer'];
		$csvType = 'Animation';
		break;
	}
	if(count($Pictures) > 0) {
		foreach($Pictures AS $Picture) {
			$PictureName = (string) trim($Picture['name']);
			$PictureFile = (string) trim($Picture);
			if(strlen($PictureFile) > 0) {
				$SearchFileName = 'm-pc/'.$FolderLib.'-FixtureLibrary/'.$Manufacturer.'/'.$PictureFile;
				$RealSearchFileName = fileExists($SearchFileName, FALSE);
				if($RealSearchFileName != $SearchFileName) {
					if(!empty($RealSearchFileName)) {
						$md5 = md5_file($RealSearchFileName);
						$DMXChartManager->QualityScan('Case different', $csvType, $Manufacturer, $PicturesManufacturer, $PictureName, $PictureFile, str_replace('m-pc/'.$FolderLib.'-FixtureLibrary/'.$Manufacturer.'/', '', $RealSearchFileName), md5_file($RealSearchFileName));
					} else {
						$md5 = 0;
						$DMXChartManager->QualityScan('File missing', $csvType, $Manufacturer, $PicturesManufacturer, $PictureName, $PictureFile, $PictureFile);
					}
				} else {
					$md5 = md5_file($RealSearchFileName);
					//$DMXChartManager->QualityScan('OK', $csvType, $Manufacturer, $PicturesManufacturer, $PictureName, $PictureFile, $PictureFile, $md5);
				}
				$OrdersID = NULL;
				if(isset($Picture->OrderId)) {
					foreach($Picture->OrderId AS $OrderID) {
						$OrdersID.= (string) $OrderID."\n";
					}
				}
				$DMXChartManager->SavePicture(new MANUFAccessories(array('manufacturer' => $Manufacturer, 'name' => $PictureName, 'orderid' => trim($OrdersID), 'img' => 'm-pc/'.$FolderLib.'-FixtureLibrary/'.$Manufacturer.'/'.rawurlencode(str_replace('m-pc/'.$FolderLib.'-FixtureLibrary/'.$Manufacturer.'/', '', $RealSearchFileName)), 'hmd5' => $md5, 'mode' => $type)));
				unset($SearchFileName, $RealSearchFileName, $md5);
			} else {
				$DMXChartManager->QualityScan('Bad file', $csvType, $Manufacturer, $PicturesManufacturer, $PictureName, $PictureFile, $PictureFile);
			}
			unset($PictureName, $PictureFile);
		}
	}
	unset($Pictures, $PicturesManufacturer, $csvType);
}
if(isset($_POST['parse']) AND hash_equals(adminPass, crypt($_POST['parse'], _admin_salt_))) {
	if(isset($_POST['checkEvol'])) {
		$DMXChartManager->CheckEvol();
		$feedback[] = 'Fixture Changelog computed!';
	}
	if(isset($_POST['cleancache'])) {
		EmptyCache();
	}
	if(!isset($_POST['cleancache'])) {
		if(isset($_POST['cleancacheFixtureChangelog'])) {
			CleanDetail(_Fixturelog_, 'Fixturelog');
		}
		if(isset($_POST['cleancacheChangelog'])) {
			CleanDetail(_Changelog_, 'Changelog');
		}
		if(isset($_POST['cleancacheFixtureList'])) {
			CleanDetail(_List_, 'Fixture List');
		}
		if(isset($_POST['cleancacheFixtureDetail'])) {
			CleanFixtureCache('fixture');
		}
		if(isset($_POST['cleancacheSearch'])) {
			CleanFixtureCache(_CacheSearch_);
		}
	}
	if(isset($_POST['resitemap'])) {
		CreateSitemap();
	}
	if(isset($_POST['reparameters'])) {
		$DMXChartManager->ResetTableParameters();
		$DMXChartManager->SetParameters();
		$feedback[] = 'DMX Attributs table updated!';
	}
	if(isset($_POST['restats'])) {
		$DMXChartManager->ResetTableStats();
		$feedback[] = 'Statistics updated!';
		UpdateStats();
	}
	if(isset($_POST['updatefixture'])) {
		$DMXChartManager->ResetTableQuality();
		$Fixtures = $DMXChartManager->SearchAllWheelFixture();
		foreach($Fixtures AS $Fixture) {
			$DMXChartManager->UpdatePicture(new DMXChart($Fixture));
		}
		$feedback[] = 'Fixture updated with HTML Colors and Gobos!';
	}
	if(isset($_POST['scanfixture']) OR isset($_POST['scanpreset']) OR isset($_POST['scanpicture'])) {
		if(isset($_POST['scanfixture'])) {
			//$DMXChartManager->ResetTableFixture();
			define('sFixt', TRUE);
		} else {
			define('sFixt', FALSE);
		}
		if(isset($_POST['scanpreset'])) {
			define('sPreset', TRUE);
		}else {
			define('sPreset', FALSE);
		}
		if(isset($_POST['scanpicture'])) {
			$DMXChartManager->ResetTablePictures();
			define('sPict', TRUE);
		}else {
			define('sPict', FALSE);
		}
		$Personality = 'Personalities';
		$Accessories = 'AccessoriesIndex';
		$regex = '/(.*)\/(.*)\/(.*)\.xml/i';
		$regexAccessories = '/(.*)\/(.*)\.xml/i';
		$regexExtractColor = '/\(([0-9]{1,3}) ?\, ?([0-9]{1,3}) ?\, ?([0-9]{1,3}) ?\)/i';
		//$Folders = array('2014-07-14', '2014-09-10', '2014-11-01', '2014-11-14', '2015-02-23', '2015-05-24', '2015-06-20', '2015-10-01', '2015-12-17', '2016-03-01', '2016-07-11', '2016-08-24', '2016-10-17', '2017-01-26', '2017-04-06', '2017-07-13', '2017-09-17', '2017-11-28');
		$Folders = array(_DateLibrary_);
		class SortedIterator extends SplHeap {
			public function __construct(Iterator $iterator) {
				foreach ($iterator as $item) {
					if($item->getfileName() != '.' AND $item->getfileName() != '..') {
						$this->insert($item);
					}
				}
			}
			public function compare($b,$a) {
				return strcmp($a->getRealpath(), $b->getRealpath());
			}
		}
		foreach($Folders AS $FolderLib) {
			//Scan all directory
			$dit = new RecursiveDirectoryIterator('m-pc/'.$FolderLib.'-FixtureLibrary/');
			$rit = new RecursiveIteratorIterator($dit);
			$sit = new SortedIterator($rit);

			$database = array();
			foreach($sit as $file) {
				if(!$file->isDir()) {
					$PathName = str_replace('m-pc/'.$FolderLib.'-FixtureLibrary/', '', $file->getPathname());
					if((sFixt OR sPreset) AND preg_match($regex, $PathName, $Matches)) {
						//Personnality Fixture Find found
						if($Matches[3] == $Personality) {
							$database[$Matches[1]][$Matches[2]][$Personality] = TRUE;
						} elseif($Matches[3] != $Accessories) {
							$database[$Matches[1]][$Matches[2]]['Profile'] = $Matches[3].'.xml';
						} else {
							$DMXChartManager->QualityScan('Unwanted File', 'XML', $Matches[1], $Matches[2], '', $Matches[3]);
						}
					} elseif(sPict AND preg_match($regexAccessories, $PathName, $Matches)) {
						//Accessories manufacture file found
						if($Matches[2] == $Accessories)	{
							$AccessoriesXml = simplexml_load_file(fileExists($file->getPathname(), FALSE));
							//Color
							$Colors = $AccessoriesXml->ColorIndex->Color;
							$ColorsManufacturer = (string) $AccessoriesXml->ColorIndex['manufacturer'];
							if(count($Colors) > 0) {
								foreach($Colors AS $color) {
									$ColorName = (string) trim($color['name']);
									$ColorContent = (string) trim($color);
									if(preg_match($regexExtractColor, $ColorContent, $RGB)) {
										$OrdersID = NULL;
										if(isset($color->OrderId)) {
											foreach($color->OrderId AS $OrderID) {
												$OrdersID.= (string) $OrderID."\n";
											}
										}
										$DMXChartManager->SavePicture(new MANUFAccessories(array('manufacturer' => $Matches[1], 'name' => $ColorName, 'orderid' => trim($OrdersID), 'red' => $RGB[1], 'green' => $RGB[2], 'blue' => $RGB[3], 'mode' => _modeColor_)));
										unset($RGB, $OrdersID);
									}
									unset($ColorName, $ColorContent);
								}
							}
							//Gobos
							SetAndSavePicture(_modeGobo_, $AccessoriesXml, $Matches[1]);
							//Animation
							SetAndSavePicture(_modeAnimation_, $AccessoriesXml, $Matches[1]);
						}
						unset($Matches, $AccessoriesXml, $Colors, $ColorsManufacturer);
					}
					unset($PathName, $PictureFile);
				}
			}
			unset($sit);
			if(sPict) {
				$feedback[] = 'Manufacturer Pictures scan ended';
			}
			if(sFixt OR sPreset) {
				foreach($database AS $Manufacturer => $Fixtures) {
					foreach($Fixtures AS $Fixture => $Keys) {
						$actualMode = NULL;
						$default = NULL;
						$ListMode = array();
						$baseDirectory = 'm-pc/'.$FolderLib.'-FixtureLibrary/'.$Manufacturer.'/'.$Fixture.'/';
						if(isset($Keys[$Personality]) AND $Keys[$Personality] == TRUE) {
							$Modes = simplexml_load_file(fileExists($baseDirectory.$Personality.'.xml', FALSE));
							$default = strtolower((string) $Modes->Category['default']);
							foreach($Modes->Category AS $Category) {
								$CateroryMode = (string) $Category['name'];
								$CateroryMode = (strtolower($CateroryMode) != 'mode') ? $CateroryMode.' > ' : '';
								foreach($Category->Personality AS $Mode) {
									//Remove default profile from array
									$ModeName = (string) $Mode['name'];
									$Mode = (string) $Mode;
									if(!empty($Mode)) {
										$ListMode[$CateroryMode.$ModeName] = $Mode;
									} else {
										$actualMode = $CateroryMode.$ModeName;
									}
									unset($ModeName, $Mode);
								}
								unset($CateroryMode);
							}
							unset($Modes);
						}
						$defaultXml = $Keys['Profile'];
						$DMXArray = array('manufacturer' => $Manufacturer, 'fixture' =>  str_replace('\xc2\xa0', '\x20', $Fixture), 'mode' => $actualMode);
						if($default != 'none') {
							SaveDMXChart($DMXArray, simplexml_load_file(fileExists($baseDirectory.$defaultXml, FALSE)));
						}
						if(count($ListMode) >= 1) {
							foreach($ListMode AS $Name => $xslt) {
								// XML
								$xml_doc = new DOMDocument();
								$xml_doc->load(fileExists($baseDirectory.$defaultXml, FALSE));
								// XSL
								$xsl_doc = new DOMDocument();
								if(strpos($xslt, '.xslt') ===  FALSE) {
									if(!sPreset) {
										$DMXChartManager->QualityScan('Extension missing', 'XSLT', $DMXArray['manufacturer'], $DMXArray['fixture'], $FolderLib, str_replace('m-pc/'.$FolderLib.'-FixtureLibrary/', '', $baseDirectory.$xslt));
									}
									$xslt.= '.xslt';
								}
								if(@$xsl_doc->load(fileExists($baseDirectory.$xslt, FALSE))) {
									$proc = new XSLTProcessor();
									$proc->importStylesheet($xsl_doc);
									$xml = $proc->transformToXML($xml_doc);
									$DMXArray['mode'] = $Name;
									SaveDMXChart($DMXArray, simplexml_load_string($xml));
								} else {
									if(!sPreset) {
										$DMXChartManager->QualityScan('Bad file', 'XSLT', $DMXArray['manufacturer'], $DMXArray['fixture'], $FolderLib, str_replace('m-pc/'.$FolderLib.'-FixtureLibrary/', '', $baseDirectory.$xslt));
									}
								}
								unset($xml_doc, $proc, $xml);
							}
						}
						unset($actualMode, $default, $ListMode, $baseDirectory, $DMXArray);
					}
				}
				$feedback[] = 'Fixture library scan ended';
			}
			unset($database);
		}
	}
}
?>
<form method="post">
	<div>
		<fieldset>
			<h2>Scans</h2>
			<div>
				<div>
					<label for="scanfixture">
						🗃 Fixtures
						<span>1 - Scan the fixtures profiles</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="scanfixture" name="scanfixture" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="scanpreset">
						🗃 Fixtures Presets
						<span>2 - Scan the fixtures preset</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="scanpreset" name="scanpreset" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="scanpicture">
						🗃 Pictures
						<span>3 - Scan the manufacturers pictures</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="scanpicture" name="scanpicture" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="updatefixture">
						🗃 Fixtures Pictures
						<span>4 - Update Fixture with Pictures</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="updatefixture" name="updatefixture" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="reparameters">
						📒 DMX Attributs
						<span>5 - Activate the DMX Attribut building</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="reparameters" name="reparameters" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="checkEvol">
						🗃 Fixture Changelog
						<span>6 - Compute Fixture Changelog</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="checkEvol" name="checkEvol" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="restats">
						📈 Statistics
						<span>7 - Compute Statistics Infos</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="restats" name="restats" value="1" />
				</div>
			</div>
		</fieldset>
		<fieldset>
			<h2>Quality</h2>
			<div>
				<div>
					<label>
						File system
						<span>File system report</span>
					</label>
				</div>
				<div>
					<a href="./<?php echo _QualityScan_; ?>">Global file report</a>
				</div>
			</div>
			<div>
				<div>
					<label>
						Fixtures Profile
						<span>Fixture Picture and Gobo Quality</span>
					</label>
				</div>
				<div>
					<a href="./<?php echo _Quality_; ?>">Fixture Quality report</a>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<h2>Referencing</h2>
			<div>
				<div>
					<label for="resitemap">
						🖧 Renew Sitemap
						<span>~1 minute</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="resitemap" name="resitemap" value="1" />
				</div>
			</div>
		</fieldset>
		<fieldset>
			<h2>Cache Management</h2>
			<div>
				<div>
					<label for="cleancache">
						📁 Clean all caches
						<span>less than a minute</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="cleancache" name="cleancache" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="cleancacheChangelog">
						🗍 Clean Changelog cache
						<span>less than a second</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="cleancacheChangelog" name="cleancacheChangelog" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="cleancacheFixtureChangelog">
						🗍 Clean Fixture Changelog cache
						<span>less than a second</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="cleancacheFixtureChangelog" name="cleancacheFixtureChangelog" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="cleancacheFixtureList">
						🗍 Clean Fixture list cache
						<span>less than a second</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="cleancacheFixtureList" name="cleancacheFixtureList" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="cleancacheFixtureDetail">
						🗍 Clean Fixture detail cache
						<span>less than a second</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="cleancacheFixtureDetail" name="cleancacheFixtureDetail" value="1" />
				</div>
			</div>
			<div>
				<div>
					<label for="cleancacheSearch">
						🗍 Clean Search Cache
						<span>less than a second</span>
					</label>
				</div>
				<div>
					<input type="checkbox" id="cleancacheSearch" name="cleancacheSearch" value="1" />
				</div>
			</div>
			</fieldset>
			<fieldset>
				<h2>Security</h2>
				<div>
					<div>
						<label for="parse">
							🔒 Password
							<span>It is an admin part :)</span>
						</label>
					</div>
					<div>
						<input type="password" name="parse" id="parse"/>
					</div>
				</div>

				<div>
					<div>
						<label for="submit">
							Ready?
							<span>Let's go!</span>
						</label>
					</div>
					<div>
						<input name="submit" id="submit" type="submit" value="Have some fun ..." />
					</div>
				</div>
			</fieldset>
		</div>
		<?php
		if(count($feedback) > 0) {
			?>
			<div>
				<fieldset>
					<h2>Actions finished</h2>
					<ul>
						<li><?php echo implode('</li><li>', $feedback); ?></li>
					</ul>
				</fieldset>
			</div>
			<?php
		}
		?>
	</form>
