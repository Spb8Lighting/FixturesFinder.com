<?php
header('Content-Type: application/json');
$query = FALSE;
if(isset($_POST)) {
	ksort($_POST);
	$RequestName = md5(serialize($_POST));
	if($Cache->AjaxSearch($RequestName) === FALSE) {
		$_POST[_SearchMode_] = 		(isset($_POST[_SearchMode_])) 			? htmlentities(CleanVar($_POST[_SearchMode_])) 	: FALSE;
		$_POST[_MaxChannels_] = 	(isset($_POST[_MaxChannels_])) 			? htmlentities(CleanVar($_POST[_MaxChannels_])) : FALSE;
		$_POST[_Channels_] = 		(isset($_POST[_Channels_])) 			? htmlentities(CleanVar($_POST[_Channels_])) 	: FALSE;
		$_POST[_Manufacturer_] = 	(isset($_POST[_Manufacturer_])) 		? htmlentities(CleanVar($_POST[_Manufacturer_])) : FALSE;
		$_POST[_FixtureName_] = 	(isset($_POST[_FixtureName_])) 			? htmlentities(CleanVar($_POST[_FixtureName_])) : FALSE;
		$_POST[_DisplayMode_] = 	(isset($_POST[_DisplayMode_])) 			? htmlentities(CleanVar($_POST[_DisplayMode_])) : FALSE;
		$_POST[_DEBUG_] = 			(isset($_POST[_DEBUG_])) 				? TRUE 	: FALSE;
		$Channels = array();
		$NbChannel = 0;
		foreach($_POST AS $Key => $Val) {
			if(substr($Key, 0, 2) == _Channel_) {
				$Channels[htmlentities(CleanVar($Key))] = htmlentities(CleanVar($Val));
				$NbChannel++;
			} elseif(preg_match('/^(color|gobo|animation)slots([0-9][0]?)$/i', $Key, $matches)) {
				$Channels[htmlentities(CleanVar($Key))] = (int) htmlentities(CleanVar($Val));
			}
		}
		$Channels['manufacturer'] = $_POST[_Manufacturer_];
		$Channels['fixture'] = $_POST[_FixtureName_];
		if($NbChannel > 0 AND $_POST[_SearchMode_])	{ //Run the search
			//Create DMXChart object
			$DMXChart = new DMXChart($Channels);
			//Search with parameters
			$Fixtures = $DMXChartManager->FindFixture($DMXChart, $NbChannel, $_POST[_SearchMode_], $_POST[_MaxChannels_], $_POST[_DisplayMode_]);
			$NbFixtures = count($Fixtures);
			//Compute HTML to be return
			if($NbFixtures>0) {
				if($NbFixtures>_MaxFixtureFound_) {
					$FixtureHtml = '<p>More than '._MaxFixtureFound_.' fixtures profile found, please restrict your search</p>'."\n";
					} else {
						if($NbFixtures>=_MedFixtureFound_ AND $_POST[_DisplayMode_] == 0) {
							$add = '<p>DMX Chart are not displayed because number of fixtures profile found is higher than '._MedFixtureFound_.'</p>'."\n";
							$add.= '<p>But you can still click on the fixture link ...</p>'."\n";
						}
						$FixtureHtml = ((isset($add)) ? $add : '').'<ul>'."\n";
						foreach($Fixtures AS $row => $Device) {
							$Fixture = new DMXChart($Device);
							if($_POST[_DisplayMode_] > 0) {
								$FixtureHtml.= "\t".'<li><a target="_blank" title="Search for equivalent(s) fixture(s)" href="'.$DMXChartManager->GetLinkChart($Fixture).'">&#128279;</a> <a pop title="Fixture details page" href="'.FixtureURL($Fixture->Manufacturer(), $Fixture->Fixture()).' ">'.$Fixture->Manufacturer().' > '.$Fixture->Fixture().'</a>'.$DMXChartManager->DisplayWheels($Fixture).'</li>'."\n";
							} else {
							$FixtureHtml.= "\t".'<li><a target="_blank" title="Search for equivalent(s) fixture(s)" href="'.$DMXChartManager->GetLinkChart($Fixture).'">&#128279;</a> <a pop href="'.FixtureURL($Fixture->Manufacturer(), $Fixture->Fixture()).' ">'.$Fixture->Manufacturer().' > '.$Fixture->Fixture().'</a> <em>('.$Fixture->Mode().')</em> '.(($NbFixtures <= _MedFixtureFound_) ? $DMXChartManager->DisplayWheels($Fixture, FALSE).$DMXChartManager->DisplayDMXChart($Fixture) : '').'</li>'."\n";
							}
						}
						$FixtureHtml.= '</ul>'."\n";
					}
				} else {
					$FixtureHtml = '<p>No matching fixture found</p><p>You can refine your search, or <strong><a target="_blank" href="'._MartinFormLibrary_.'">request this fixture profile to Martin</a></strong></p>'."\n";
				}

			$data = array(_NbChannel_ => $NbChannel, _NbFixtures_ => $NbFixtures, _FixtureHtml_ => $FixtureHtml);
			} elseif($_POST[_Channels_]) {
				$data = array(_Channels_ => $DMXChartManager->SelectParameters($_POST[_Channels_]));
			} else {
				$data = array('error' => _ErrParamMissing_);
			}
			$Cache->AjaxSearch($RequestName, $data);
		}
	} else {
		$data = array('error' => _ErrDirectAccess_);
	}
if(isset($_POST[_DEBUG_])) {
	$data[_DEBUG_] = $DMXChartManager->Debug();
}
echo json_encode($data);
if(isset($bdd)) {
	$bdd = null;
}
?>
