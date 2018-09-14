<div class="form FixtureDetail">
	<div class="detail">
		<h2><span><?php echo $Manufacturer . '</span> ' . $Fixture; ?></h2>

		<?php
$content = '';
$Changelog = '';
$DivSplice = count($datas);
foreach ($datas as $Fixtures) {
    $This = new DMXChart($Fixtures);
    $content .= '<div>';
    $content .= '<div class="label"><a target="_blank" title="Search for equivalent(s) fixture(s)" href="' . $DMXChartManager->GetLinkChart($This) . '">' . $This->mode() . ' <em>(' . $This->channels() . 'ch)</em></a>';
    $content .= $DMXChartManager->DisplayDMXChart($This, true);
    $content .= '</div>';
    $content .= '</div>';
}
$Wheels = $DMXChartManager->DisplayWheels($This);
$FixtureChangelog = $DMXChartManager->FixtureChangeLog($This);

if (count($FixtureChangelog) > 0) {
    $Prev = '';
    $ResumeChangelog = '<a class="img" href="#' . _ChangelogLink_ . '"><img src="img/svg/date.svg" alt="Show Fixture\'s Changelog" title="Show Fixture\'s Changelog" /></a>';
    foreach ($FixtureChangelog as $Fixture) {
        $This = new DMXChart($Fixture);
        //Fixture mode and changes
        if ($Prev != $This->lastdate()) {
            if ($Prev != '') {
                $Changelog .= '</ul>';
                $Changelog .= '</li>';
            }
            $Prev = $This->lastdate();
            $Changelog .= '<li>' . $DMXChartManager->ConvertDate($This->lastdate());
            $Changelog .= '<ul>';
        }
        $Changelog .= '<li><strong>' . ucfirst($This->status()) . '</strong>';
        $Changelog .= '<ul>';
        $Changelog .= '<li>' . $This->mode();
        if ($This->evol()) {
            $Changelog .= '<ul>';
            $Evols = explode("\n", $This->evol());
            foreach ($Evols as $Evol) {
                $Changelog .= '<li>' . $Evol . '</li>';
            }
            $Changelog .= '</ul>';
        }
        $Changelog .= '</li>';
        $Changelog .= '</ul>';
        $Changelog .= '</li>';
    }
    $Changelog .= '</ul>';
    $Changelog .= '</li>';
}
?>
		<div>
			<h3><?php echo $ResumeChangelog; ?></h3>
			<h3><a class="img" href="#<?php echo _CollapseLink_; ?>"><img src="img/svg/collapse.svg" alt="Hide Channel Values" title="Hide Channel Values" /></a></h3>
			<h3><a class="img" href="#<?php echo _ExpandLink_; ?>"><img src="img/svg/expand.svg" alt="Show Channel Values" title="Show Channel Values" /></a></h3>
			<h3><a class="img" data-fancybox-close="" href="#close"><img src="img/svg/close.svg" alt="Close" title="Close" /></a></h3>
			<div id="<?php echo _ChangelogLink_; ?>">
				<ul>
					<?php echo $Changelog; ?>
				</ul>
			</div>
		</div>
	</div>
	<?php echo $Wheels; ?>
	<div class="overflow">
		<div class="display">
			<?php echo $content; ?>
		</div>
	</div>
</div>