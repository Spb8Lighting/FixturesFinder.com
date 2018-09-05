<div class="form">
	<h2><?php echo $title; ?></h2>
	<div class="display list">
<?php
$datas = $DMXChartManager->DisplayAll();
foreach ($datas as $Row) {
    echo "\t\t" . '<div>' . "\n";
    echo "\t\t\t" . '<div class="label">' . $Row['Manufacturer'] . '</div>' . "\n";
    echo "\t\t\t" . '<div>' . "\n";
    echo "\t\t\t\t" . '<ul class="changelog">' . "\n";
    $Fixtures = array_filter(explode(',', $Row['Fixture']));
    if (count($Fixtures) > 0) {
        foreach ($Fixtures as $Fixture) {
            echo "\t\t\t\t\t" . '<li><a pop href="' . FixtureURL($Row['Manufacturer'], $Fixture) . '">' . $Fixture . '</a></li>' . "\n";
        }
    } else {
        echo "\t\t\t\t\t" . '<li>' . $Row['Fixture'] . '</li>' . "\n";
    }
    echo "\t\t\t\t" . '</ul>' . "\n";
    echo "\t\t\t" . '</div>' . "\n";
    echo "\t\t" . '</div>' . "\n";
}
?>
	</div>
</div>