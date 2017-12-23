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
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php echo $title; ?></title>
	<meta name="robots" content="<?php echo ((_BETA_ == 1) ? 'noindex, nofollow' : 'index, follow'); ?>" />
	<meta name="author" content="Sylvain Guiblain">
	<base href="<?php echo _Domain_; ?>/">
	<link rel="bookmark" href="<?php echo _Domain_; ?><?php echo $addlink; ?>" />
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="Fixture, Finder, Martin, M-Series, M-PC">
	<meta name="geo.placename" content="Toulouse, Haute-Garonne, France" />
	<link rel="author" href="https://plus.google.com/+SylvainGuiblain" />
	<link rel="publisher" href="https://plus.google.com/+SylvainGuiblain" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php echo $title; ?>" />
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo _Domain_; ?>"/>
	<meta name="twitter:url" content="<?php echo _Domain_; ?>"/>
	<meta property="og:site_name" content="Fixture Finder @nline"/>
	<meta name="twitter:image" content="<?php echo _Domain_; ?>/fixture-finder-online.png"/>
	<meta property="og:image" content="<?php echo _Domain_; ?>/fixture-finder-online.png"/>
	<meta property="og:description" content="<?php echo $description; ?>">
	<meta name="twitter:description" content="<?php echo $description; ?>" />
	<meta property="article:author" content="<?php echo _Spb8Facebook_; ?>" />
	<meta property="article:publisher" content="<?php echo _Spb8Facebook_; ?>" />
	<meta name="google-site-verification" content="eBB7faXOcADvZobXuOxjW8HKRfluqFa8jLsB-nekDn0" />
	<meta name="theme-color" content="#141414">
	<link rel="shortcut icon" href="./img/favicons/favicon.ico" />
	<link rel="icon" type="image/x-icon" href="./img/favicons/favicon.ico" />
	<link rel="icon" type="image/png" href="./img/favicons/favicon-96x96.png" />
	<link rel="apple-touch-icon" href="./img/favicons/apple-icon-120x120.png" />
	<link type="text/css" rel="stylesheet" href="./css/reset.css" />
	<link type="text/css" rel="stylesheet" href="./css/style.php?<?php echo date("Y-m-d"); ?>" />
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
</head>
<body>
	<h1><?php echo (($_GET['page'] == 'home') ? '<span><a class="img" href="#quicksearch"><img title="Display Menu" src="img/mpc-icon.png" /></a></span> ' : ''); ?><a href="./" title="Martin M-PC Fixtures Finder tool online"><?php echo _IndexTitle_; ?></a><span class="linesearch"></span></h1>
<?php
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
	?>
<script defer charset="utf-8" src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
<script defer charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
<script defer charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script defer charset="utf-8" src="./js/script.php?<?php echo date("Y-m-d"); ?>"></script>
<?php if(_BETA_ == 0) { ?><script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-90655034-1', 'auto');
	ga('send', 'pageview');
</script><?php } ?>
</body>
</html>
<?php
	}
?>
