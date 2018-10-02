<div class="form">
	<h2>Changelog</h2>
	<div class="display list changelog">
<?php
$Changelog = array(
    '2018-10-02' => array(
        'ADDED|Visited fixture profile is a new function which allow you to track the profile you already displayed <em>(the tracking is reset after a new search)</em>',
        'FIXED|Opening a fixture profile with the combo "CTRL+CLICK" was not working',
    ),
    '2018-09-15' => array(
        'ADDED|New features "Move Settings", it permits to move the settings content on top of the form. Double click on the settings icon to activate/deactivate this feature. The preference is kept automatically following your action.',
    ),
    '2018-09-14' => array(
        'ADDED|New features "Keep Fixture Display", it permits to keep the extended or collapsed view on fixture profile view. The preference is kept automatically following your action.',
        'UPDATED|Wording update for the fixture detail page. "Show/Hide Channel Presets" become "Show/Hide Channel Values"',
        'UPDATED|The focus is coming back for non-touch device when clicking on a dropdown menu <em>(still disable for touch device to avoid the onscreen keyboard pop-up)</em>',
    ),
    '2018-08-28' => array(
        'UPDATED|New Onyx Fixture Library 2018-08-22 indexed',
    ),
    '2018-08-21' => array(
        'ADDED|Page 404 to indicate a non existing page',
        'UPDATED|The link animation has been removed on the Fixture List page and on the Onyx Fixture Library Changelog <em>(too much animation on links was causing slow down of device)</em>',
        'UPDATED|Scrollbar width has been increase for Chrome navigator',
        'FIXED|Some "M-Serie" were hidden on title and description tags',
    ),
    '2018-08-17' => array(
        'UPDATED|<a href="./' . _Synchro_ . '">Sync Status page</a> provide a clear readable status with icon and color scheme',
        'FIXED|<a href="./' . _Synchro_ . '">Sync Status page</a> was providing bad analysis summary <em>(XML Link was outdated)</em>',
    ),
    '2018-08-15' => array(
        'ADDED|New color theme based on Onyx',
        'ADDED|Fixture\'s details page display the "simplified" view per default. The extended view function has been added to display it if needed',
        'ADDED|User Guides had been created to help you to better understand how Onyx Fixture Finder works',
        'UPDATED|New Onyx Fixture Library 2018-08-14 indexed',
        'UPDATED|Onyx brand integrated all other Fixture Finder',
        'UPDATED|Move the search settings into a dedicated button with dedicated notification icon when the search is not set to the default one <em>(to free visible space)</em>',
        'UPDATED|Move the bottom links to make them more visible <em>(to free visible space)</em>',
        'UPDATED|Icons added on the channel type <em>(16 bits, rotation)</em>',
        'UPDATED|Icons added on the channel list type <em>(Intensity, Strobe, Colors etc ...)</em>',
        'UPDATED|Change wording when search limits are reached',
        'UPDATED|Better responsive answer with more width breakers',
        'UPDATED|Auto hide the navigation arrow after 2 sec',
        'UPDATED|For numeric input the numeric keyboard is now displayed <em>(instead of standard keyboard)</em>',
        'UPDATED|Keyboard is no more raised on mobile when selecting values',
        'FIXED|FixtureS finder is dead, welcome to Onyx Fixture Finder!',
        'FIXED|The buttons +/- to adjust DMX setting count was drawing a cross because of too big font-size',
    ),
    '2018-07-18' => array(
        'FIXED|Bad SQL Design was giving wrong fixtures count in the stats',
        'FIXED|Bad configuration file was leading to search into database from March 2018 instead of June 2018',
        'FIXED|The statistics was wrong because of this bad configuration',
        'FIXED|The records was also wrong because of this bad configuration',
    ),
    '2018-06-04' => array(
        'UPDATED|New Elation Fixture Library 2018-06-04 indexed',
        'FIXED|The link to Fixture request was still named "Martin"',
    ),
    '2018-03-14' => array(
        'UPDATED|M-Series has been buy by Elation Professional, copyright and link changed',
    ),
    '2017-12-28' => array(
        'FIXED|Color/Gobo/Animation picture not well ingested from Windows OS',
    ),
    '2017-12-23' => array(
        'FIXED|Color/Gobo/Animation presets were not well displayed on certain fixture profile',
        'FIXED|Color/Gobo/Animation presets were not always having the right naming',
        'FIXED|Color/Gobo/Animation presets was only present once in the complete fixture chart where it can be needed to displayed several times',
    ),
    '2017-12-21' => array(
        'ADDED|The searchs are now cached on the server to avoid Database overload. It reduce by 50% the answer time',
    ),
    '2017-12-20' => array(
        'ADDED|FixturesFinder.com has been pushed on GitHub to get support from community',
        'ADDED|Fixture preset has now the color slot and gobo displayed',
        'FIXED|Some fixtures profile was not ingested because of a SQL field to straight...',
        'FIXED|Restrict the confirmation pop-up for the main page',
        'UPDATED|Fixture preset are still not perfect, but some improvment has been done to display better informations',
    ),
    '2017-12-17' => array(
        'FIXED|The fixture name choice was not always refreshing the result',
        'FIXED|2 fixtures was not having any DMX Charts because of a bug in the ingestion process due to unwanted file',
        'FIXED|Fixture picture update was crashing due to max memory reach because of non unset of DMX Charts in the code',
        'FIXED|The Database "Index_Animation" was having a bad md5 settings which was resulting to non index picture on test environment',
        'UPDATED|Fixture preset are still not perfect, but some improvment has been done to display better informations',
        'UPDATED|Navigation button for mobile are now bigger',
    ),
    '2017-12-14' => array(
        'ADDED|Fixture has now the channel preset displayed. The preset aren\'t yet perfectly named, but fix will come later on',
        'ADDED|For mobile device, a shortcut to go to the top of to the bottom is now present',
        'UPDATED|Fixture detail page layout has been updated to display channel presets',
        'UPDATED|The menu quick actions was not visible when the page was going down. Now the menu is visible as the click on the blue ball scroll the page to the top where the menu is displayed',
        'UPDATED|Social Share button has been removed to avoid conflict with updated design <em>(the close button was hidden due to enlarge of content)</em>',
    ),
    '2017-12-13' => array(
        'FIXED|During the preset ingestion, there were an issue with previous library version which was not at the same level than the latest one. This was crashing the ingestion process',
        'ADDED|Global file system report has been set up to allow to see the availability of each file <em>(xml, xslt, gobo, animation, color)</em>',
    ),
    '2017-12-12' => array(
        'UPDATED|Fixture database has been updated to allow the presets display',
    ),
    '2017-12-10' => array(
        'FIXED|<a pop href="./' . _Fixturelog_ . '">Martin\'s Fixture Library changelog</a> has now proper count of update/add fixture',
        'ADDED|Fixture Finder version is now tracked in the Changelog',
        'ADDED|Each fixture page get the complete changelog of the fixture. Need to click on the line with date(s)',
        'UPDATED|Fixture detail page style updated',
        'UPDATED|The number of channel of a mode has been changed from "X channels" to "xCh" to take less width in the display',
        'UPDATED|Update "Search for similar" icon from the fixture page ðŸ”— <em>(harmonisation)</em>"',
        'UPDATED|Date format in changelog has change from "2017-12-10" to "10 December 2017"',
        'UPDATED|Fixture availability and latest modification reworded <em>(change "Release since" by "Available since")</em>',
    ),
    '2017-12-09' => array(
        'FIXED|Some gobos or animation picture was not displayed because the name was too long for the database <em>(database field enlarge)</em>',
        'FIXED|Some gobos or animation picture was not displayed because the name where having some double and simple quote characters',
        'ADDED|Each Fixture does have their Availability date in Fixture Library and the latest modification date <em>(much more to come soon)</em>',
        'UPDATED|All Library Fixture Release scan from July 2014',
        'UPDATED|The navigation now support the "back" function of the navigator to close the windows <em>(still missing the "forward" part)</em>',
        'UPDATED|Search type is automatically changed if only the fixture name is set',
        'UPDATED|<a pop href="./' . _Fixturelog_ . '">Martin\'s Fixture Library changelog</a> as now merged displayed, and the numbers presented are no more DMX Charts but Fixture',
    ),
    '2017-12-08' => array(
        'ADDED|Each Fixture can be share easily to socials networks thanks to the share icon on top right of modal windows',
        'ADDED|The navigation now generates histories entries, and URL change on the fly <em>(small integration of pushstate history)</em>',
        'ADDED|The Quick Action menu is quickly displayed at loading to give it more visibility',
        'ADDED|<a pop href="./' . _Fixturelog_ . '">Martin\'s Fixture Library changelog</a> <em>(Numbers seems not to be correct, take care)</em>',
        'UPDATED|Website Core - Javascripts call move to bottom of the page',
        'UPDATED|Website Core - jQuery udpdated to 3.2.1, Select2 updated to 4.0.5, Fancybox updated to 3.2.5',
        'UPDATED|The Quick Action menu is now animated when displayed/hidden',
    ),
    '2017-12-07' => array(
        'FIXED|The fixture profile mode name was not always the right one displayed <em>(bad fixture class assignation rules)</em>',
        'FIXED|During fixture indexation, one attribut was not well stored in the database <em>(no impact on the search function has this attribut is not yet used)</em>',
        'UPDATED|The Gobo or Animation picture in fixture has changed. To limit the number of different picture for the same display, the usage of MD5 has been put in place to display always the same picture for a content <em>(It should reduce needed bandwith and reduce full display time)</em>',
        'UPDATED|Website Core update on the cache system with more compact code to allow ease new page creation',
        'UPDATED|Website Core, Fixture database, and Indexation module updated to prepare the new page which should come in the next days',
    ),
    '2017-12-02' => array(
        'ADDED|The search by fixture name is now available. Don\'t forget to set your search to Live to get result!',
    ),
    '2017-12-01' => array(
        'FIXED|Not all colors, gobos, animation pictures was displayed on fixtures with more than 1 wheel. This was an effect board bring by the correction on 2017-09-29 with the slot finder',
        'FIXED|Not all colors, gobos, animation pictures was displayed on fixtures when these last was not declared in the "awaiting type" <em>(Gobo as a color etc ...)</em>',
        'FIXED|The accessories profil checker quality was not good, it has been fixed and content is now reliable',
    ),
    '2017-11-28' => array(
        'UPDATED|New Martin Fixture Library 28.11.17 indexed',
    ),
    '2017-09-29' => array(
        'FIXED|The search mode "Live" &amp; "Live Exact" was using strict channel name search instead of "start with" channel name search',
        'FIXED|The search for slot number was not robust',
        'FIXED|The search for slot number was breaking the user interface',
        'FIXED|The link with Color/Gobo or Animation channel was partially working <em>(the import of channel was stopping after the slot number)</em>',
        'UPDATED|The search for slot number now works with wheel number "Color = Wheel 1, Color 1 = Wheel 2 etc ...), same way for gobo and animation wheel',
    ),
    '2017-09-17' => array(
        'UPDATED|New Martin Fixture Library 17.09.17 indexed',
    ),
    '2017-09-05' => array(
        'ADDED|It is now possible to search for fixture with specific number of slot for the following wheels: Color, Gobo &amp; Animation. The number of slots to indicate is the one with open position. As exemple, 14 colors + 1 open will be found with 15. <em>(Everything is still not fully working, fixes will come in comings weeks)</em>',
    ),
    '2017-07-31' => array(
        'ADDED|Placed before the fixture name in the search result part, a new link is displayed under this icon &#128279;. This link will open a new window and launch a search to find equivalent fixture (with same DMX charts). Can be useful when looking for alternative fixture.',
    ),
    '2017-07-24' => array(
        'FIXED|DMX Charts was not good for some fixture because the offset attribut in the XML was not defined after XSL transformation',
        'UPDATED|New Martin Fixture Library 07.13.17 indexed',
    ),
    '2017-04-27' => array(
        'FIXED|A bad SQL design was giving bad result in "simpler" view. It was returning only the last fixture, when they were more than one to have the same name',
        'FIXED|Debug mode has been debugged ...',
    ),
    '2017-04-24' => array(
        'ADDED|A ><a href="' . _Spb8Donate_ . '">Donate</a> link (PayPal) has been added for people who want to support me on this tool development.',
    ),
    '2017-04-13' => array(
        'FIXED|Edge Explorer has the same display as Firefox &amp; Chrome',
        'FIXED|Some fixtures was displaying pictures parameters instead of the pictures',
        'FIXED|In the restricted channel type list, the CTO Fine was named CTC Fine',
        'ADDED|More Quick actions have been added',
        'ADDED|When clicking on the homepage link, a pop-up is raised to avoid bad click',
        'UPDATED|Pan Rot, Tilt Rot, Color Macro, Prism Rot &amp; Gobo Rot had been added to the restricted channel type list',
    ),
    '2017-04-12' => array(
        'ADDED|Quick actions have been added (add Pan, Tilt ...)',
        'UPDATED|Quick actions panel has been redesigned a little bit',
        'UPDATED|Menu icon has been changed',
    ),
    '2017-04-11' => array(
        'UPDATED|Reduce page loading by using AJAX instead of Iframe',
        'UPDATED|Fancybox updated to version 3',
    ),
    '2017-04-09' => array(
        'UPDATED|New Martin Fixture Library 06.04.17 indexed',
    ),
    '2017-04-08' => array(
        'FIXED|The Channel Type list switch now keeps your previous search attributs per channel',
        'FIXED|Case in URI was taken into account, it is no more the case',
        'ADDED|Quick actions has been added (add RGB, RGB-W, CMY). It will add the channel type on the last channel type named Any, or will simply add the channel',
        'ADDED|Number of Fixture profile found indicated also close to the search link (for mobile usage)',
        'UPDATED|Some CSS redesign to enhance mobile usage',
    ),
    '2017-04-07' => array(
        'FIXED|Performance issue when searching because of wheel computation which was live. Now the wheel computation is done at scan.',
        'FIXED|Switch back to restricted parameter list was not working.',
    ),
    '2017-04-01' => array(
        'FIXED|The Manufacturer name with "&amp;" was not accessible',
        'FIXED|The Manufacturer name with "&amp;" was not searchable',
        'ADDED|Color wheel and Gobo wheel are now displayed in the result list and also in the fixture profile detail view',
        'ADDED|Fixtures Profile <a href="./' . _CSVQuality_ . '">Picture and Gobo Quality</a>',
    ),
    '2017-03-30' => array(
        'FIXED|Lighten the update process in term of memory usage',
        'FIXED|Some PHP notices',
        'FIXED|At update, the number of channel and mode name of fixtures was lost',
        'FIXED|<a href="./' . _Synchro_ . '">Status page</a> was providing bad analysis summary',
        'ADDED|Accessories Index <a href="./' . _CSVPictures_ . '">Picture and Gobo Quality</a>',
    ),
    '2017-03-29' => array(
        'ADDED|Beta version of website created',
        'ADDED|SQL Table created: index_animation, index_gobo, index_color',
        'ADDED|Class created: MANUFAccessories',
        'ADDED|Manager created: MANUFAccessoriesManager',
        'UPDATED|Code updated: config, index, admin, changelog, sql',
        'UPDATED|Class updated: DMXChart',
        'UPDATED|Manager updated: DMXChartManager',
    ),
    '2017-03-25' => array(
        'ADDED|Quicksearch box allow to access to predefined search. But it also allow to access to some example of searchs',
        'UPDATED|<a href="./' . _Admin_ . '">Backoffice</a> can now update DMX Attributs table and Statistic on demand',
    ),
    '2017-03-24' => array(
        'FIXED|List of <a href="./' . _List_ . '">all fixture sorted by manufacturer</a> was incomplete due to MYSQL Configuration <em>(group_concat_max_len was too low)</em>',
        'FIXED|List of <a href="./' . _List_ . '">all fixture sorted by manufacturer</a> was sorted by decreasing order instead of increasing one</em>',
        'ADDED|The result display can be set to adjust the level of detail needed. The "Simpler" result level detail will only display Manufacturer and Fixture name without any links to allow easier copy/paste',
        'UPDATED|Secure connection is now used',
        'UPDATED|Redirection 301 between the old domain name and this one is in place',
    ),
    '2017-02-19' => array(
        'FIXED|The manufacturer drop down menu was populated, by error, with channel type',
        'FIXED|The number of channel was not displayed when accessing fixture page',
        'ADDED|Cache system has been set to increase performance and reduce database usage (cache system only exists for fixture detail page, changelog, fixture list',
        'UPDATED|Top screen now locked in position',
        'UPDATED|Fit much better smartphone usage',
        'UPDATED|<a href="./' . _Admin_ . '">Backoffice</a> updated to take into account the cache system',
    ),
    '2017-01-29' => array(
        'FIXED|Non-secable space presents in certain XML file was causing bad fixture name display',
        'FIXED|<a href="./' . _Changelog_ . '">Changelog</a> page was not part of the sitemap',
        'FIXED|<a href="./#debug">Debug mode</a> was not keep if activated because of brut removal of all hashes data, now with debug mode no hashes removed',
        'ADDED|<a href="./' . _Synchro_ . '">Status page</a> which analyze in real time the level of compliance with Martin\'s Fixture Library',
        'UPDATED|New Martin Fixture Library 26.01.17 indexed',
        'UPDATED|<a href="./' . _Changelog_ . '">Changelog</a> and <a href="./' . _Synchro_ . '">Status</a> has been sorted out the bottom left of the site',
        'UPDATED|Copyleft of the site has been merged into one line',
        'UPDATED|Database charset and encoding charset fully changed to UTF8 <em>(it was partial)</em>',
    ),
    '2017-01-28' => array(
        'ADDED|Highlight for RGB color has been extended to White, Amber, UV, Cyan, Magenta, Yellow and Intensity channel',
    ),
    '2017-01-27' => array(
        'FIXED|Footer of the website was over the content',
        'ADDED|Highlight for RGB color preset is now clearly identified to ease the fixture finder usage',
    ),
    '2017-01-26' => array(
        'FIXED|Highlight on manufacturer was buggy because of bad implementation',
        'FIXED|When using a link to restore a search session it was performing 3 times a search for nothing, amount reduce to 1 by adding a timeout on the search trigger, the server is appreciating that!',
        'FIXED|When using a link to restore a search session it was failing with spaced values',
        'FIXED|When using a link to restore a search session it was not recovering properly the channel type parameter causing failed not full restore',
        'ADDED|<a href="./' . _Changelog_ . '">Changelog page</a> which described almost all stuff done as far as my memory allow me to ðŸ˜‚',
        'ADDED|<a href="./sitemap.xml">Sitemap.xml</a> for Google has been generated (around 4k urls), added into scan functionnality to have it automatically rebuilt at each Fixture Library Update. Yes, I\'m a lazy man ^^',
        'ADDED|<a href="./robots.txt">Robots.txt</a> for bots allowing them to indexed all content',
        'UPDATED|Only channel type and manufacturer where having highlight functionnality, it has been expand to all select fields',
    ),
    '2017-01-25' => array(
        'ADDED|Reset button allow to reset all channel type to their default value',
        'ADDED|When setting a channel type or specific manufacturer, these last got their colors switch to RED',
    ),
    '2017-01-24' => array(
        'FIXED|The fixture order was not good after a search (not alphabetical sort)',
        'ADDED|<a href="./#debug">Quite complete debug mode</a> has been integrated to display debug informations',
        'ADDED|Reset button allow to reset all channel type to their default value',
        'ADDED|When scanning the library, the max charts and max dmx channel are stored into statistic database',
        'ADDED|After a search, this last can be bookmark or share by using the link available at top right (search translated in text)',
        'ADDED|List of <a href="./' . _List_ . '">all fixture sorted by manufacturer</a> added at bottom right with the number of fixture',
        'ADDED|Link to max charts and max dmx channel are available at the bottom right of the page',
    ),
    '2017-01-23' => array(
        'ADDED|When set back the Channel count to 0 then enter, the last channel type standing is reset to its default value (kind of reset)',
        'ADDED|Link to <a href="' . _MartinLibrary_ . '">Martin M-Series Library</a> &amp; Copyright to <a href="' . _Martin_ . '">Martin Professionnal</a> with a link to their website',
        'ADDED|Add some animation effects on link hover',
        'ADDED|Search text translation at top right',
        'UPDATED|Fixture mode page display has been change from vertical to horizontal mode ease the mode comparison',
    ),
    '2017-01-22' => array(
        'FIXED|A lot of DMX Charts was missing due to name case check missing (more than 1000 DMX Charts added)',
        'FIXED|The added channel type for search was unordered because of timeout',
        'ADDED|When fixture are find, you can click on its name to display the table listing all mode for this fixtures (more informations to come later on, in this windows)',
    ),
    '2017-01-21' => array(
        'ADDED|Complete list of channel parameter is now available with a search function on it',
        'ADDED|Manufacturer choice has been added to allow you to search for a particular manufacturer',
        'ADDED|When scanning the library, list of manufacturer is store into manufacturer database',
        'ADDED|LIVE Exact search allow to search for a fixture like LIVE mode, but with exact number of channel',
        'ADDED|during the blur effect disabled all command to avoid slow down of the navigator',
        'UPDATED|List of Mode search divided into 2 groups',
        'UPDATED|Interface interaction enhance for the way to directly set the number of dmx channel and the max channel (closely like on MPC, no more highlight background)',
    ),
    '2017-01-20' => array(
        'FIXED|the channel name search (search for pan gives also pan fine)',
        'ADDED|LIVE Search allow to search for a fixture by setting the channel type search without any order',
        'ADDED|UV in the drop down menu',
        'ADDED|Exact search mode hide the max channel (to avoid confusing wow)',
        'ADDED|during the blur effect disabled all command to avoid slow down of the navigator',
        'ADDED|the possibility to directly set the number of dmx channel to search in once',
        'UPDATED|increase the timeout when pushing + or - on number dmx search to avoid blur effect blinking (actually it is set to 0,375s, it will be changed to 0,5s)',
    ),
    '2017-01-19' => array(
        'ADDED|Website Skeleton',
        'ADDED|Form Search',
        'ADDED|AJAX requests',
    ),
    '2017-01-18' => array(
        'ADDED|XML Fixture Parser',
        'ADDED|Database structure',
        'ADDED|DMXCharts Class',
        'ADDED|DMXCharts Manager',
    ));
$version_inc = 0.1;
$version = (count($Changelog) + 1) * $version_inc;
foreach ($Changelog as $Date => $Contents) {
    $version -= $version_inc;
    ?>
		<div>
			<div class="label">
				<?php echo '<em>v' . round($version, 1) . '</em><br />' . $DMXChartManager->ConvertDate($Date); ?>
			</div>
			<div>
				<ul>
				<?php
$previous = '';
    foreach ($Contents as $Content) {
        list($class, $text) = explode('|', $Content);
        if ($previous != $class) {
            if ($previous != '') {
                echo '</li></ul>';
            }
            echo '<li><span class="' . $class . '">' . $class . '</span><ul>';
            echo "\t\t\t\t\t" . '<li>' . $text . '</li>' . "\n";
            $previous = $class;
        } else {
            echo "\t\t\t\t\t" . '<li>' . $text . '</li>' . "\n";
        }
    }
    ?>
				</ul>
			</div>
		</div>
<?php
}
?>
	</div>
</div>
