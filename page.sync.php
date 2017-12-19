<?php
$Martin = array();
$local = array();

$dMartin = array();
$dlocal = array();

$datas = simplexml_load_string(file_get_contents('http://controllersupport.martin.com/Content/Manual/Support/FixtureLibrary.xml'));

foreach($datas->Manufacturer AS $Content) {
	$manuf = CleanVar((string) $Content['name']);
	foreach($Content->Model AS $Model) {
		$Martin[utf8_encode(CleanVar((string) $Model['name']))] = $manuf;
	}
}
$datas = $DMXChartManager->DisplayAllFixture();

foreach($datas AS $Row) {
	$local[utf8_encode(CleanVar($Row['Fixture']))] = $Row['Manufacturer'];
}
unset($datas);
foreach($Martin AS $key => $value) {
	if(!isset($local[$key])) { $dMartin[$value] = $key; }
}
foreach($local AS $key => $value) {
	if(!isset($Martin[$key])) { $dlocal[$value] = $key; }
}
$MartinResult = '';
$DeltatMartinLocal = count($dMartin);
if($DeltatMartinLocal > 0) {
	$MartinResult.= '<p>Fixture finder @nline doesn\'t have indexed the following reference'.(($DeltatMartinLocal > 1) ? 's' : '').':</p>';
	$MartinResult.= '<ul>';
	foreach($dMartin AS $Manuf => $Fixture)
		{
		$MartinResult.= '<li><strong>'.$Manuf.'</strong> > '.$Fixture.'</li>';	
		}
	$MartinResult.= '</ul>';
}
$LocalResult = '';
$DeltatLocalMartin = count($dlocal);
if($DeltatLocalMartin > 0) {
	$LocalResult.= '<p>Martin Fixture Library doesn\'t have the following reference'.(($DeltatLocalMartin > 1) ? 's' : '').':</p>';
	$LocalResult.= '<ul>';
	foreach($dlocal AS $Manuf => $Fixture)
		{
		$LocalResult.= '<li><a pop href="'.FixtureURL($Manuf, $Fixture).'"><strong>'.$Manuf.'</strong> > '.$Fixture.'</a></li>';	
		}
	$LocalResult.= '</ul>';
}
if($DeltatMartinLocal > 0 AND  $DeltatMartinLocal == $DeltatLocalMartin) {
	$result = '<p>The number of missing reference'.(($DeltatMartinLocal > 1) ? 's' : '').' is the same between the both. <strong>Maybe it is not an issue</strong></p>';
} elseif($DeltatMartinLocal > $DeltatLocalMartin) {
	$result = '<p>Fixture Finder @nline seems outdated, maybe a new Martin\'s Fixture Library has been released</p>';
} elseif($DeltatMartinLocal < $DeltatLocalMartin) {
	$result = '<p>Martin\'s Fixture Library seems to have less profile than the Fixture Finder @nline, maybe we get some in advance?</p>';
} elseif($DeltatMartinLocal == $DeltatLocalMartin) {
	$result = '<p>Fixture Finder @nline is compliant with Martin\'s Fixture Library</p>';
}
?>
<div class="form">
	<h2>Synchronisation status</h2>
	<div class="display list">
	<?php if($DeltatMartinLocal > 0) {?>
		<div>
			<div class="label">
				Martin's Fixture Library
				<span>Martin > FF@</span>
			</div>
			<div>
				<?php echo $MartinResult; ?>
			</div>
		</div>
	<?php } if($DeltatLocalMartin > 0) {?>
		<div>
			<div class="label">
				Fixture Finder @nline
				<span>FF@ > Martin</span>
			</div>
			<div>
				<?php echo $LocalResult; ?>
			</div>
		</div>
	<?php } if(isset($result)) {?>
		<div>
			<?php echo $result; ?>
		</div>
	<?php } ?>
	</div>
</div>