<?php
	//ini_set('error_reporting', E_ALL);
	//Beta config = 1, Production = 0
	define('_BETA_',					0);
	define('_RESTRICT_', 				0);
	define('_IP_',						'***');
	define('_Windows_',				TRUE);

############################
#						   #
#	     	Pages          #
#						   #
############################

	if(_BETA_ == 1) {
		define('_Domain_', 					'http://beta.fixturesfinder.com');
	} else {
		define('_Domain_', 					'http://fixturefinder');
	}

	define('_CDN_',							'http://m-pc.fixturesfinder.com/');

	define('_FixtureFolder_',			'fixture');
	define('_Quality_',					'quality');
	define('_QualityScan_',				'qualityscan');
	define('_List_',					'list');
	define('_Result_',					'result');
	define('_Changelog_',				'changelog');
	define('_Welcome_',					'welcome');
	define('_Fixturelog_',				'fixturelog');
	define('_Synchro_',					'sync');
	define('_Admin_',					'admin');
	define('_CacheFolder_',				'cache/');
		define('_CacheHead_',				'.head.php');
		define('_CacheBody_',				'.body.php');
		define('_CacheExt_',				'.php');
		define('_CacheSearch_',			'search');

############################
#						   #
#		Database           #
#						   #
############################


	if(_BETA_ == 1) {
		define('db_host', '***');
		define('db_user', '***');
		define('db_pass', '***');
		define('db_name', '***');

		//MPC Library
		define('_MPCLib_', '../m-pc/FixtureLibrary/');
	} else {
		//Connection Parameter
		define('db_host', 'localhost');
		define('db_user', 'root');
		define('db_pass', '');
		define('db_name', 'fixturesfinder');

		//MPC Library
		define('_MPCLib_', 'm-pc/FixtureLibrary/');

	}

	//Admin Connection
	define('_admin_salt_', 	'12345');
	define('adminPass', 	crypt('', _admin_salt_));

############################
#						   #
#		Default            #
#						   #
############################

	//HTTPS active = 1, deactivated = 0
	if(_BETA_ == 1) {
		define('_HTTPS_',						0);
	} else {
		define('_HTTPS_',						0);
	}
	define('_DefaultNbParameters_',			47);
	define('_MedFixtureFound_',				250);
	define('_MaxFixtureFound_',				800);

############################
#						   #
#		   Scan            #
#						   #
############################

	//Index Accessories
	define('_modeColor_',		'Color');
	define('_modeAnimation_',	'Animation');
	define('_modeGobo_',		'Gobo');

############################
#						   #
#		Selectors          #
#						   #
############################

	define('_FixtureFinder_',				'FixtureFinder');
	define('_Preferences_', 				'Preferences');
	define('_Channels_', 					'Channels');
	define('_Fixtures_', 					'Fixtures');
	define('_ChangelogLink_',				'ChangelogLink');

############################
#						   #
#		Parameters         #
#						   #
############################

	define('_AJAX_', 					'request');
	define('_DEBUG_', 					'debug');

	define('_FullParam_', 				'FullParam');

	define('_GetPage_', 				'GetPage');

	define('_SearchMode_', 				'SearchMode');
		define('_Search_StartWith_', 		'StartWith');
		define('_Search_Live_', 			'Live');
		define('_Search_Exact_Live_', 		'Live Exact');
		define('_Search_Exact_', 			'Exact');
	define('_DisplayMode_', 			'DisplayMode');
	define('_MaxChannels_', 			'MaxChannels');
	define('_ChParams_', 				'ChannelParameters');

	define('_FixtureHtml_', 			'FixtureHtml');
	define('_NbChannel_', 				'NumberOfChannel');
	define('_NbFixtures_', 				'NumberOfFixtures');
	define('_Manufacturer_', 			'Manufacturer');
	define('_FixtureName_', 			'FixtureName');
	define('_Channel_', 				'ch');

############################
#						   #
#		Sentence           #
#						   #
############################

	//Pages
	define('_Index1_',					'This tool will help you find fixtures in the M-Series library that have the channels matching your search.');
	define('_Index2_',					'The usage is simple, define the type channel per channel, in result, the list of found fixture matching will appear.');
	define('_IndexTitle_',				'Fixtures Finder @nline');
	define('_IndexDescription_',		'Based on the Fixture Library of Martin M-Serie, Fixtures Finder online permit to search fixtures by DMX criteria. But also many other useful stuff as Full DMX chart display!');

	//Variables
	define('_SearchPreference_',		'Search Preferences');
	define('_MaxChannel_',				'Max Channels');

	define('_ValAny_', 					'Any');
	define('_ValAll_', 					'All');

	//Error message
	define('_ErrParamMissing_', 		'Some parameters are missing');
	define('_ErrDirectAccess_', 		'Direct access is forbidden');

	define('_ErrDBOffline_', 			'Database is offline');

############################
#						   #
#		Links              #
#						   #
############################

	define('_Spb8Contact_',				'https://spb8.lighting/contact');
	define('_Spb8Donate_',				'https://PayPal.me/SylvainGuiblain');
	define('_Spb8Facebook_',			'https://www.facebook.com/sylvain.guiblain');

	define('_Martin_',					'http://www.martin.com');
	define('_MartinLibrary_',			'http://controllersupport.martin.com/Content/Manual/Support/Fixture_Library.htm');
	define('_DateLibrary_',				'2017-11-28');
	define('_MartinLibraryRel_',		'Fixture Library Revision 28.November.2017');
	define('_MartinFormLibrary_',		'http://www.martin.com/product/fixturerequest.asp');

############################
#						   #
#		Files              #
#						   #
############################

	define('_CSVPictures_',				'Status-Pictures_'.urlencode(_MartinLibraryRel_).'.csv');
	define('_CSVQuality_',				'Quality-Pictures_'.urlencode(_MartinLibraryRel_).'.csv');
?>
