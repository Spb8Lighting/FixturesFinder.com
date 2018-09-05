<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php echo $title; ?></title>
	<meta name="robots" content="<?php echo ((_BETA_ == 1) ? 'noindex, nofollow' : 'index, follow'); ?>" />
	<meta name="author" content="Sylvain Guiblain">
	<base href="<?php echo _Domain_; ?>/">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="Fixture, Finder, Elation, M-Series, M-PC, Onyx, Obsidian">
	<meta name="geo.placename" content="Toulouse, Haute-Garonne, France" />
	<link rel="author" href="https://plus.google.com/+SylvainGuiblain" />
	<link rel="publisher" href="https://plus.google.com/+SylvainGuiblain" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="<?php echo $title; ?>" />
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo _Domain_; ?>"/>
	<meta property="fb:app_id" content="700885236914107" />
	<meta name="twitter:url" content="<?php echo _Domain_; ?>"/>
	<meta property="og:site_name" content="Onyx Fixture Finder"/>
	<meta name="twitter:image" content="<?php echo _Domain_; ?>/onyx-fixture-finder.png"/>
	<meta property="og:image" content="<?php echo _Domain_; ?>/onyx-fixture-finder.png"/>
	<meta property="og:description" content="<?php echo $description; ?>">
	<meta name="twitter:description" content="<?php echo $description; ?>" />
	<meta property="article:author" content="<?php echo _Spb8Facebook_; ?>" />
	<meta property="article:publisher" content="<?php echo _Spb8Facebook_; ?>" />
	<meta name="google-site-verification" content="eBB7faXOcADvZobXuOxjW8HKRfluqFa8jLsB-nekDn0" />
	<meta name="theme-color" content="#262626">
	<link defer href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
	<link defer rel="shortcut icon" href="./img/favicons/favicon.ico" />
	<link defer rel="icon" type="image/x-icon" href="./img/favicons/favicon.ico" />
	<link defer rel="icon" type="image/png" href="./img/favicons/favicon-96x96.png" />
	<link defer rel="apple-touch-icon" href="./img/favicons/apple-icon-120x120.png" />
	<link type="text/css" rel="stylesheet" href="./css/reset.css" />
	<link type="text/css" rel="stylesheet" href="./css/style.php?<?php echo date("Y-m-d"); ?>" />
	<link defer type="text/css" rel="stylesheet" href="./css/print.css" media="print">
	<link defer type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
	<link defer type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
</head>
<body>
	<h1>
		<?php
switch ($_GET['page']) {
    case 'home':
        echo '<span class="showbox"><a class="img" href="#quicksearch"><img alt="Obsidian Logo" title="Display Menu" src="img/logo-obsidian.png" /></a></span> ';
        echo '<a href="./" title="' . _IndexTitle_ . '">' . _IndexTitle_ . '</a><span class="linesearch"></span>';
        break;
    case _ReportReader_:
        echo '<span class="showbox"><img alt="Obsidian Logo" src="img/logo-obsidian.png" /></span> ';
        echo '<a href="./' . _ReportReader_ . '" title="' . _IndexTitleReports_ . '">' . _IndexTitleReports_ . '</a><span class="linesearch"></span>';
        break;
    default:
        echo '<span class="showbox"><img alt="Obsidian Logo" src="img/logo-obsidian.png" /></span> ';
        echo '<a href="./" title="' . _IndexTitle_ . '">' . _IndexTitle_ . '</a><span class="linesearch"></span>';
        break;
}
if ($_GET['page'] == 'home') {
    echo '<span id="iconbox" class="showbox">';
    echo '<a class="img" href="#Preferences">';
    echo '<img title="Display Search Settings" src="img/svg/settings.svg" alt="Gear" />';
    echo '</a>';
    echo '<a class="img" href="#Changelogs">';
    echo '<img title="Access changelogs" src="img/svg/changelog.svg" alt="Evolution" />';
    echo '</a>';
    echo '<a class="img" href="#Infos">';
    echo '<img title="Access Global Informations" src="img/svg/question.svg" alt="Question" />';
    echo '</a>';
    echo '</span>';
}
?>
	</h1>
