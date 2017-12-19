<?php
class DMXChartManager
	{
	// Mode per fixture: SELECT `Manufacturer`, `Fixture`, COUNT(`mode`) AS `NbMode` FROM `Fixtures` GROUP BY `Manufacturer`, `Fixture` ORDER BY COUNT(`mode`) DESC 
	// Max Mode of one fixture: SELECT `Manufacturer`, `Fixture`, `channels`, COUNT(`mode`) AS `NbMaxMode` FROM `Fixtures` GROUP BY `Manufacturer`, `Fixture` HAVING COUNT(`mode`) >= ALL (SELECT COUNT(`mode`) FROM `Fixtures` GROUP BY `Manufacturer`, `Fixture`)
	// Max Channel of one fixture: SELECT `Manufacturer`, `Fixture`, `mode`, MAX(`channels`) AS `NbMaxCh` FROM `Fixtures`
	private $_db;
	private $_debug;

	public function __construct($db)
		{
		$this->setDb($db);
		}
		
	# Getters
		public function debug() { return $this->_debug; }
	# /Getters
		
	# Setters
		public function setDebug($debug)
				{
				ob_start();
				var_dump($debug);
				$result = ob_get_clean();
				if(is_string($result))
					{
					$this->_debug = $result;
					}
				}
		private function setDb(PDO $db)
			{
			$this->_db = $db;
			}
	# /Setters
	/* public function SelectParameters($name)
		{
		$Parameters = $this->GetParameters();
		if(count($Parameters>0))
			{
			$return = '<div id="'._Channel_.'SPB8"><div class="label">#SPB8<span>Channel type</span></div><select autocomplete="off" class="'._Channel_.'" name="'._Channel_.'SPB8">'."\n";
			if($name == 1)
				{
				$return = str_replace('SPB8', '1', $return);
				}
			$return.= "\t".'<option value="'._ValAny_.'" selected="selected">'.ucwords(_ValAny_).'</option>'."\n";
			foreach($Parameters AS $Parameter)
				{
				if(!empty($Parameter['Val']))
					{
					$return.= "\t".'<option value="'.$Parameter['Val'].'">'.ucwords($Parameter['Val']).'</option>'."\n";
					}
				}
			$return.= '</select></div>'."\n";
			return $return;
			}
			else
				{
				return FALSE;
				}
		} */
	public function SelectParameters($limit=false)
		{
		$Parameters = $this->GetParameters($limit);
		$data = array();
		if(count($Parameters>0))
			{
			$data[] = '{id:\''.strtolower(_ValAny_).'\',text:\''.ucwords(_ValAny_).'\'}';
			foreach($Parameters AS $Parameter)
				{
				if(!empty($Parameter['Val']))
					{
					$data[] = '{id:\''.strtolower($Parameter['Val']).'\',text:\''.ucwords($Parameter['Val']).'\'}';
					}
				}
			return '['.implode(',', $data).']';
			}
			else
				{
				return FALSE;
				}
		}
	public function GetColor($Manufacturer, $Name) {
		$query = 'SELECT `Red`, `Green`, `Blue`, `Name`, `orderid` FROM `Index_Color` WHERE `Manufacturer` = :manufacturer AND (`Name` = :name OR `orderid` LIKE :orderid) LIMIT 1';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':manufacturer', $Manufacturer, PDO::PARAM_STR);
		$prep->bindValue(':name', $Name, PDO::PARAM_STR);
		$prep->bindValue(':orderid', '%'.$Name.'%', PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
	}
	public function GetGobo($Manufacturer, $Name) {
		$query = '
			SELECT
				E.`Img`, E.`Name`, E.`orderid`, E.`Manufacturer`
			FROM
				`Index_Gobo` AS S	
			JOIN `Index_Gobo` AS E
				ON S.`md5` = E.`md5`
			WHERE
				S.`Manufacturer` = :manufacturer AND (S.`Name` = :name OR S.`orderid` LIKE :orderid)
			LIMIT 1';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':manufacturer', $Manufacturer, PDO::PARAM_STR);
		$prep->bindValue(':name', $Name, PDO::PARAM_STR);
		$prep->bindValue(':orderid', '%'.$Name.'%', PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
	}
	public function GetAnimation($Manufacturer, $Name) {
		$query = '
			SELECT
				E.`Img`, E.`Name`, E.`orderid`, E.`Manufacturer`
			FROM
				`Index_Animation` AS S	
			JOIN `Index_Animation` AS E
				ON S.`md5` = E.`md5`
			WHERE
				S.`Manufacturer` = :manufacturer AND (S.`Name` = :name OR S.`orderid` LIKE :orderid)
			LIMIT 1';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':manufacturer', $Manufacturer, PDO::PARAM_STR);
		$prep->bindValue(':name', $Name, PDO::PARAM_STR);
		$prep->bindValue(':orderid', '%'.$Name.'%', PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
	}
	public function GetParameters($limit=false) {
		$query = ($limit) ? 'SELECT DISTINCT `position`, `correct` AS Val FROM `Params` ORDER BY `position` ASC, `correct` ASC' : 'SELECT DISTINCT `parameter` AS Val FROM `Params` ORDER BY `parameter` ASC';
		if($limit) {
			$query.= ' LIMIT '.$limit;
		}
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
		}
	public function SelectFixtureNames($limit=false)
		{
		$Parameters = $this->GetFixtureNames($limit);
		if(count($Parameters>0))
			{
			$return = '<div><div><label for="'._FixtureName_.'">Fixture Name<span>Specific Fixture\'s name</span></label></div><div><select data-default="'._ValAny_.'" autocomplete="off" id="'._FixtureName_.'" name="'._FixtureName_.'">'."\n";
			$return.= "\t".'<option value="'.strtolower(_ValAny_).'" selected="selected">'.ucwords(_ValAll_).'</option>'."\n";
			$letter = '';
			foreach($Parameters AS $Parameter) {
				$Newletter = strtoupper(substr($Parameter['name'],0,1));
				if($Newletter != $letter) {
					$FirstRun = ($letter == '') ? TRUE : FALSE;
					$letter = $Newletter;
					if($FirstRun) {
						$return.= "\n\t".'<optgroup label="'.$letter.'">'."\n";
					} else {
						$return.= "\t".'</optgroup>'."\n\t".'<optgroup label="'.$letter.'">'."\n";
					}
				}
				$return.= "\t\t".'<option value="'.strtolower($Parameter['name']).'">'.$Parameter['name'].'</option>'."\n";
			}
			$return.= '</select></div></div>'."\n";
			return $return;
			}
			else
				{
				return FALSE;
				}
		}
	public function SelectManufacturers($limit=false)
		{
		$Parameters = $this->GetManufacturers($limit);
		if(count($Parameters>0))
			{
			$return = '<div><div><label for="'._Manufacturer_.'">Manufacturer<span>Specific Manufacturer\'s fixture</span></label></div><div><select data-default="'._ValAny_.'" autocomplete="off" id="'._Manufacturer_.'" name="'._Manufacturer_.'">'."\n";
			$return.= "\t".'<option value="'.strtolower(_ValAny_).'" selected="selected">'.ucwords(_ValAll_).'</option>'."\n";
			$letter = '';
			foreach($Parameters AS $Parameter) {
				$Newletter = strtoupper(substr($Parameter['name'],0,1));
				if($Newletter != $letter) {
					$FirstRun = ($letter == '') ? TRUE : FALSE;
					$letter = $Newletter;
					if($FirstRun) {
						$return.= "\n\t".'<optgroup label="'.$letter.'">'."\n";
					} else {
						$return.= "\t".'</optgroup>'."\n\t".'<optgroup label="'.$letter.'">'."\n";
					}
				}
				$return.= "\t\t".'<option value="'.strtolower($Parameter['name']).'">'.$Parameter['name'].'</option>'."\n";
			}
			$return.= '</select></div></div>'."\n";
			return $return;
			}
			else
				{
				return FALSE;
				}
	}	
	public function ConvertDate($date) {
		$r = new DateTime($date);
		return $r->format('d F Y'); 
	}
	public function GetFixtureDates(DMXChart $DMXChart) {
		$query = "	SELECT MIN(`lastdate`) AS 'lastdate' FROM `Fixtures` WHERE `Manufacturer` = :manufacturer AND `Fixture` = :fixture AND `status` = 'added'
			UNION
			SELECT MAX(`lastdate`) AS 'lastdate' FROM `Fixtures` WHERE `Manufacturer` = :manufacturer AND `Fixture` = :fixture AND `status` = 'updated'";
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':manufacturer', $DMXChart->manufacturer(), PDO::PARAM_STR);
		$prep->bindValue(':fixture', $DMXChart->fixture(), PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? '🗓️ <strong>'.$this->ConvertDate((!empty($data[1]['lastdate'])) ? $data[1]['lastdate'] : $data[0]['lastdate']).'</strong>' : FALSE;
	}
	public function GetFixtureNames($limit=false) {
		$query = 'SELECT DISTINCT(`Fixture`) AS `name` FROM `Fixtures` WHERE `lastdate` = :lastdate';
		if($limit) {
			$query.= ' LIMIT '.$limit;
		}
		$query.= ' ORDER BY `name` ASC';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
	}
	public function GetManufacturers($limit=false) {
		$query = 'SELECT `name` FROM `Manufacturers`';
		if($limit) {
			$query.= ' LIMIT '.$limit;
		}
		$query.= ' ORDER BY `name` ASC';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
	}
	public function Quality($error, $type, DMXChart $DMXChart, $wheel, $manufacturer, $picture) {
		$query = 'INSERT INTO `Quality` (`Line`) VALUES (:line);';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':line', $error.';'.$type.';'.$DMXChart->Manufacturer().';'.$DMXChart->fixture().';'.$wheel.';'.$manufacturer.';'.$picture.';', PDO::PARAM_STR);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
	}
	public function QualityScan($Defect=FALSE, $Type=FALSE, $Manufacturer=FALSE, $ManufacturerAttr=FALSE, $Name=FALSE, $FileLook=FALSE, $FileFound=FALSE, $md5=FALSE) {
		$query = 'INSERT INTO `QualityScan` (`Line`) VALUES (:line);';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':line', $Defect.';'.$Type.';'.$Manufacturer.';'.$ManufacturerAttr.';'.$Name.';'.$FileLook.';'.$FileFound.';'.$md5.';', PDO::PARAM_STR);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
	}
	public function ExportQualityScan() {
		set_time_limit(-1);
		ini_set('memory_limit', -1);
		$query = 'SELECT DISTINCT(`Line`) AS `Line` FROM `QualityScan`';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$datas = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		if(is_array($datas)) {
			$content = 'Defect;Type;Manufacturer;Manufacturer attribut;Name;File lookup;File found;Hash MD5;'."\n";
			foreach($datas AS $key => $value) {
				$content.= $value['Line']."\n";
			}
			return $content;
		} else {
			return FALSE;
		}
	}
	public function ExportQuality() {
		$query = 'SELECT DISTINCT(`Line`) AS `Line` FROM `Quality`';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$datas = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		if(is_array($datas)) {
			$content = 'Defect;Type;Fixture Manufacturer;Fixture Name;Wheel name;Picture Manufacturer;Picture name;'."\n";
			foreach($datas AS $key => $value) {
				$content.= $value['Line']."\n";
			}
			return $content;
		} else {
			return FALSE;
		}
	}
	public function HTMLAccessory($html, $Title, $Style) {
		return ($html == 'li') ? '<li title="'.$Title.'" style="'.$Style.'"></li>' : '<span class="WheelSlot" title="'.$Title.'" style="'.$Style.'"></span>';
	}
	public function RetrieveAccessory($html, $Type, $Manufacturer, $Name, $splitcolor=FALSE) {
		switch($Type) {
			case _modeGobo_:
				$Picture = $this->GetGobo($Manufacturer, $Name);
				if(empty($Picture[0]['Name']) AND empty($Picture[0]['orderid'])) {
					$Picture = $this->GetAnimation($Manufacturer, $Name);
					$Type = _modeAnimation_;
					if(empty($Picture[0]['Name']) AND empty($Picture[0]['orderid'])) {
						$Picture = $this->GetColor($Manufacturer, $Name);
						$Type = _modeColor_;
					}
				}
				break;
			case _modeAnimation_:
				$Picture = $this->GetAnimation($Manufacturer, $Name);
				if(empty($Picture[0]['Name']) AND empty($Picture[0]['orderid'])) {
					$Picture = $this->GetGobo($Manufacturer, $Name);
					$Type = _modeGobo_;
					if(empty($Picture[0]['Name']) AND empty($Picture[0]['orderid'])) {
						$Picture = $this->GetColor($Manufacturer, $Name);
						$Type = _modeColor_;
					}
				}
				break;
			case _modeColor_:
				$Picture = $this->GetColor($Manufacturer, $Name);
				if(empty($Picture[0]['Name']) AND empty($Picture[0]['orderid'])) {
					$Picture = $this->GetGobo($Manufacturer, $Name);
					$Type = _modeGobo_;
					if(empty($Picture[0]['Name']) AND empty($Picture[0]['orderid'])) {
						$Picture = $this->GetAnimation($Manufacturer, $Name);
						$Type = _modeAnimation_;
					}
				}
				break;
			default:
				break;
		}
		if(isset($Picture[0])) {
			$Title = !empty($Picture[0]['Name']) ? $Picture[0]['Name'] : $Picture[0]['orderid'];
			if($Type == _modeColor_ AND (!empty($Picture[0]['Name']) OR !empty($Picture[0]['orderid']))) {
				$Style = 'background-color: '.sprintf("#%02x%02x%02x", $Picture[0]['Red'], $Picture[0]['Green'], $Picture[0]['Blue']).';';
				if($splitcolor) {
					return array($Title, sprintf("#%02x%02x%02x", $Picture[0]['Red'], $Picture[0]['Green'], $Picture[0]['Blue']));
				} else {
					return $this->HTMLAccessory($html, $Title, $Style);
				}
			} elseif(!empty($Picture[0]['Name']) OR !empty($Picture[0]['orderid'])) {
				$Style = 'background-image: url(\''.str_replace(_MPCLib_, _CDN_, $Picture[0]['Img']).'\');';
				return $this->HTMLAccessory($html, $Title, $Style);
			} else {
				return FALSE;
			}
		} else {
			return FALSE;
		}
	}
	public function WriteWheel($DMXChart, $Type) {
		$Wheel = NULL;
		$OriginalType = $Type;
		switch($Type) {
			case _modeGobo_:
				for ($i = 1; $i <= 10; $i++) {
					$Wheel.= $DMXChart->{'gobodetails'.$i}();
					if($i < 10 AND $DMXChart->{'gobodetails'.($i+1)}() != NULL){
						$Wheel.= "\n";
					}
				}
				break;
			case _modeAnimation_:
				for ($i = 1; $i <= 10; $i++) {
					$Wheel.= $DMXChart->{'animationdetails'.$i}();
					if($i < 10 AND $DMXChart->{'animationdetails'.($i+1)}() != NULL){
						$Wheel.= "\n";
					}
				}
				break;
			case _modeColor_:
				for ($i = 1; $i <= 10; $i++) {
					$Wheel.= $DMXChart->{'colordetails'.$i}();
					if($i < 10 AND $DMXChart->{'colordetails'.($i+1)}() != NULL){
						$Wheel.= "\n";
					}
				}
				break;
			default:
				break;
		}
			if($Wheel != NULL) {
				$Datas = explode("\n", $Wheel);
				if(count($Datas) > 0 AND strpos($Wheel, '|') !== FALSE) {
					$PreWheel = '';
					$content = '<span id="wheel'.strtolower($Type).'">';
					foreach($Datas AS $Data) {
						$Type = $OriginalType;
						list($AsWheel, $slot, $Manufacturer, $Name) = explode('|', $Data);
						if($PreWheel != $AsWheel) {
							if($PreWheel != '') {
								$content.= '</ul></span>';
							}
							$content.= '<span class="wheel'.strtolower($Type).'"><span>Wheel '.$AsWheel.'</span><ul>';
							$PreWheel = $AsWheel;
						}
						if(!empty($Name)) {
							$WheelPicture = $this->RetrieveAccessory('li', $Type, $Manufacturer, $Name);
							if($WheelPicture !== FALSE) {
								$content.= $WheelPicture;
							} else {
								$this->Quality('File missing', ucfirst($OriginalType), $DMXChart, $AsWheel, $Manufacturer, $Name);
							}
						}
					}
					$content.= '</ul></span></span>';
					return $content;
				} else {
					return $Wheel;
				}
			} else {
				return NULL;
			}
		}
	public function DisplayWheels(DMXChart $DMXChart) {
		$content = $DMXChart->wheelcolor().$DMXChart->wheelgobo().$DMXChart->wheelanimation();
		return (($content != '') ? '<span class="display">'.$content.'</span>' : '');
	}
	public function DisplayDMXChart(DMXChart $DMXChart, $type='ul') {
		if($type == 'table') {
			$content = '<table>'."\n";
				$content.= "\t".'<thead>'."\n";
					$content.= "\t\t".'<tr>'."\n";
						$content.= "\t\t\t".'<td>#</td>'."\n";
						$content.= "\t\t\t".'<td>Type</td>'."\n";
						$content.= "\t\t\t".'<td>Presets</td>'."\n";
					$content.= "\t\t".'</tr>'."\n";
				$content.= "\t".'</thead>'."\n";
				$content.= "\t".'<tbody>'."\n";
					for($i=1; $i<=512; $i++) {
						$dmx = $DMXChart->{'ch'.$i}();
						$dmxpreset = $DMXChart->{'ch'.$i.'details'}();
						if($dmx != NULL) {
							$content.= "\t\t".'<tr>'."\n";
								$content.= "\t\t\t".'<td>'.$i.'</td>'."\n";
								$content.= "\t\t\t".'<td>'.$dmx.'</td>'."\n";
								$content.= "\t\t\t".'<td>'.nl2br($dmxpreset).'</td>'."\n";
							$content.= "\t\t".'</tr>'."\n";
						} else {
							break;
						}
					}
				$content.= "\t".'<tbody>'."\n";
			$content.= '</table>';
		} else {
			$content = '<ul>'."\n";
			for($i=1; $i<=512; $i++) {
				$dmx = $DMXChart->{'ch'.$i}();
				if($dmx != NULL) {
					$content.= "\t\t".'<li>'.$i.' - '.$dmx.'</li>'."\n";
					} else {
						break;
					}
			}
			$content.= '</ul>'."\n";
		}
		return $content;
	}
	public function DropDownSlots() {
		$data = array();
		$data[] = '{id:\''.strtolower(_ValAny_).'\',text:\''.ucwords(_ValAny_).'\'}';
		for($i=1; $i<=25; $i++) {
			$data[] = '{id:\''.$i.'\',text:\''.$i.'\'}';
			}
		return '['.implode(',', $data).']';
		}
	public function GetLinkChart(DMXChart $DMXChart)
		{
		$content = '#SearchMode=Exact&amp;DisplayMode=0&amp;FullParam=1&amp;MaxChannels=000&amp;count='.$DMXChart->channels().'&amp;Manufacturer=Any&amp;';
		for($i=1; $i<=512; $i++)
			{
			$dmx = $DMXChart->{'ch'.$i}();
			if($dmx != NULL)
				{
				$content.='ch'.$i.'='.$dmx.'&amp;';
				}
				else
					{
					break;
					}
			}
		$content = substr($content, 0, -5);
		
		return $content;
		}
	public function FixtureInfos(DMXChart $DMXChart) {
		$query = 'SELECT * FROM `Fixtures` WHERE `manufacturer` = :manufacturer AND `fixture` = :fixture AND `lastdate` = :lastdate ORDER BY `channels`, `mode`;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':manufacturer', $DMXChart->manufacturer(), PDO::PARAM_STR);
		$prep->bindValue(':fixture', $DMXChart->fixture(), PDO::PARAM_STR);
		$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
	}
	public function CountFixtureDate($lastdate) {
		$query = 'SELECT `manufacturer`, `fixture` FROM `Fixtures` WHERE `lastdate` = :lastdate GROUP BY `manufacturer`, `fixture`;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', $lastdate, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return count($data);
	}
	public function DeltaDate($lastdate) {
		$query = 'SELECT `lastdate` FROM `Fixtures` WHERE `lastdate` < :lastdate ORDER BY `lastdate` DESC LIMIT 1 ;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', $lastdate, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetch(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return ($data) ? $this->CountFixtureDate($data['lastdate']) : 0;
	}
	public function ListAllRelease() {
		$query = 'SELECT DISTINCT(`lastdate`) AS `lastdate` FROM `Fixtures` ORDER BY `lastdate` DESC;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
	}
	public function FixtureChangeLog(DMXChart $DMXChart) {
		$query = 'SELECT `manufacturer`, `fixture`, GROUP_CONCAT(CONCAT(`mode`, " (", `channels`, "ch)") SEPARATOR ", ") AS `mode`, `status`, `evol`, `lastdate` FROM `Fixtures` WHERE `manufacturer` = :manufacturer AND `fixture` = :fixture AND `status` != "same" GROUP BY `manufacturer`, `fixture`, `evol`, `lastdate` ORDER BY `lastdate` DESC, `manufacturer`, `fixture`, `mode`, `status` DESC';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':manufacturer', $DMXChart->manufacturer(), PDO::PARAM_STR);
		$prep->bindValue(':fixture', $DMXChart->fixture(), PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
	}
	public function FixtureLog($lastdate, $status) {
		$query = 'SELECT `manufacturer`, `fixture`, GROUP_CONCAT(CONCAT(`mode`, " (", `channels`, "ch)") SEPARATOR ", ") AS `mode`, `status`, `evol` FROM `Fixtures` WHERE `lastdate` = :lastdate AND `status` = :status GROUP BY `manufacturer`, `fixture`, `evol`, `lastdate` ORDER BY `manufacturer`, `fixture`, `mode`, `status` DESC;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', $lastdate, PDO::PARAM_STR);
		$prep->bindValue(':status', $status, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
	}
	public function GetFixtureChart(DMXChart $DMXChart, $lastdate) {
		$query = 'SELECT `Manufacturer`,`Fixture`,`status`,`evol`,`lastdate`,`mh`,`mode`,`channels`,`wheel`,`ColorSlots1`,`ColorDetails1`,`ColorSlots2`,`ColorDetails2`,`ColorSlots3`,`ColorDetails3`,`ColorSlots4`,`ColorDetails4`,`ColorSlots5`,`ColorDetails5`,`ColorSlots6`,`ColorDetails6`,`ColorSlots7`,`ColorDetails7`,`ColorSlots8`,`ColorDetails8`,`ColorSlots9`,`ColorDetails9`,`ColorSlots10`,`ColorDetails10`,`wheelcolor`,`GoboSlots1`,`GoboDetails1`,`GoboSlots2`,`GoboDetails2`,`GoboSlots3`,`GoboDetails3`,`GoboSlots4`,`GoboDetails4`,`GoboSlots5`,`GoboDetails5`,`GoboSlots6`,`GoboDetails6`,`GoboSlots7`,`GoboDetails7`,`GoboSlots8`,`GoboDetails8`,`GoboSlots9`,`GoboDetails9`,`GoboSlots10`,`GoboDetails10`,`wheelgobo`,`AnimationSlots1`,`AnimationDetails1`,`AnimationSlots2`,`AnimationDetails2`,`AnimationSlots3`,`AnimationDetails3`,`AnimationSlots4`,`AnimationDetails4`,`AnimationSlots5`,`AnimationDetails5`,`AnimationSlots6`,`AnimationDetails6`,`AnimationSlots7`,`AnimationDetails7`,`AnimationSlots8`,`AnimationDetails8`,`AnimationSlots9`,`AnimationDetails9`,`AnimationSlots10`,`AnimationDetails10`,`wheelanimation`,`ch1`,`ch2`,`ch3`,`ch4`,`ch5`,`ch6`,`ch7`,`ch8`,`ch9`,`ch10`,`ch11`,`ch12`,`ch13`,`ch14`,`ch15`,`ch16`,`ch17`,`ch18`,`ch19`,`ch20`,`ch21`,`ch22`,`ch23`,`ch24`,`ch25`,`ch26`,`ch27`,`ch28`,`ch29`,`ch30`,`ch31`,`ch32`,`ch33`,`ch34`,`ch35`,`ch36`,`ch37`,`ch38`,`ch39`,`ch40`,`ch41`,`ch42`,`ch43`,`ch44`,`ch45`,`ch46`,`ch47`,`ch48`,`ch49`,`ch50`,`ch51`,`ch52`,`ch53`,`ch54`,`ch55`,`ch56`,`ch57`,`ch58`,`ch59`,`ch60`,`ch61`,`ch62`,`ch63`,`ch64`,`ch65`,`ch66`,`ch67`,`ch68`,`ch69`,`ch70`,`ch71`,`ch72`,`ch73`,`ch74`,`ch75`,`ch76`,`ch77`,`ch78`,`ch79`,`ch80`,`ch81`,`ch82`,`ch83`,`ch84`,`ch85`,`ch86`,`ch87`,`ch88`,`ch89`,`ch90`,`ch91`,`ch92`,`ch93`,`ch94`,`ch95`,`ch96`,`ch97`,`ch98`,`ch99`,`ch100`,`ch101`,`ch102`,`ch103`,`ch104`,`ch105`,`ch106`,`ch107`,`ch108`,`ch109`,`ch110`,`ch111`,`ch112`,`ch113`,`ch114`,`ch115`,`ch116`,`ch117`,`ch118`,`ch119`,`ch120`,`ch121`,`ch122`,`ch123`,`ch124`,`ch125`,`ch126`,`ch127`,`ch128`,`ch129`,`ch130`,`ch131`,`ch132`,`ch133`,`ch134`,`ch135`,`ch136`,`ch137`,`ch138`,`ch139`,`ch140`,`ch141`,`ch142`,`ch143`,`ch144`,`ch145`,`ch146`,`ch147`,`ch148`,`ch149`,`ch150`,`ch151`,`ch152`,`ch153`,`ch154`,`ch155`,`ch156`,`ch157`,`ch158`,`ch159`,`ch160`,`ch161`,`ch162`,`ch163`,`ch164`,`ch165`,`ch166`,`ch167`,`ch168`,`ch169`,`ch170`,`ch171`,`ch172`,`ch173`,`ch174`,`ch175`,`ch176`,`ch177`,`ch178`,`ch179`,`ch180`,`ch181`,`ch182`,`ch183`,`ch184`,`ch185`,`ch186`,`ch187`,`ch188`,`ch189`,`ch190`,`ch191`,`ch192`,`ch193`,`ch194`,`ch195`,`ch196`,`ch197`,`ch198`,`ch199`,`ch200`,`ch201`,`ch202`,`ch203`,`ch204`,`ch205`,`ch206`,`ch207`,`ch208`,`ch209`,`ch210`,`ch211`,`ch212`,`ch213`,`ch214`,`ch215`,`ch216`,`ch217`,`ch218`,`ch219`,`ch220`,`ch221`,`ch222`,`ch223`,`ch224`,`ch225`,`ch226`,`ch227`,`ch228`,`ch229`,`ch230`,`ch231`,`ch232`,`ch233`,`ch234`,`ch235`,`ch236`,`ch237`,`ch238`,`ch239`,`ch240`,`ch241`,`ch242`,`ch243`,`ch244`,`ch245`,`ch246`,`ch247`,`ch248`,`ch249`,`ch250`,`ch251`,`ch252`,`ch253`,`ch254`,`ch255`,`ch256`,`ch257`,`ch258`,`ch259`,`ch260`,`ch261`,`ch262`,`ch263`,`ch264`,`ch265`,`ch266`,`ch267`,`ch268`,`ch269`,`ch270`,`ch271`,`ch272`,`ch273`,`ch274`,`ch275`,`ch276`,`ch277`,`ch278`,`ch279`,`ch280`,`ch281`,`ch282`,`ch283`,`ch284`,`ch285`,`ch286`,`ch287`,`ch288`,`ch289`,`ch290`,`ch291`,`ch292`,`ch293`,`ch294`,`ch295`,`ch296`,`ch297`,`ch298`,`ch299`,`ch300`,`ch301`,`ch302`,`ch303`,`ch304`,`ch305`,`ch306`,`ch307`,`ch308`,`ch309`,`ch310`,`ch311`,`ch312`,`ch313`,`ch314`,`ch315`,`ch316`,`ch317`,`ch318`,`ch319`,`ch320`,`ch321`,`ch322`,`ch323`,`ch324`,`ch325`,`ch326`,`ch327`,`ch328`,`ch329`,`ch330`,`ch331`,`ch332`,`ch333`,`ch334`,`ch335`,`ch336`,`ch337`,`ch338`,`ch339`,`ch340`,`ch341`,`ch342`,`ch343`,`ch344`,`ch345`,`ch346`,`ch347`,`ch348`,`ch349`,`ch350`,`ch351`,`ch352`,`ch353`,`ch354`,`ch355`,`ch356`,`ch357`,`ch358`,`ch359`,`ch360`,`ch361`,`ch362`,`ch363`,`ch364`,`ch365`,`ch366`,`ch367`,`ch368`,`ch369`,`ch370`,`ch371`,`ch372`,`ch373`,`ch374`,`ch375`,`ch376`,`ch377`,`ch378`,`ch379`,`ch380`,`ch381`,`ch382`,`ch383`,`ch384`,`ch385`,`ch386`,`ch387`,`ch388`,`ch389`,`ch390`,`ch391`,`ch392`,`ch393`,`ch394`,`ch395`,`ch396`,`ch397`,`ch398`,`ch399`,`ch400`,`ch401`,`ch402`,`ch403`,`ch404`,`ch405`,`ch406`,`ch407`,`ch408`,`ch409`,`ch410`,`ch411`,`ch412`,`ch413`,`ch414`,`ch415`,`ch416`,`ch417`,`ch418`,`ch419`,`ch420`,`ch421`,`ch422`,`ch423`,`ch424`,`ch425`,`ch426`,`ch427`,`ch428`,`ch429`,`ch430`,`ch431`,`ch432`,`ch433`,`ch434`,`ch435`,`ch436`,`ch437`,`ch438`,`ch439`,`ch440`,`ch441`,`ch442`,`ch443`,`ch444`,`ch445`,`ch446`,`ch447`,`ch448`,`ch449`,`ch450`,`ch451`,`ch452`,`ch453`,`ch454`,`ch455`,`ch456`,`ch457`,`ch458`,`ch459`,`ch460`,`ch461`,`ch462`,`ch463`,`ch464`,`ch465`,`ch466`,`ch467`,`ch468`,`ch469`,`ch470`,`ch471`,`ch472`,`ch473`,`ch474`,`ch475`,`ch476`,`ch477`,`ch478`,`ch479`,`ch480`,`ch481`,`ch482`,`ch483`,`ch484`,`ch485`,`ch486`,`ch487`,`ch488`,`ch489`,`ch490`,`ch491`,`ch492`,`ch493`,`ch494`,`ch495`,`ch496`,`ch497`,`ch498`,`ch499`,`ch500`,`ch501`,`ch502`,`ch503`,`ch504`,`ch505`,`ch506`,`ch507`,`ch508`,`ch509`,`ch510`,`ch511`,`ch512` FROM `Fixtures` WHERE `manufacturer` = :manufacturer AND `fixture` = :fixture AND `channels` = :channels AND `mode`= :mode AND `lastdate` = :lastdate;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':manufacturer', $DMXChart->manufacturer(), PDO::PARAM_STR);
		$prep->bindValue(':fixture', $DMXChart->fixture(), PDO::PARAM_STR);
		$prep->bindValue(':mode', $DMXChart->mode(), PDO::PARAM_STR);
		$prep->bindValue(':channels', $DMXChart->channels(), PDO::PARAM_INT);
		$prep->bindValue(':lastdate', $lastdate, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetch(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? new DMXChart($data) : FALSE;
	}
	public function UpdateFixture(DMXChart $DMXChart) {
		$query = 'UPDATE `Fixtures` SET `status` = :status, `evol` = :evol WHERE `manufacturer` = :manufacturer AND `fixture` = :fixture AND `channels` = :channels AND `mode`= :mode AND `lastdate` = :lastdate;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':manufacturer', $DMXChart->manufacturer(), PDO::PARAM_STR);
		$prep->bindValue(':fixture', $DMXChart->fixture(), PDO::PARAM_STR);
		$prep->bindValue(':mode', $DMXChart->mode(), PDO::PARAM_STR);
		$prep->bindValue(':channels', $DMXChart->channels(), PDO::PARAM_INT);
		$prep->bindValue(':lastdate', $DMXChart->lastdate(), PDO::PARAM_STR);
		$prep->bindValue(':status', $DMXChart->status(), PDO::PARAM_STR);
		$prep->bindValue(':evol', $DMXChart->evol(), PDO::PARAM_STR);
		$prep->execute();
		//var_dump("UPDATE `Fixtures` SET `status` = '".$DMXChart->status()."', `evol` = '".$DMXChart->evol()."' WHERE `manufacturer` = '".$DMXChart->manufacturer()."' AND `fixture` = '".$DMXChart->fixture()."' AND `channels` = ".$DMXChart->channels()." AND `mode`= ".$DMXChart->mode()." AND `lastdate` = '".$DMXChart->lastdate()."'", $DMXChart);
		$prep->closeCursor();
		$prep = NULL;
	}
	public function CheckEvol() {
		$query = 'SELECT DISTINCT(`lastdate`) AS `lastdate` FROM `Fixtures`;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$datas = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		if((is_array($datas))) {
			$count = count($datas);
			$LibraryRel = array();
			$i = 0;
			foreach($datas AS $key => $value) {
				$LibraryRel[$i]['lastdate'] = $value['lastdate'];
				$i++;
			}
			for($i = 1; $i<$count; $i++) {
				$PrevLibRel = $LibraryRel[$i-1];
				$ActLibRel = $LibraryRel[$i];
				$ActFixts = $this->SelectAllFixture($ActLibRel['lastdate']);
				foreach($ActFixts AS $Fixture) {
					$ActChart = new DMXChart($Fixture);
					$PrevChart = $this->GetFixtureChart($ActChart, $PrevLibRel['lastdate']);
					if(is_object($PrevChart)) {
						$Evol = $this->CompareChart($ActChart, $PrevChart);
						if($Evol) {
							$ActChart->setStatus('updated');
							$ActChart->setEvol($Evol);
							$this->UpdateFixture($ActChart);
						} else {
							$ActChart->setStatus('same');
							$ActChart->setEvol($Evol);
							$this->UpdateFixture($ActChart);
						}
					} else {
						$ActChart->setStatus('added');
						$this->UpdateFixture($ActChart);
					}
				}
			
			}
		}
	}
	
	public function CompareChart(DMXChart $New, DMXChart $Prev) {
		$Evol = array();
		if($Prev->mh() != $New->mh()) {
			$Evol[] = 'Attribut Moving Head: '.(($Prev->mh()) ? 'TRUE' : 'FALSE').' => '.(($New->mh()) ? 'TRUE' : 'FALSE');
		}
		if($Prev->mode() != $New->mode()) {
			$Evol[] = 'Mode name change: '.$Prev->mode().' => '.$New->mode();
		}
		if($Prev->wheel() != $New->wheel()) {
			$Evol[] = 'Number of wheel: '.$Prev->wheel().' => '.$New->wheel();
		}
		for ($i = 1; $i <= 10; $i++) {
			if($Prev->{'colorslots'.$i}() != $New->{'colorslots'.$i}()) {
				if(empty($Prev->{'colorslots'.$i}()) AND !empty($New->{'colorslots'.$i}())) {
					$Evol[] = 'Color Wheel n°'.$i.' added with '.$New->{'colorslots'.$i}().' slot'.(($New->{'colorslots'.$i}() > 1) ? 's' : '').' number';
				} else {
					$Evol[] = 'Color Wheel n°'.$i.' slot number updated: '.$Prev->{'colorslots'.$i}().' => '.$New->{'colorslots'.$i}();
				}
			}
			if($Prev->{'colordetails'.$i}() != $New->{'colordetails'.$i}()) {
				if(empty($Prev->{'colordetails'.$i}()) AND !empty($New->{'colordetails'.$i}())) {
					$Evol[] = 'Color Wheel n°'.$i.' has been populated';
				} else {
					$Evol[] = 'Color Wheel n°'.$i.' content has been updated';
				}
				//$Evol[] = 'Color Wheel n°'.$i.' content: '.$Prev->{'colordetails'.$i}().' => '.$New->{'colordetails'.$i}();
			}
		}
		for ($i = 1; $i <= 10; $i++) {
			if($Prev->{'goboslots'.$i}() != $New->{'goboslots'.$i}()) {
				if(empty($Prev->{'goboslots'.$i}()) AND !empty($New->{'goboslots'.$i}())) {
					$Evol[] = 'Gobo Wheel n°'.$i.' added with '.$New->{'goboslots'.$i}().' slot'.(($New->{'goboslots'.$i}() > 1) ? 's' : '').' number';
				} else {
					$Evol[] = 'Gobo Wheel n°'.$i.' slot number updated: '.$Prev->{'goboslots'.$i}().' => '.$New->{'goboslots'.$i}();
				}
			}
			if($Prev->{'gobodetails'.$i}() != $New->{'gobodetails'.$i}()) {
				if(empty($Prev->{'gobodetails'.$i}()) AND !empty($New->{'gobodetails'.$i}())) {
					$Evol[] = 'Gobo Wheel n°'.$i.' has been populated';
				} else {
					$Evol[] = 'Gobo Wheel n°'.$i.' content has been updated';
				}
				//$Evol[] = 'Gobo Wheel n°'.$i.' content: '.$Prev->{'gobodetails'.$i}().' => '.$New->{'gobodetails'.$i}();
			}
		}
		for ($i = 1; $i <= 10; $i++) {
			if($Prev->{'animationslots'.$i}() != $New->{'animationslots'.$i}()) {
				if(empty($Prev->{'animationslots'.$i}()) AND !empty($New->{'animationslots'.$i}())) {
					$Evol[] = 'Animation Wheel n°'.$i.' added with '.$New->{'animationslots'.$i}().' slot'.(($New->{'animationslots'.$i}() > 1) ? 's' : '').' number';
				} else {
					$Evol[] = 'Animation Wheel n°'.$i.' slot number updated: '.$Prev->{'animationslots'.$i}().' => '.$New->{'animationslots'.$i}();
				}
			}
			if($Prev->{'animationdetails'.$i}() != $New->{'animationdetails'.$i}()) {
				if(empty($Prev->{'animationdetails'.$i}()) AND !empty($New->{'animationdetails'.$i}())) {
					$Evol[] = 'Animation Wheel n°'.$i.' has been populated';
				} else {
					$Evol[] = 'Animation Wheel n°'.$i.' content has been updated';
				}
				//$Evol[] = 'Animation Wheel n°'.$i.' content: '.$Prev->{'animationdetails'.$i}().' => '.$New->{'animationdetails'.$i}();
			}
		}
		for ($i = 1; $i <= 512; $i++) {
			if($Prev->{'ch'.$i}() != $New->{'ch'.$i}()) {
				$Evol[] = 'Channel n°'.$i.': '.$Prev->{'ch'.$i}().' => '.$New->{'ch'.$i}();
			}
			// if($Prev->{'ch'.$i.'details'}() != $New->{'ch'.$i.'details'}()) {
				// $Evol[] = 'Channel n°'.$i.' presets has been updated';
			// }
		}
		unset($Prev, $New);			 
		return ((count($Evol) > 0) ? implode("\n", $Evol) : FALSE);
	}
	public function FindFixture(DMXChart $DMXChart, $NbChannel, $searchmode, $maxchannel=false, $displaymode=false) {
		$Loopback = array();
		$SearchLive = FALSE;
		$In = '(ch1,ch2,ch3,ch4,ch5,ch6,ch7,ch8,ch9,ch10,ch11,ch12,ch13,ch14,ch15,ch16,ch17,ch18,ch19,ch20,ch21,ch22,ch23,ch24,ch25,ch26,ch27,ch28,ch29,ch30,ch31,ch32,ch33,ch34,ch35,ch36,ch37,ch38,ch39,ch40,ch41,ch42,ch43,ch44,ch45,ch46,ch47,ch48,ch49,ch50,ch51,ch52,ch53,ch54,ch55,ch56,ch57,ch58,ch59,ch60,ch61,ch62,ch63,ch64,ch65,ch66,ch67,ch68,ch69,ch70,ch71,ch72,ch73,ch74,ch75,ch76,ch77,ch78,ch79,ch80,ch81,ch82,ch83,ch84,ch85,ch86,ch87,ch88,ch89,ch90,ch91,ch92,ch93,ch94,ch95,ch96,ch97,ch98,ch99,ch100,ch101,ch102,ch103,ch104,ch105,ch106,ch107,ch108,ch109,ch110,ch111,ch112,ch113,ch114,ch115,ch116,ch117,ch118,ch119,ch120,ch121,ch122,ch123,ch124,ch125,ch126,ch127,ch128,ch129,ch130,ch131,ch132,ch133,ch134,ch135,ch136,ch137,ch138,ch139,ch140,ch141,ch142,ch143,ch144,ch145,ch146,ch147,ch148,ch149,ch150,ch151,ch152,ch153,ch154,ch155,ch156,ch157,ch158,ch159,ch160,ch161,ch162,ch163,ch164,ch165,ch166,ch167,ch168,ch169,ch170,ch171,ch172,ch173,ch174,ch175,ch176,ch177,ch178,ch179,ch180,ch181,ch182,ch183,ch184,ch185,ch186,ch187,ch188,ch189,ch190,ch191,ch192,ch193,ch194,ch195,ch196,ch197,ch198,ch199,ch200,ch201,ch202,ch203,ch204,ch205,ch206,ch207,ch208,ch209,ch210,ch211,ch212,ch213,ch214,ch215,ch216,ch217,ch218,ch219,ch220,ch221,ch222,ch223,ch224,ch225,ch226,ch227,ch228,ch229,ch230,ch231,ch232,ch233,ch234,ch235,ch236,ch237,ch238,ch239,ch240,ch241,ch242,ch243,ch244,ch245,ch246,ch247,ch248,ch249,ch250,ch251,ch252,ch253,ch254,ch255,ch256,ch257,ch258,ch259,ch260,ch261,ch262,ch263,ch264,ch265,ch266,ch267,ch268,ch269,ch270,ch271,ch272,ch273,ch274,ch275,ch276,ch277,ch278,ch279,ch280,ch281,ch282,ch283,ch284,ch285,ch286,ch287,ch288,ch289,ch290,ch291,ch292,ch293,ch294,ch295,ch296,ch297,ch298,ch299,ch300,ch301,ch302,ch303,ch304,ch305,ch306,ch307,ch308,ch309,ch310,ch311,ch312,ch313,ch314,ch315,ch316,ch317,ch318,ch319,ch320,ch321,ch322,ch323,ch324,ch325,ch326,ch327,ch328,ch329,ch330,ch331,ch332,ch333,ch334,ch335,ch336,ch337,ch338,ch339,ch340,ch341,ch342,ch343,ch344,ch345,ch346,ch347,ch348,ch349,ch350,ch351,ch352,ch353,ch354,ch355,ch356,ch357,ch358,ch359,ch360,ch361,ch362,ch363,ch364,ch365,ch366,ch367,ch368,ch369,ch370,ch371,ch372,ch373,ch374,ch375,ch376,ch377,ch378,ch379,ch380,ch381,ch382,ch383,ch384,ch385,ch386,ch387,ch388,ch389,ch390,ch391,ch392,ch393,ch394,ch395,ch396,ch397,ch398,ch399,ch400,ch401,ch402,ch403,ch404,ch405,ch406,ch407,ch408,ch409,ch410,ch411,ch412,ch413,ch414,ch415,ch416,ch417,ch418,ch419,ch420,ch421,ch422,ch423,ch424,ch425,ch426,ch427,ch428,ch429,ch430,ch431,ch432,ch433,ch434,ch435,ch436,ch437,ch438,ch439,ch440,ch441,ch442,ch443,ch444,ch445,ch446,ch447,ch448,ch449,ch450,ch451,ch452,ch453,ch454,ch455,ch456,ch457,ch458,ch459,ch460,ch461,ch462,ch463,ch464,ch465,ch466,ch467,ch468,ch469,ch470,ch471,ch472,ch473,ch474,ch475,ch476,ch477,ch478,ch479,ch480,ch481,ch482,ch483,ch484,ch485,ch486,ch487,ch488,ch489,ch490,ch491,ch492,ch493,ch494,ch495,ch496,ch497,ch498,ch499,ch500,ch501,ch502,ch503,ch504,ch505,ch506,ch507,ch508,ch509,ch510,ch511,ch512)';
		switch(CleanVar($searchmode))
			{
			case CleanVar(_Search_Exact_Live_):
				$SearchLive = TRUE;
			case CleanVar(_Search_Exact_):
				$query = 'SELECT * FROM `Fixtures` WHERE `channels` = :nbchannel AND ';
				$Loopback[':nbchannel'] = $NbChannel;
				break;
			case CleanVar(_Search_Live_):
				$SearchLive = TRUE;
			case CleanVar(_Search_StartWith_):
			default:
				$query = 'SELECT * FROM `Fixtures` WHERE ';
				$maxchannel = (int) $maxchannel;
				if($maxchannel > 0) {
					$Loopback[':maxchannels'] = $maxchannel;
					$query.= '`channels` <= :maxchannels AND ';
				}
				break;
			}
		for($i=1; $i<=10; $i++) {
			for($si=1; $si<=3; $si++) {
				switch($si) {
					case 1:
						$WName = 'color';
						break;
					case 2:
						$WName = 'gobo';
						break;
					case 3:
						$WName = 'animation';
						break;
				}
				$wheel = $DMXChart->{$WName.'slots'.$i}();
				if(is_int($wheel) AND $wheel > 0) {
					$query.= '`'.$WName.'slots'.$i.'` = :'.$WName.'slots'.$i.' AND ';
					$Loopback[':'.$WName.'slots'.$i] = $wheel;
				}
			}
		}
		// Only lookup for latest fixture profile
		$query.= '`lastdate` = :lastdate AND ';
		$Loopback[':lastdate'] = _DateLibrary_;
		if(strtolower($DMXChart->Manufacturer()) != 'any') {
			$query.= '`manufacturer` = :manufacturer AND ';
			$Loopback[':manufacturer'] = $DMXChart->Manufacturer();
		}
		if(strtolower($DMXChart->Fixture()) != 'any') {
			$query.= '`fixture` = :fixture AND ';
			$Loopback[':fixture'] = $DMXChart->Fixture();
		}
		for($i=0; $i<=($NbChannel-1); $i++) {
			$chaName = 'ch'.($i+1);
			$content = $DMXChart->{$chaName}();
			if(strtolower($content) != 'any') {
				if($SearchLive) {
					$length = strlen($content);
					if(strpos(strtolower($content), 'fine') !== false) {
						//$query.= '(LEFT(:'.$chaName.', '.$length.') IN '.$In.') AND ';
						$query.= '(';
						for($in=0; $in<=511; $in++) {
							$chName = 'ch'.($in+1);
							$query.= '`'.$chName.'` LIKE :'.$chaName.' OR ';
						}
						$query = substr($query, 0, -3).') AND ';
					} else {
						/* $query.= 'LEFT(:'.$chaName.', '.$length.') IN '.$In.' AND LEFT(:'.$chaName.'fine, '.($length+5).') NOT IN '.$In.' AND ';
						$Loopback[':'.$chaName.'fine'] = $content.' fine'; */ //Commented until finding a solution on live parameter for NOT IN working
						//$query.= '(LEFT(:'.$chaName.', '.$length.') IN '.$In.') AND ';
						$query.= '(';
						for($ib=0; $ib<=511; $ib++) {
							$chName = 'ch'.($ib+1);
							$query.= '(`'.$chName.'` LIKE :'.$chaName.' AND `'.$chName.'` NOT LIKE \'%fine%\') OR ';
						}
						$query = substr($query, 0, -3).') AND ';
					}
				} else {
					if(strpos(strtolower($content), 'fine') !== false) {
						$query.= '`'.$chaName.'` LIKE :'.$chaName.' AND ';
					} else {
						$query.= '`'.$chaName.'` LIKE :'.$chaName.' AND `'.$chaName.'` NOT LIKE \'%fine%\' AND ';
					}
				}
				$Loopback[':'.$chaName] = $content.'%';
			}
		}
		$query = substr($query, 0, -4).' '.(($displaymode == 1) ? 'GROUP BY `Fixture`, `Manufacturer` ': '').'ORDER BY `Manufacturer`, `Fixture`, `channels`, `mode` LIMIT '.(_MaxFixtureFound_+1).';';
		if($_POST[_DEBUG_]) {
			$debugQuery = $query;
			foreach($Loopback as $k => $v){
				$debugQuery = str_replace($k, '\''.$v.'\'', $debugQuery);
			}
			$this->setDebug($debugQuery);
			//$this->setDebug($Values);
		}
		$prep = $this->_db->prepare($query);
		$prep->execute($Loopback);
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
		}
	public function ResetTableParameters()
		{
		$query = 'TRUNCATE TABLE `Params`; TRUNCATE TABLE `Manufacturers`;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		}
	public function ResetTableStats()
		{
		$query = 'TRUNCATE TABLE `Stats`;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		}
	public function ResetTableFixture()
		{
		$query = 'TRUNCATE TABLE `Fixtures`;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		}
	public function ResetTableQualityScan()
		{
		$query = 'TRUNCATE TABLE `QualityScan`;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		}
	public function ResetTableQuality()
		{
		$query = 'TRUNCATE TABLE `Quality`;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		}
	public function ResetTablePictures()
		{
		$query = 'TRUNCATE TABLE `Index_Animation`; TRUNCATE TABLE `Index_Color`; TRUNCATE TABLE `Index_Gobo`;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		}
	public function ResetTable()
		{
		$query = 'TRUNCATE TABLE `Quality`; TRUNCATE TABLE `Index_Animation`; TRUNCATE TABLE `Index_Color`; TRUNCATE TABLE `Index_Gobo`; TRUNCATE TABLE `Stats`; TRUNCATE TABLE `Fixtures`; TRUNCATE TABLE `Params`; TRUNCATE TABLE `Manufacturers`;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		}
	public function GetStatsInfos()
		{
		$query = 'SELECT `NbManufacturer`, `NbFixtures`, `NbDMXCharts`, `NbMaxChannel`, `NbMaxMode`  FROM `Stats`;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$data = $prep->fetch(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
		}
	public function SetStatsInfos()
		{
		$query = 'SELECT COUNT(DISTINCT(`Manufacturer`)) AS Manufacturer, COUNT(DISTINCT(`Fixture`)) AS Fixture, COUNT(`id`) AS Mode FROM `Fixtures` WHERE `lastdate` = :lastdate;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetch(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		
		$NbManufacturer = $data['Manufacturer'];
		$NbFixtures = $data['Fixture'];
		$NbDMXCharts = $data['Mode'];
		
		$query = 'SELECT `Manufacturer`, `Fixture`, `mode`, `channels` AS  `NbMaxChannel` FROM `Fixtures` GROUP BY `Manufacturer`, `Fixture` HAVING MAX(`channels`) >= ALL (SELECT MAX(`channels`) FROM `Fixtures` WHERE `lastdate` = :lastdate GROUP BY `Manufacturer`, `Fixture`);';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetch(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		
		$NbMaxChannel = '<a pop href="'.FixtureURL($data['Manufacturer'], $data['Fixture']).'">'.$data['NbMaxChannel'].'ch</a>';
		
		$query = 'SELECT `Manufacturer`, `Fixture`, COUNT(`mode`) AS `NbMaxMode` FROM `Fixtures` GROUP BY `Manufacturer`, `Fixture` HAVING COUNT(`mode`) >= ALL (SELECT COUNT(`mode`) FROM `Fixtures` WHERE `lastdate` = :lastdate GROUP BY `Manufacturer`, `Fixture`);';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetch(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
				
		$NbMaxMode = '<a pop href="'.FixtureURL($data['Manufacturer'], $data['Fixture']).'">'.$data['NbMaxMode'].' modes</a>';
				
		$query = 'INSERT INTO `Stats` (`NbManufacturer`, `NbFixtures`, `NbDMXCharts`, `NbMaxChannel`, `NbMaxMode`) VALUES (:NbManufacturer, :NbFixtures, :NbDMXCharts, :NbMaxChannel, :NbMaxMode);';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':NbManufacturer', $NbManufacturer, PDO::PARAM_INT);
		$prep->bindValue(':NbFixtures', $NbFixtures, PDO::PARAM_INT);
		$prep->bindValue(':NbDMXCharts', $NbDMXCharts, PDO::PARAM_INT);
		$prep->bindValue(':NbMaxChannel', urlencode($NbMaxChannel), PDO::PARAM_STR);
		$prep->bindValue(':NbMaxMode', urlencode($NbMaxMode), PDO::PARAM_STR);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		
		return $this->GetStatsInfos();
		}
	public function DisplayAllManufacturer()
		{
		$query = 'SELECT `name` AS `Manufacturer` FROM `Manufacturers` ORDER BY `Manufacturer`;';
		$prep = $this->_db->prepare($query);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
		}
	public function SearchAllWheelFixture()
		{
		$query = 'SELECT `Manufacturer`, `Fixture`, `colordetails1`, `colordetails2`, `colordetails3`, `colordetails4`, `colordetails5`, `colordetails6`, `colordetails7`, `colordetails8`, `colordetails9`, `colordetails10`, `gobodetails1`, `gobodetails2`, `gobodetails3`, `gobodetails4`, `gobodetails5`, `gobodetails6`, `gobodetails7`, `gobodetails8`, `gobodetails9`, `gobodetails10`, `animationdetails1`, `animationdetails2`, `animationdetails3`, `animationdetails4`, `animationdetails5`, `animationdetails6`, `animationdetails7`, `animationdetails8`, `animationdetails9`, `animationdetails10` FROM `Fixtures` WHERE `lastdate` = :lastdate AND `colordetails1` IS NOT NULL OR `gobodetails1` IS NOT NULL OR `animationdetails1` IS NOT NULL ORDER BY `Manufacturer`, `Fixture`;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
		}
	public function DisplayAllWheelFixture()
		{
		$query = 'SELECT `Manufacturer`, `Fixture`, `wheelcolor`, `wheelgobo`, `wheelanimation` FROM `Fixtures` WHERE `lastdate` = :lastdate AND `wheelcolor` IS NOT NULL OR `wheelgobo` IS NOT NULL OR `wheelanimation` IS NOT NULL ORDER BY `Manufacturer`, `Fixture`;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
		}
	public function SelectAllFixture($lastdate)
		{
		$query = 'SELECT `Manufacturer`,`Fixture`,`status`,`evol`,`lastdate`,`mh`,`mode`,`channels`,`wheel`,`ColorSlots1`,`ColorDetails1`,`ColorSlots2`,`ColorDetails2`,`ColorSlots3`,`ColorDetails3`,`ColorSlots4`,`ColorDetails4`,`ColorSlots5`,`ColorDetails5`,`ColorSlots6`,`ColorDetails6`,`ColorSlots7`,`ColorDetails7`,`ColorSlots8`,`ColorDetails8`,`ColorSlots9`,`ColorDetails9`,`ColorSlots10`,`ColorDetails10`,`wheelcolor`,`GoboSlots1`,`GoboDetails1`,`GoboSlots2`,`GoboDetails2`,`GoboSlots3`,`GoboDetails3`,`GoboSlots4`,`GoboDetails4`,`GoboSlots5`,`GoboDetails5`,`GoboSlots6`,`GoboDetails6`,`GoboSlots7`,`GoboDetails7`,`GoboSlots8`,`GoboDetails8`,`GoboSlots9`,`GoboDetails9`,`GoboSlots10`,`GoboDetails10`,`wheelgobo`,`AnimationSlots1`,`AnimationDetails1`,`AnimationSlots2`,`AnimationDetails2`,`AnimationSlots3`,`AnimationDetails3`,`AnimationSlots4`,`AnimationDetails4`,`AnimationSlots5`,`AnimationDetails5`,`AnimationSlots6`,`AnimationDetails6`,`AnimationSlots7`,`AnimationDetails7`,`AnimationSlots8`,`AnimationDetails8`,`AnimationSlots9`,`AnimationDetails9`,`AnimationSlots10`,`AnimationDetails10`,`wheelanimation`,`ch1`,`ch2`,`ch3`,`ch4`,`ch5`,`ch6`,`ch7`,`ch8`,`ch9`,`ch10`,`ch11`,`ch12`,`ch13`,`ch14`,`ch15`,`ch16`,`ch17`,`ch18`,`ch19`,`ch20`,`ch21`,`ch22`,`ch23`,`ch24`,`ch25`,`ch26`,`ch27`,`ch28`,`ch29`,`ch30`,`ch31`,`ch32`,`ch33`,`ch34`,`ch35`,`ch36`,`ch37`,`ch38`,`ch39`,`ch40`,`ch41`,`ch42`,`ch43`,`ch44`,`ch45`,`ch46`,`ch47`,`ch48`,`ch49`,`ch50`,`ch51`,`ch52`,`ch53`,`ch54`,`ch55`,`ch56`,`ch57`,`ch58`,`ch59`,`ch60`,`ch61`,`ch62`,`ch63`,`ch64`,`ch65`,`ch66`,`ch67`,`ch68`,`ch69`,`ch70`,`ch71`,`ch72`,`ch73`,`ch74`,`ch75`,`ch76`,`ch77`,`ch78`,`ch79`,`ch80`,`ch81`,`ch82`,`ch83`,`ch84`,`ch85`,`ch86`,`ch87`,`ch88`,`ch89`,`ch90`,`ch91`,`ch92`,`ch93`,`ch94`,`ch95`,`ch96`,`ch97`,`ch98`,`ch99`,`ch100`,`ch101`,`ch102`,`ch103`,`ch104`,`ch105`,`ch106`,`ch107`,`ch108`,`ch109`,`ch110`,`ch111`,`ch112`,`ch113`,`ch114`,`ch115`,`ch116`,`ch117`,`ch118`,`ch119`,`ch120`,`ch121`,`ch122`,`ch123`,`ch124`,`ch125`,`ch126`,`ch127`,`ch128`,`ch129`,`ch130`,`ch131`,`ch132`,`ch133`,`ch134`,`ch135`,`ch136`,`ch137`,`ch138`,`ch139`,`ch140`,`ch141`,`ch142`,`ch143`,`ch144`,`ch145`,`ch146`,`ch147`,`ch148`,`ch149`,`ch150`,`ch151`,`ch152`,`ch153`,`ch154`,`ch155`,`ch156`,`ch157`,`ch158`,`ch159`,`ch160`,`ch161`,`ch162`,`ch163`,`ch164`,`ch165`,`ch166`,`ch167`,`ch168`,`ch169`,`ch170`,`ch171`,`ch172`,`ch173`,`ch174`,`ch175`,`ch176`,`ch177`,`ch178`,`ch179`,`ch180`,`ch181`,`ch182`,`ch183`,`ch184`,`ch185`,`ch186`,`ch187`,`ch188`,`ch189`,`ch190`,`ch191`,`ch192`,`ch193`,`ch194`,`ch195`,`ch196`,`ch197`,`ch198`,`ch199`,`ch200`,`ch201`,`ch202`,`ch203`,`ch204`,`ch205`,`ch206`,`ch207`,`ch208`,`ch209`,`ch210`,`ch211`,`ch212`,`ch213`,`ch214`,`ch215`,`ch216`,`ch217`,`ch218`,`ch219`,`ch220`,`ch221`,`ch222`,`ch223`,`ch224`,`ch225`,`ch226`,`ch227`,`ch228`,`ch229`,`ch230`,`ch231`,`ch232`,`ch233`,`ch234`,`ch235`,`ch236`,`ch237`,`ch238`,`ch239`,`ch240`,`ch241`,`ch242`,`ch243`,`ch244`,`ch245`,`ch246`,`ch247`,`ch248`,`ch249`,`ch250`,`ch251`,`ch252`,`ch253`,`ch254`,`ch255`,`ch256`,`ch257`,`ch258`,`ch259`,`ch260`,`ch261`,`ch262`,`ch263`,`ch264`,`ch265`,`ch266`,`ch267`,`ch268`,`ch269`,`ch270`,`ch271`,`ch272`,`ch273`,`ch274`,`ch275`,`ch276`,`ch277`,`ch278`,`ch279`,`ch280`,`ch281`,`ch282`,`ch283`,`ch284`,`ch285`,`ch286`,`ch287`,`ch288`,`ch289`,`ch290`,`ch291`,`ch292`,`ch293`,`ch294`,`ch295`,`ch296`,`ch297`,`ch298`,`ch299`,`ch300`,`ch301`,`ch302`,`ch303`,`ch304`,`ch305`,`ch306`,`ch307`,`ch308`,`ch309`,`ch310`,`ch311`,`ch312`,`ch313`,`ch314`,`ch315`,`ch316`,`ch317`,`ch318`,`ch319`,`ch320`,`ch321`,`ch322`,`ch323`,`ch324`,`ch325`,`ch326`,`ch327`,`ch328`,`ch329`,`ch330`,`ch331`,`ch332`,`ch333`,`ch334`,`ch335`,`ch336`,`ch337`,`ch338`,`ch339`,`ch340`,`ch341`,`ch342`,`ch343`,`ch344`,`ch345`,`ch346`,`ch347`,`ch348`,`ch349`,`ch350`,`ch351`,`ch352`,`ch353`,`ch354`,`ch355`,`ch356`,`ch357`,`ch358`,`ch359`,`ch360`,`ch361`,`ch362`,`ch363`,`ch364`,`ch365`,`ch366`,`ch367`,`ch368`,`ch369`,`ch370`,`ch371`,`ch372`,`ch373`,`ch374`,`ch375`,`ch376`,`ch377`,`ch378`,`ch379`,`ch380`,`ch381`,`ch382`,`ch383`,`ch384`,`ch385`,`ch386`,`ch387`,`ch388`,`ch389`,`ch390`,`ch391`,`ch392`,`ch393`,`ch394`,`ch395`,`ch396`,`ch397`,`ch398`,`ch399`,`ch400`,`ch401`,`ch402`,`ch403`,`ch404`,`ch405`,`ch406`,`ch407`,`ch408`,`ch409`,`ch410`,`ch411`,`ch412`,`ch413`,`ch414`,`ch415`,`ch416`,`ch417`,`ch418`,`ch419`,`ch420`,`ch421`,`ch422`,`ch423`,`ch424`,`ch425`,`ch426`,`ch427`,`ch428`,`ch429`,`ch430`,`ch431`,`ch432`,`ch433`,`ch434`,`ch435`,`ch436`,`ch437`,`ch438`,`ch439`,`ch440`,`ch441`,`ch442`,`ch443`,`ch444`,`ch445`,`ch446`,`ch447`,`ch448`,`ch449`,`ch450`,`ch451`,`ch452`,`ch453`,`ch454`,`ch455`,`ch456`,`ch457`,`ch458`,`ch459`,`ch460`,`ch461`,`ch462`,`ch463`,`ch464`,`ch465`,`ch466`,`ch467`,`ch468`,`ch469`,`ch470`,`ch471`,`ch472`,`ch473`,`ch474`,`ch475`,`ch476`,`ch477`,`ch478`,`ch479`,`ch480`,`ch481`,`ch482`,`ch483`,`ch484`,`ch485`,`ch486`,`ch487`,`ch488`,`ch489`,`ch490`,`ch491`,`ch492`,`ch493`,`ch494`,`ch495`,`ch496`,`ch497`,`ch498`,`ch499`,`ch500`,`ch501`,`ch502`,`ch503`,`ch504`,`ch505`,`ch506`,`ch507`,`ch508`,`ch509`,`ch510`,`ch511`,`ch512` FROM `Fixtures` WHERE `lastdate` = :lastdate;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', $lastdate, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
		}
	public function DisplayAllFixture()
		{
		$query = 'SELECT `Manufacturer`, `Fixture` FROM `Fixtures` WHERE `lastdate` = :lastdate GROUP BY `Fixture` ORDER BY `Manufacturer`, `Fixture`;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
		}
	public function DisplayAll()
		{
		$this->_db->exec('SET SESSION group_concat_max_len=15000');
		$query = 'SELECT DISTINCT(`Manufacturer`), GROUP_CONCAT(DISTINCT(`Fixture`) ORDER BY `Fixture`) AS Fixture FROM `Fixtures` WHERE `lastdate` = :lastdate GROUP BY `Manufacturer` ORDER BY `Manufacturer`, `Fixture`';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
		$prep->execute();
		$data = $prep->fetchAll(PDO::FETCH_ASSOC);
		$prep->closeCursor();
		$prep = NULL;
		return (is_array($data)) ? $data : FALSE;
		}
	public function SavePicture(MANUFAccessories $MANUFAccessories) {
		switch($MANUFAccessories->mode())
			{
			case _modeColor_:
				$query = 'INSERT INTO `Index_Color` (`Manufacturer`,`Name`,`orderid`,`Red`,`Green`,`Blue`) VALUES (:manufacturer,:name,:orderid,:red,:green,:blue);';
				break;
			case _modeAnimation_:
				$query = 'INSERT INTO `Index_Animation` (`Manufacturer`,`Name`,`orderid`,`Img`,`md5`) VALUES (:manufacturer,:name,:orderid,:img,:md5);';
				break;
			case _modeGobo_:
				$query = 'INSERT INTO `Index_Gobo` (`Manufacturer`,`Name`,`orderid`,`Img`,`md5`) VALUES (:manufacturer,:name,:orderid,:img,:md5);';
				break;
			}
		$prep = $this->_db->prepare($query);
		
		$prep->bindValue(':manufacturer', $MANUFAccessories->manufacturer(), PDO::PARAM_STR);
		$prep->bindValue(':name', $MANUFAccessories->name(), PDO::PARAM_STR);
		$prep->bindValue(':orderid', $MANUFAccessories->orderid(), PDO::PARAM_STR);
		switch($MANUFAccessories->mode())
			{
			case _modeColor_:
				$prep->bindValue(':red', $MANUFAccessories->red(), PDO::PARAM_INT);
				$prep->bindValue(':green', $MANUFAccessories->green(), PDO::PARAM_INT);
				$prep->bindValue(':blue', $MANUFAccessories->blue(), PDO::PARAM_INT);
				break;
			case _modeAnimation_:
			case _modeGobo_:
				$prep->bindValue(':img', $MANUFAccessories->img(), PDO::PARAM_STR);
				$prep->bindValue(':md5', $MANUFAccessories->hmd5(), PDO::PARAM_STR);
				break;
			}
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
	}
	public function UpdatePicture(DMXChart $DMXChart) {
		//Transform all data
		$DMXChart->setWheelcolor($this->WriteWheel($DMXChart, _modeColor_));
		$DMXChart->setWheelgobo($this->WriteWheel($DMXChart, _modeGobo_));
		$DMXChart->setWheelanimation($this->WriteWheel($DMXChart, _modeAnimation_));
		
		//Store the result
		$query = 'UPDATE `Fixtures` SET `wheelcolor` = :wheelcolor, `wheelgobo` = :wheelgobo, `wheelanimation` = :wheelanimation WHERE `Manufacturer` = :manufacturer AND `Fixture` = :fixture;';
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':manufacturer', $DMXChart->manufacturer(), PDO::PARAM_STR);
		$prep->bindValue(':fixture', $DMXChart->fixture(), PDO::PARAM_STR);
		$prep->bindValue(':wheelcolor', $DMXChart->wheelcolor(), PDO::PARAM_STR);
		$prep->bindValue(':wheelgobo', $DMXChart->wheelgobo(), PDO::PARAM_STR);
		$prep->bindValue(':wheelanimation', $DMXChart->wheelanimation(), PDO::PARAM_STR);
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		unset($DMXChart);
	}
	public function Update(DMXChart $DMXChart) {
		$query = 'UPDATE `Fixtures` SET';
		//$Rquery = $query;
		for ($i = 1; $i <= 512; $i++) {
			if($DMXChart->{'ch'.$i.'details'}() !== NULL) {
				$query.= ' ch'.$i.'Details = :ch'.$i.'details,';
				//$Rquery.= ' ch'.$i.'Details = \''.$DMXChart->{'ch'.$i.'details'}().'\',';
			} else {
				break;
			}
		}
		$query = substr($query, 0, -1).' WHERE `manufacturer` = :manufacturer AND `fixture` = :fixture AND `mode` = :mode AND `lastdate` = :lastdate'; 
		//$Rquery = substr($Rquery, 0, -1).' WHERE `manufacturer` = \''.$DMXChart->manufacturer().'\' AND `fixture` = \''.$DMXChart->fixture().'\' AND `mode` = \''.$DMXChart->mode().'\' AND `lastdate` = \''.$DMXChart->lastdate().'\''; 
		
		$prep = $this->_db->prepare($query);
		
		$prep->bindValue(':manufacturer', $DMXChart->manufacturer(), PDO::PARAM_STR);
		$prep->bindValue(':fixture', $DMXChart->fixture(), PDO::PARAM_STR);
		$prep->bindValue(':lastdate', $DMXChart->lastdate(), PDO::PARAM_STR);
		$prep->bindValue(':mode', $DMXChart->mode(), PDO::PARAM_STR);
		for ($i = 1; $i <= 512; $i++) {
			if($DMXChart->{'ch'.$i.'details'}() !== NULL) {
				$prep->bindValue(':ch'.$i.'details', $DMXChart->{'ch'.$i.'details'}(), PDO::PARAM_STR);
			} else {
				
				break;
			}	
		}
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		unset($DMXChart);
	}
	public function Save(DMXChart $DMXChart) {
		$startQuery = 'INSERT INTO `Fixtures` (`Manufacturer`,`Fixture`,`status`,`evol`,`lastdate`,`mh`,`mode`, `channels`,`wheel`,`wheelcolor`,`wheelgobo`,`wheelanimation`,';
		$endQuery = 'VALUES (:manufacturer,:fixture,:status,:evol,:lastdate,:mh,:mode,:channels,:wheel,:wheelcolor,:wheelgobo,:wheelanimation,';
		
		$Channels = array('Slots', 'Details');
		foreach($Channels AS $Channel) {
			$Wheels = array('Color', 'Gobo', 'Animation');
			foreach($Wheels AS $Wheel) {
				for ($i = 1; $i <= 10; $i++) {
					$design = $Wheel.$Channel.$i;
					if($DMXChart->{strtolower($design)}() !== NULL) {
						$startQuery.= '`'.$design.'`,';
						$endQuery.= ' :'.$design.',';
					} else {
						break;
					}
				}
			}
		}
		$Channels = array('Details', '');
		foreach($Channels AS $Channel) {
			for ($i = 1; $i <= 512; $i++) {
				$design = 'ch'.$i.$Channel;
				if($DMXChart->{strtolower($design)}() !== NULL) {
					$startQuery.= '`'.$design.'`,';
					$endQuery.= ' :'.$design.',';
				} else {
					break;
				}
			}
		}
		$query = substr($startQuery, 0, -1).') '.substr($endQuery, 0, -1).')'; 
		$prep = $this->_db->prepare($query);
		$prep->bindValue(':manufacturer', $DMXChart->manufacturer(), PDO::PARAM_STR);
		$prep->bindValue(':fixture', $DMXChart->fixture(), PDO::PARAM_STR);
		$prep->bindValue(':status', $DMXChart->status(), PDO::PARAM_STR);
		$prep->bindValue(':evol', $DMXChart->evol(), PDO::PARAM_STR);
		$prep->bindValue(':lastdate', $DMXChart->lastdate(), PDO::PARAM_STR);
		$prep->bindValue(':mh', $DMXChart->mh(), PDO::PARAM_BOOL);
		$prep->bindValue(':mode', $DMXChart->mode(), PDO::PARAM_STR);
		$prep->bindValue(':channels', $DMXChart->channels(), PDO::PARAM_INT);
		
		// $query = str_replace(':manufacturer,', '"'.$DMXChart->manufacturer().'",', $query);
		// $query = str_replace(':fixture,', '"'.$DMXChart->fixture().'",', $query);
		// $query = str_replace(':status,', '"'.$DMXChart->status().'",', $query);
		// $query = str_replace(':evol,', '"'.$DMXChart->evol().'",', $query);
		// $query = str_replace(':lastdate,', '"'.$DMXChart->lastdate().'",', $query);
		// $query = str_replace(':mh', ($DMXChart->mh()) ? 'TRUE' : 'FALSE', $query);
		// $query = str_replace(':mode,', '"'.$DMXChart->mode().'",', $query);
		// $query = str_replace(':channels,', '"'.$DMXChart->channels().'",', $query);
		
		$Channels = array('Slots', 'Details');
		foreach($Channels AS $Channel) {
			$Wheels = array('Color', 'Gobo', 'Animation');
			foreach($Wheels AS $Wheel) {
				for ($i = 1; $i <= 10; $i++) {
					$design = $Wheel.$Channel.$i;
					if($DMXChart->{strtolower($design)}() !== NULL) {
						$prep->bindValue(':'.$design, $DMXChart->{strtolower($design)}(), (($Channel == 'Slots') ? PDO::PARAM_INT : PDO::PARAM_STR));
						// $query = str_replace(':'.$design.',', '"'.$DMXChart->{strtolower($design)}().'",', $query);
					} else {
						break;
					}
				}
			}
		}
		$prep->bindValue(':wheel', $DMXChart->wheel(), PDO::PARAM_INT);
		$prep->bindValue(':wheelcolor', $DMXChart->wheelcolor(), PDO::PARAM_STR);
		$prep->bindValue(':wheelgobo', $DMXChart->wheelgobo(), PDO::PARAM_STR);
		$prep->bindValue(':wheelanimation', $DMXChart->wheelanimation(), PDO::PARAM_STR);
		
		// $query = str_replace(':wheel,', '"'.$DMXChart->wheel().'",', $query);
		// $query = str_replace(':wheelcolor,', '"'.$DMXChart->wheelcolor().'",', $query);
		// $query = str_replace(':wheelgobo,', '"'.$DMXChart->wheelgobo().'",', $query);
		// $query = str_replace(':wheelanimation,', '"'.$DMXChart->wheelanimation().'",', $query);
		
		$Channels = array('Details', '');
		foreach($Channels AS $Channel) {
			for ($i = 1; $i <= 512; $i++) {
				$design = 'ch'.$i.$Channel;
				if($DMXChart->{strtolower($design)}() !== NULL) {
					$prep->bindValue(':'.$design, $DMXChart->{strtolower($design)}(), PDO::PARAM_STR);
					// $query = str_replace(':'.$design, '"'.$DMXChart->{strtolower($design)}().'"', $query);
				} else {
					break;
				}
			}
		}
		$prep->execute();
		$prep->closeCursor();
		$prep = NULL;
		// var_dump($query);
		unset($DMXChart);
	}
	public function SetParameters() {
		$query = '';
		for ($i = 1; $i <= 512; $i++) {
			$query.= "\n".'SELECT DISTINCT `ch'.$i.'` FROM `Fixtures` WHERE `lastdate` = :lastdate'."\n".'UNION';
		}
		$query = substr($query, 0, -5);
		
			$prep = $this->_db->prepare($query);
			$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
			$prep->execute();
			$data = $prep->fetchAll(PDO::FETCH_ASSOC);
			$prep->closeCursor();
			$prep = NULL;
			$count = count($data);
			$query = "INSERT INTO `Params` (`parameter`,`correct`,`position`) VALUES ";
			for($i=0; $i<$count;$i++)
				{
				$query.= '(:v'.$i.',:c'.$i.',:p'.$i.'),';
				}
			$query = substr($query, 0, -1).';';
			$prep = $this->_db->prepare($query);
			for($i=0; $i<$count;$i++)
				{
				$correct = strtolower(preg_replace('/[0-9]+/', '', $data[$i]['ch1']));
				switch(strtolower($data[$i]['ch1']))
					{
					case 'dimmer':
					case 'intensity':
						$correct = 'Intensity';
						$pos = 0;
						break;
					case 'intensity fine':
						$correct = 'Intensity fine';
						$pos = 1;
						break;
					case 'strobe':
						$pos = 2;
						break;
					case 'shutter':
						$pos = 3;
						break;
					case 'x':
					case 'pan':
						$correct = 'Pan';
						$pos = 4;
						break;
					case 'x fine':
					case 'pan fine':
						$correct = 'Pan fine';
						$pos = 5;
						break;
					case 'pan rot':
						$correct = 'Pan Rot';
						$pos = 6;
						break;
					case 'y':
					case 'tilt':
						$correct = 'Tilt';
						$pos = 7;
						break;
					case 'y fine':
					case 'tilt fine':
						$correct = 'Tilt fine';
						$pos = 8;
						break;
					case 'tilt rot':
						$correct = 'Tilt Rot';
						$pos = 9;
						break;
					case 'pt speed':
						$correct = 'PT speed';
						$pos = 10;
						break;
					case 'color':
						$pos = 11;
						break;
					case 'color macro':
						$correct = 'Color Macro';
						$pos = 12;
						break;
					case 'red':
						$pos = 13;
						break;
					case 'red fine':
						$pos = 14;
						break;
					case 'green':
						$pos = 15;
						break;
					case 'green fine':
						$pos = 16;
						break;
					case 'blue':
						$pos = 17;
						break;
					case 'blue fine':
						$pos = 18;
						break;
					case 'white':
						$pos = 19;
						break;
					case 'white fine':
						$pos = 20;
						break;
					case 'amber':
						$pos = 21;
						break;
					case 'amber fine':
						$pos = 22;
						break;
					case 'uv':
						$correct = 'UV';
						$pos = 23;
						break;
					case 'uv fine':
						$correct = 'UV Fine';
						$pos = 24;
						break;
					case 'cyan':
						$pos = 25;
						break;
					case 'cyan fine':
						$pos = 26;
						break;
					case 'magenta':
						$pos = 27;
						break;
					case 'magenta fine':
						$pos = 28;
						break;
					case 'yellow':
						$pos = 29;
						break;
					case 'yellow fine':
						$pos = 30;
						break;
					case 'ctc':
						$correct = 'CTC';
						$pos = 31;
						break;
					case 'ctc fine':
						$correct = 'CTC Fine';
						$pos = 32;
						break;
					case 'cto':
						$correct = 'CTO';
						$pos = 33;
						break;
					case 'cto fine':
						$correct = 'CTO Fine';
						$pos = 34;
						break;
					case 'gobo':
						$pos = 35;
						break;
					case 'gobo rot':
						$correct = 'Gobo Rot';
						$pos = 36;
						break;
					case 'prism':
						$pos = 37;
						break;
					case 'prism rot':
						$correct = 'Prism Rot';
						$pos = 38;
						break;
					case 'zoom':
						$pos = 39;
						break;
					case 'focus':
						$pos = 40;
						break;
					case 'frost':
						$pos = 41;
						break;
					case 'iris':
						$pos = 42;
						break;
					case 'program':
					case 'programs':
					case 'macro':
					case 'macros':
						$correct = 'macro';
						$pos = 43;
						break;
					case 'chase':
						$pos = 44;
						break;
					case 'fx':
						$correct = 'FX';
						$pos = 45;
						break;
					case 'ctrl':
						$pos = 46;
						break;
					default: 
						$pos = $count;
						break;
					}
				$prep->bindValue('v'.$i, $data[$i]['ch1'], PDO::PARAM_STR);
				$prep->bindValue('c'.$i, $correct, PDO::PARAM_STR);
				$prep->bindValue('p'.$i, $pos, PDO::PARAM_INT);
				}
			$prep->execute();
			$prep->closeCursor();
			$prep = NULL;
			
			$query = 'SELECT DISTINCT(`manufacturer`) AS name FROM `Fixtures` WHERE `lastdate` = :lastdate;';
			$prep = $this->_db->prepare($query);
			$prep->bindValue(':lastdate', _DateLibrary_, PDO::PARAM_STR);
			$prep->execute();
			$data = $prep->fetchAll(PDO::FETCH_ASSOC);
			
			$count = count($data);
			$query = "INSERT INTO `Manufacturers` (`name`) VALUES ";
			for($i=0; $i<$count;$i++)
				{
				$query.= '(:v'.$i.'),';
				}
			$query = substr($query, 0, -1).';';
			$prep = $this->_db->prepare($query);
			for($i=0; $i<$count;$i++)
				{
				$prep->bindValue('v'.$i, $data[$i]['name'], PDO::PARAM_STR);
				}
			$prep->execute();
			$prep->closeCursor();
			$prep = NULL;
		}
	}
?>