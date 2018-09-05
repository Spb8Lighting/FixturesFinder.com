<?php
require_once 'config.php';
date_default_timezone_set('UTC');
$TrailingEdge = ($_SERVER['REQUEST_URI'] != '/' and substr($_SERVER['REQUEST_URI'], -1) == '/') ? true : false;
if ($TrailingEdge or $_SERVER['HTTP_HOST'] != preg_replace('/^https?:\/\//i', '', _Domain_) or (_HTTPS_ == 1 and (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on'))) {
    header('Status: 301 Moved Permanently', false, 301);
    $RequestURI = $TrailingEdge ? $_SERVER['REQUEST_URI'][-1] : $_SERVER['REQUEST_URI'];
    header('Location: ' . _Domain_ . $_SERVER['REQUEST_URI']);
    exit();
}
if (_RESTRICT_ == 1 and !in_array($_SERVER['REMOTE_ADDR'], _IP_)) {
    echo 'Restricted access. Please communicate the following IP Address: <br />';
    echo $_SERVER['REMOTE_ADDR'];
    die();
}
require_once 'functions.php';
$addlink = false;
$_GET['page'] = (isset($_GET['page'])) ? htmlentities(CleanVar(substr($_SERVER['REQUEST_URI'], 1))) : 'home';
$_POST[_GetPage_] = (isset($_POST[_GetPage_])) ? htmlentities(CleanVar($_POST[_GetPage_])) : false;

$FixturePage = preg_match('/^' . _FixtureFolder_ . '\/(.*)\/(.*)$/mi', $_GET['page'], $matches);
if ($_GET['page'] == 'request') {
    require_once 'ajax.php';
    die();
}
$title = _IndexTitle_;
$description = _IndexDescription_;
if ($FixturePage > 0) {
    $Channels = array('manufacturer' => htmlentities(CleanVar(urldecode($matches[1]), false)), 'fixture' => htmlentities(CleanVar(urldecode($matches[2]), false)));
    $Search = new DMXChart($Channels);
    $CacheName = CacheFile(FixtureURL($Search->Manufacturer(), $Search->Fixture()));
    $CacheNameHead = $CacheName . _CacheHead_;
    $CacheNameBody = $CacheName . _CacheBody_;
    if (file_exists($CacheNameHead)) {
        require_once $CacheNameHead;
    } else {
        $datas = $DMXChartManager->FixtureInfos($Search);
        $count = count($datas);
        if ($count > 0) {
            $Manufacturer = $datas[0]['Manufacturer'];
            $Fixture = $datas[0]['Fixture'];
            $title = $Manufacturer . ' ' . $Fixture;
            $description = $Manufacturer . ' ' . $Fixture . ' DMX Charts details';
            $addlink = FixtureURL($Manufacturer, $Fixture);
            $CacheContent = '<?php' . "\n";
            $CacheContent .= '$Manufacturer = \'' . $Manufacturer . '\';' . "\n";
            $CacheContent .= '$Fixture = \'' . $Fixture . '\';' . "\n";
            $CacheContent .= '$title = \'' . $title . '\';' . "\n";
            $CacheContent .= '$description = \'' . $description . '\';' . "\n";
            $CacheContent .= '$addlink = \'' . $addlink . '\';' . "\n";
            $CacheContent .= '?>';
            $CacheFile = fopen($CacheNameHead, 'w');
            fwrite($CacheFile, $CacheContent);
            fclose($CacheFile);
        } else {
            header('HTTP/1.0 404 Not Found');
        }
    }
}
switch ($_GET['page']) {
    case _List_:
        $Cache->CacheHead(_List_, 'List of all fixtures', 'All fixtures profile indexed by Onyx Fixture Finder are there!');
        break;
    case _Welcome_:
        $Cache->CacheHead(_Welcome_, 'Welcome on Onyx Fixture Finder!', 'Onyx Fixture Finder allow to search fixture by many way, but not only, let\'s visit!');
        break;
    case _Changelog_:
        $Cache->CacheHead(_Changelog_, 'Onyx Fixture Finder - Changelog', 'To be aware of all change and new functionnality, follow the changelog !');
        break;
    case _Fixturelog_:
        $Cache->CacheHead(_Fixturelog_, 'Onyx Fixture Finder -  Fixture Log', 'To be aware of all change on fixtures!');
        break;
    case _UG_ManufacturerFixture_:
        $Cache->CacheHead(_UG_ManufacturerFixture_, 'How to display all fixture for a dedicated manufacturer?', 'This Onyx Fixture Finder user guide will help you to display all fixtures for a dedicated manufacturer');
        break;
    case _UG_SpecificFixture_:
        $Cache->CacheHead(_UG_SpecificFixture_, 'How to search a fixture by its name?', 'This Onyx Fixture Finder user guide will help you to search a fixture by its name');
        break;
    case _UG_SearchModes_:
        $Cache->CacheHead(_UG_SearchModes_, 'What are the search modes available?', 'This Onyx Fixture Finder user guide will help you to understand the differents search modes');
        break;
    case _UG_FixtureDetails_:
        $Cache->CacheHead(_UG_FixtureDetails_, 'What a fixture page contains?', 'This Onyx Fixture Finder user guide will help you to understand the fixture details page and their feature');
        break;
    case _UG_Search_:
        $Cache->CacheHead(_UG_Search_, 'How works the search panel?', 'This Onyx Fixture Finder user guide will help you to understand the search panel');
        break;
    case _ReportReader_:
        $title = 'Onyx Reader Report';
        $description = 'Display the patch in a readable and enhance presentation';
        break;
    case _Synchro_:
        $title = 'Onyx Fixture Finder Synchronisation to Onyx Fixture Library';
        $description = 'Check the synchronisation status to Onyx Fixture Library';
        break;
    case _Admin_:
        $title = 'Onyx Fixture Finder - Admin tool';
        $description = 'Administration operation of Onyx Fixture Finder';
        break;
    case _Quality_:
        header('Content-type: text/csv');
        header('Content-Disposition: attachment; filename=' . _CSVQuality_);
        echo $DMXChartManager->ExportQuality();
        die();
        break;
    case _QualityScan_:
        header('Content-type: text/csv');
        header('Content-Disposition: attachment; filename=' . _CSVQuality_);
        echo $DMXChartManager->ExportQualityScan();
        die();
        break;
    default:
        break;
}
if (!$_POST[_GetPage_]) {
    require_once './views/header.php';
}
if ($FixturePage > 0) {
    if (file_exists($CacheNameBody)) {
        require_once $CacheNameBody;
    } else {
        ob_start();
        require_once 'page.fixture.php';
        $CacheFile = fopen($CacheNameBody, 'w');
        fwrite($CacheFile, ob_get_contents());
        fclose($CacheFile);
        ob_end_flush();
    }
} elseif ($_GET['page']) {
    switch ($_GET['page']) {
        case _List_:
        case _Welcome_:
        case _Changelog_:
        case _Fixturelog_:
        case _UG_ManufacturerFixture_:
        case _UG_SpecificFixture_:
        case _UG_SearchModes_:
        case _UG_FixtureDetails_:
        case _UG_Search_:
            $Cache->CacheBody($_GET['page']);
            break;
        case _ReportReader_:
            require_once 'page.report-reader.php';
            break;
        case _Synchro_:
            require_once 'page.sync.php';
            break;
        case _Admin_:
            require_once 'page.admin.php';
            break;
        case 'home':
            require_once 'page.index.php';
            break;
        default:
            require_once './views/404.php';
            break;
    }

} else {
    require_once 'page.index.php';
}
if (!$_POST[_GetPage_]) {
    require_once './views/footer.php';
}
