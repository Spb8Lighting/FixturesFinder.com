<div class="form">
	<h2>M-Series's Fixture Library log</h2>

	<p>The changelog of the Onyx Fixture Library is computed and available in detail after this small resume:</p>

	<div class="display list changelog">
	<ul>
<?php
function DisplayFixtureLog($lastdate)
{
    global $DMXChartManager;
    $Content = '<h2>%TITLE%</h2>';
    $NbFixture = $DMXChartManager->CountFixtureDate($lastdate);
    $State = array('updated', 'added');
    for ($i = 0; $i <= 1; $i++) {
        $Prev = '';
        $datas = $DMXChartManager->FixtureLog($lastdate, $State[$i]);
        if (count($datas) > 0) {
            if ($i == 0) {
                $FixNB = 0;
            }
            $Content .= '<div>';
            $Content .= '<div class="label">';
            $Content .= '<strong>' . ucfirst($State[$i]) . '</strong>';
            $Content .= '</div>';
            $Content .= '<div>';
            foreach ($datas as $Fixture) {
                $This = new DMXChart($Fixture);
                //Fixture Name
                if ($Prev != $This->manufacturer() . $This->fixture()) {
                    if ($Prev != '') {
                        $Content .= '</ul></li></ul>';
                    }
                    $Prev = $This->manufacturer() . $This->fixture();
                    $Content .= '<ul><li><a pop href="' . FixtureURL($This->manufacturer(), $This->fixture()) . '">' . $This->manufacturer() . ' > ' . $This->fixture() . '</a><ul>';
                    if ($i == 0) {
                        $FixNB++;
                    }
                }
                //Fixture mode and changes
                $Content .= '<li>' . $This->mode();
                if ($This->evol()) {
                    $Content .= '<ul>';
                    $Evols = explode("\n", $This->evol());
                    foreach ($Evols as $Evol) {
                        $Content .= '<li>' . $Evol . '</li>';
                    }
                    $Content .= '</ul>';
                }
                $Content .= '</li>';
            }
            $Content .= '</ul></li></ul>';
            $Content .= '</div>';
            $Content .= '</div>';
        }
    }
    $RealAdd = $NbFixture - $DMXChartManager->DeltaDate($lastdate);
    if ($RealAdd > 0) {
        $ResumeContent = '+' . $RealAdd;
    }
    if ($FixNB > 0) {
        if ($RealAdd > 0) {
            $ResumeContent .= ', ';
        }
        $ResumeContent .= $FixNB . ' update' . (($FixNB > 1) ? 's' : '');
    }
    $ResumeContent = '<strong>' . $DMXChartManager->ConvertDate($lastdate) . '</strong> : ' . $NbFixture . ' Fixtures <em>(' . $ResumeContent . ')</em>';
    echo '<li>' . $ResumeContent . '</li>';
    return str_replace('%TITLE%', $ResumeContent, $Content);
}
$Content = '';
foreach ($DMXChartManager->ListAllRelease() as $Release) {
    $Content .= DisplayFixtureLog($Release['lastdate']);
}
?>
	</ul>
</div>
<div class="display list changelog">
<?php
echo $Content;
?>
	</div>
</div>
