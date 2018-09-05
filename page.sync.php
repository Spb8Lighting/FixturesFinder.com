<?php
$Martin = array();
$local = array();

$dMartin = array();
$dlocal = array();

$datas = simplexml_load_string(file_get_contents(_OnyxXMLFixtures_));

foreach ($datas->Manufacturer as $Content) {
    $manuf = CleanVar((string) $Content['name']);
    foreach ($Content->Model as $Model) {
        $Martin[utf8_encode(CleanVar((string) $Model['name']))] = $manuf;
    }
}
$datas = $DMXChartManager->DisplayAllFixture();

foreach ($datas as $Row) {
    $local[utf8_encode(CleanVar($Row['Fixture']))] = $Row['Manufacturer'];
}
unset($datas);
foreach ($Martin as $key => $value) {
    if (!isset($local[$key])) {$dMartin[$value] = $key;}
}
foreach ($local as $key => $value) {
    if (!isset($Martin[$key])) {$dlocal[$value] = $key;}
}
$MartinResult = '';
$DeltatMartinLocal = count($dMartin);
if ($DeltatMartinLocal > 0) {
    $MartinResult .= '<p>Onyx Fixture Finder doesn\'t have indexed the following reference' . (($DeltatMartinLocal > 1) ? 's' : '') . ':</p>';
    $MartinResult .= '<ul>';
    foreach ($dMartin as $Manuf => $Fixture) {
        $MartinResult .= '<li><strong>' . $Manuf . '</strong> > ' . $Fixture . '</li>';
    }
    $MartinResult .= '</ul>';
}
$LocalResult = '';
$DeltatLocalMartin = count($dlocal);
if ($DeltatLocalMartin > 0) {
    $LocalResult .= '<p>Onyx Fixture Library doesn\'t have the following reference' . (($DeltatLocalMartin > 1) ? 's' : '') . ':</p>';
    $LocalResult .= '<ul>';
    foreach ($dlocal as $Manuf => $Fixture) {
        $LocalResult .= '<li><a pop href="' . FixtureURL($Manuf, $Fixture) . '"><strong>' . $Manuf . '</strong> > ' . $Fixture . '</a></li>';
    }
    $LocalResult .= '</ul>';
}
if ($DeltatMartinLocal > 0 and $DeltatMartinLocal == $DeltatLocalMartin) {
    $result = '<p class="statusOK">The number of missing reference' . (($DeltatMartinLocal > 1) ? 's' : '') . ' is the same between the both. <strong>Maybe it is not an issue</strong></p>';
} elseif ($DeltatMartinLocal > $DeltatLocalMartin + 5) {
    $result = '<p class="statusKO">Onyx Fixture Finder seems outdated, maybe a new Onyx\'s Fixture Library has been released</p>';
} elseif ($DeltatMartinLocal > $DeltatLocalMartin) {
    $result = '<p class="statusWA">' . $DeltatMartinLocal . ' fixture' . (($DeltatMartinLocal > 1) ? 's are' : ' is') . ' missing in Onyx Fixture Finder, that\'s not a big deal ...</p>';
} elseif ($DeltatMartinLocal < $DeltatLocalMartin) {
    $result = '<p class="statusWA">Onyx\'s Fixture Library seems to have less profile than the Onyx Fixture Finder, maybe we get some in advance?</p>';
} elseif ($DeltatMartinLocal == $DeltatLocalMartin) {
    $result = '<p class="statusOK">Onyx Fixture Finder is compliant with Onyx\'s Fixture Library</p>';
}
?>
<div class="form">
	<h2>Synchronisation status</h2>
	<?php if (isset($result)) {echo $result;}?>
	<div class="display changelog list">
	<?php if ($DeltatMartinLocal > 0) {?>
		<div>
			<div class="label">
				Onyx's Fixture Library
				<span>Onyx > OFF</span>
			</div>
			<div>
				<?php echo $MartinResult; ?>
			</div>
		</div>
	<?php }if ($DeltatLocalMartin > 0) {?>
		<div>
			<div class="label">
				Onyx Fixture Finder
				<span>OFF > Onyx</span>
			</div>
			<div>
				<?php echo $LocalResult; ?>
			</div>
		</div>
	<?php }?>
	</div>
</div>