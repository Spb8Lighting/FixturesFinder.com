<div class="form FixtureDetail">
	<div class="detail">
		<h2><span><?php echo $Manufacturer.'</span> '.$Fixture; ?></h2>
	
		<?php
		$content = '';
		$Changelog = '';
		$DivSplice = count($datas);
		foreach($datas AS $Fixtures) {
			$This = new DMXChart($Fixtures);
			/* if($DivSplice < 5) {
				$content.='<div style="width: calc((100% / '.$DivSplice.') - 1.5em)">';
			} else {
				$content.='<div>';
			} */
			$content.='<div>';
				$content.='<div class="label">'.$This->mode().' <em>('.$This->channels().'ch)</em>  <a target="_blank" title="Search for equivalent(s) fixture(s)" href="'.$DMXChartManager->GetLinkChart($This).'"> 🔗</a>';
				$content.= $DMXChartManager->DisplayDMXChart($This, TRUE);
				$content.= '</div>';
			$content.='</div>';
		}
		// tr td:last-child -> Hide to simplify DMX Chart
		$ResumeChangelog = $DMXChartManager->GetFixtureDates($This); 
		$Wheels = $DMXChartManager->DisplayWheels($This);
		$FixtureChangelog = $DMXChartManager->FixtureChangeLog($This);

		if(count($FixtureChangelog) > 0) {
			$Prev = '';
			$ResumeChangelog = '<a href="#'._ChangelogLink_.'">'.$ResumeChangelog.'</a>';
			foreach($FixtureChangelog AS $Fixture) {
				$This = new DMXChart($Fixture);
				//Fixture mode and changes
					if($Prev != $This->lastdate()) {
						if($Prev != '') {
							$Changelog.= '</ul>';
						$Changelog.= '</li>';
						}
					$Prev = $This->lastdate();
					$Changelog.= '<li>'.$DMXChartManager->ConvertDate($This->lastdate());
						$Changelog.= '<ul>';
					}
							$Changelog.= '<li><strong>'.ucfirst($This->status()).'</strong>';
								$Changelog.= '<ul>';
									$Changelog.= '<li>'.$This->mode();
									if($This->evol()) {
										$Changelog.= '<ul>';
										$Evols = explode("\n", $This->evol());
										foreach($Evols AS $Evol) {
											$Changelog.= '<li>'.$Evol.'</li>';
										}
										$Changelog.= '</ul>';
									}
									$Changelog.= '</li>';
								$Changelog.= '</ul>';
							$Changelog.= '</li>';
			}
				$Changelog.= '</ul>';
			$Changelog.= '</li>';
		}
		?>
		<div>
			<h3><?php echo $ResumeChangelog; ?></h3>
			<div id="<?php echo _ChangelogLink_; ?>">
				<ul>
					<?php echo $Changelog; ?>
				</ul>
			</div>
		</div>
	</div>
	<?php echo $Wheels;	?>
	<div class="display">
		<?php echo $content; ?>
	</div>
</div>