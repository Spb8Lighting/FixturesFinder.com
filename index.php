<?php
require_once('config.php');
date_default_timezone_set('UTC');
if($_SERVER['HTTP_HOST'] != preg_replace('/^https?:\/\//i', '', _Domain_) OR (_HTTPS_ == 1 AND (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on'))) {
	header('Status: 301 Moved Permanently', false, 301);
	header('Location: '._Domain_.$_SERVER['REQUEST_URI']);
	exit();
}
if(_RESTRICT_ == 1 AND $_SERVER['REMOTE_ADDR'] != _IP_) {
	echo 'Website under maintenance ...';
	die();
}
require_once('functions.php');
$addlink = FALSE;
$_GET['page'] = (isset($_GET['page'])) ? htmlentities(CleanVar(substr($_SERVER['REQUEST_URI'], 1))) : 'home';
$_POST[_GetPage_] = (isset($_POST[_GetPage_])) ? htmlentities(CleanVar($_POST[_GetPage_])) : FALSE;

$FixturePage = preg_match('/^'._FixtureFolder_.'\/(.*)\/(.*)$/mi', $_GET['page'], $matches);
if($_GET['page'] == 'request') {
	require_once('ajax.php');
	die();
	}
$title = _IndexTitle_;
$description = _IndexDescription_;
if($FixturePage>0){
	$Channels = array('manufacturer' => htmlentities(CleanVar(urldecode($matches[1]), FALSE)), 'fixture' => htmlentities(CleanVar(urldecode($matches[2]), FALSE)));
	$Search = new DMXChart($Channels);
	$CacheName = CacheFile(FixtureURL($Search->Manufacturer(), $Search->Fixture()));
	$CacheNameHead = $CacheName._CacheHead_;
	$CacheNameBody = $CacheName._CacheBody_;
	if(file_exists($CacheNameHead)) {
		require_once($CacheNameHead);
	} else {
		$datas = $DMXChartManager->FixtureInfos($Search);
		$count = count($datas);
		if($count > 0) {
			$Manufacturer = $datas[0]['Manufacturer'];
			$Fixture = $datas[0]['Fixture'];
			$title = $Manufacturer.' '.$Fixture;
			$description = $Manufacturer.' '.$Fixture.' DMX Charts details';
			$addlink = FixtureURL($Manufacturer, $Fixture);
				$CacheContent = '<?php'."\n";
				$CacheContent.= '$Manufacturer = \''.$Manufacturer.'\';'."\n";
				$CacheContent.= '$Fixture = \''.$Fixture.'\';'."\n";
				$CacheContent.= '$title = \''.$title.'\';'."\n";
				$CacheContent.= '$description = \''.$description.'\';'."\n";
				$CacheContent.= '$addlink = \''.$addlink.'\';'."\n";
				$CacheContent.= '?>';
				$CacheFile = fopen($CacheNameHead, 'w');
				fwrite($CacheFile, $CacheContent);
				fclose($CacheFile);
			} else {
				header('HTTP/1.0 404 Not Found');
			}
	}
}
switch($_GET['page']) {
	case _List_:
		$Cache->CacheHead(_List_, 'List of all fixtures', 'All fixtures profile indexed by FixturesFinder are there!');
		break;
	case _Welcome_:
		$Cache->CacheHead(_Welcome_, 'Welcome on Fixtures Finder @nline!', 'Fixture Finder allow to search fixture by many way, but not only, let\'s visit!');
		break;
	case _Changelog_:
		$Cache->CacheHead(_Changelog_, 'Fixtures Finder @nline Changelog', 'To be aware of all change and new functionnality, follow the changelog !');
		break;
	case _Fixturelog_:
		$Cache->CacheHead(_Fixturelog_, 'Fixtures Finder @nline Fixture Log', 'To be aware of all change on fixtures!');
		break;
	case _Synchro_:
		$title = 'Fixtures Finder @nline Synchronisation to Martin\'s';
		$description = 'Check the synchronisation status to Martin\'s Fixture Library';
		break;
	case _Admin_:
		$title = 'Fixtures Finder @nline Admin tool';
		$description = 'Administration operation of Fixture Finder @nline';
		break;
	case _Quality_:
		header('Content-type: text/csv');
		header('Content-Disposition: attachment; filename='._CSVQuality_);
		echo $DMXChartManager->ExportQuality();
		die();
		break;
	case _QualityScan_:
		header('Content-type: text/csv');
		header('Content-Disposition: attachment; filename='._CSVQuality_);
		echo $DMXChartManager->ExportQualityScan();
		die();
		break;
	default:
		break;
}
if(!$_POST[_GetPage_]) {
	require_once('./views/header.php');
}
	if($FixturePage>0) {
		if(file_exists($CacheNameBody)) {
			require_once($CacheNameBody);
		} else {
			ob_start();
				require_once('page.fixture.php');
				$CacheFile = fopen($CacheNameBody, 'w');
				fwrite($CacheFile, ob_get_contents());
				fclose($CacheFile);
			ob_end_flush();
		}
	} elseif($_GET['page']) {
		switch($_GET['page']) {
			case _List_:
			case _Welcome_:
			case _Changelog_:
			case _Fixturelog_:
				$Cache->CacheBody($_GET['page']);
				break;
			case _Synchro_:
				require_once('page.sync.php');
				break;
			case _Admin_:
				require_once('page.admin.php');
				break;
			case 'home':
				require_once('page.index.php');
				break;
			default:
				break;
		}

	} else {
		require_once('page.index.php');
	}
	if(!$_POST[_GetPage_]) {
		require_once('./views/footer.php');
	}
?>
