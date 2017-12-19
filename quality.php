<?php
header('Content-type: text/csv');
header('Content-Disposition: attachment; filename=file.csv');
header('Pragma: no-cache');
header('Expires: 0');
$DMXChartManager->ExportQuality();
?>