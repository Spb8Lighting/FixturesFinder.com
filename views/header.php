<!DOCTYPE html>
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
