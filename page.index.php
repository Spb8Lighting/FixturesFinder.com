<?php
$Stats = $DMXChartManager->GetStatsInfos();
?>
	<div id="quicksearch">
	
		<h2>Quick Actions</h2>
			
		<ul class="quickaction">
			<li><strong>Intensity &amp; Shutter</strong>
				<ul>
					<li><a href="#Action=Add&amp;1=Intensity&amp;2=Strobe">Add Intensity &amp; Strobe</a> <em>(<a href="#Action=Add&amp;1=Strobe&amp;2=Intensity">inverted</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Intensity&amp;2=Shutter">Add Intensity &amp; Shutter</a> <em>(<a href="#Action=Add&amp;1=Shutter&amp;2=Intensity">inverted</a>)</em></li>
				</ul>
			</li>
			<li><strong>Pan &amp; Tilt</strong>
				<ul>
					<li><a href="#Action=Add&amp;1=Pan&amp;2=Pan Fine">Add Pan &amp; Pan Fine</a></li>
					<li><a href="#Action=Add&amp;1=Tilt&amp;2=Tilt Fine">Add Tilt &amp; Tilt Fine</a></li>
					<li><a href="#Action=Add&amp;1=Pan&amp;2=Tilt">Add Pan &amp; Tilt</a> <em>(<a href="#Action=Add&amp;1=Pan&amp;2=Tilt&amp;3=PT Speed">with PT Speed</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Pan&amp;2=Pan Fine&amp;3=Tilt&amp;4=Tilt Fine">Add Pan  &amp; Pan Fine + Tilt &amp; Tilt Fine</a> <em>(<a href="#Action=Add&amp;1=Pan&amp;2=Pan Fine&amp;3=Tilt&amp;4=Tilt Fine&amp;5=PT Speed">with PT Speed</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Pan&amp;2=Tilt&amp;3=Pan Fine&amp;4=Tilt Fine">Add Pan  &amp; Tilt +  Pan Fine &amp; Tilt Fine</a> <em>(<a href="#Action=Add&amp;1=Pan&amp;2=Tilt&amp;3=Pan Fine&amp;4=Tilt Fine&amp;5=PT Speed">with PT Speed</a>)</em></li>
				</ul>
			</li>
			
			<li><strong>Color Mixing</strong>
				<ul>
					<li><a href="#Action=Add&amp;1=Cyan&amp;2=Magenta&amp;3=Yellow">Add CMY</a> <em>(<a href="#Action=Add&amp;1=Cyan&amp;2=Cyan Fine&amp;3=Magenta&amp;4=Magenta Fine&amp;5=Yellow&amp;6=Yellow Fine">mode fine</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue">Add RGB</a> <em>(<a href="#Action=Add&amp;1=Red&amp;2=Red Fine&amp;3=Green&amp;4=Green Fine&amp;5=Blue&amp;6=Blue Fine">mode fine</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=White">Add RGBW</a> <em>(<a href="#Action=Add&amp;1=Red&amp;2=Red Fine&amp;3=Green&amp;4=Green Fine&amp;5=Blue&amp;6=Blue Fine&amp;7=White&amp;8=White Fine">mode fine</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=Amber">Add RGBA</a> <em>(<a href="#Action=Add&amp;1=Red&amp;2=Red Fine&amp;3=Green&amp;4=Green Fine&amp;5=Blue&amp;6=Blue Fine&amp;7=Amber&amp;8=Amber Fine">mode fine</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=UV">Add RGBUV</a> <em>(<a href="#Action=Add&amp;1=Red&amp;2=Red Fine&amp;3=Green&amp;4=Green Fine&amp;5=Blue&amp;6=Blue Fine&amp;7=UV&amp;8=UV Fine">mode fine</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=White&amp;5=Amber">Add RGBWA</a> <em>(<a href="#Action=Add&amp;1=Red&amp;2=Red Fine&amp;3=Green&amp;4=Green Fine&amp;5=Blue&amp;6=Blue Fine&amp;7=White&amp;8=White Fine&amp;9=Amber&amp;10=Amber Fine">mode fine</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=Amber&amp;5=White">Add RGBAW</a> <em>(<a href="#Action=Add&amp;1=Red&amp;2=Red Fine&amp;3=Green&amp;4=Green Fine&amp;5=Blue&amp;6=Blue Fine&amp;7=Amber&amp;8=Amber Fine&amp;9=White&amp;10=White Fine">mode fine</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=White&amp;5=Amber&amp;6=UV">Add RGBWAUV</a> <em>(<a href="#Action=Add&amp;1=Red&amp;2=Red Fine&amp;3=Green&amp;4=Green Fine&amp;5=Blue&amp;6=Blue Fine&amp;7=White&amp;8=White Fine&amp;9=Amber&amp;10=Amber Fine&amp;11=UV&amp;12=UV Fine">mode fine</a>)</em></li>
					<li><a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=Amber&amp;5=White&amp;6=UV">Add RGBAWUV</a> <em>(<a href="#Action=Add&amp;1=Red&amp;2=Red Fine&amp;3=Green&amp;4=Green Fine&amp;5=Blue&amp;6=Blue Fine&amp;7=Amber&amp;8=Amber Fine&amp;9=White&amp;10=White Fine&amp;11=UV&amp;12=UV Fine">mode fine</a>)</em></li>
				</ul>
			</li>
		</ul>
		
		<hr />
		
		<h2>Quick Searches</h2>
		
		<ul class="quicksearch">
			<li><a href="#SearchMode=Exact&amp;DisplayMode=0&amp;FullParam=0&amp;MaxChannels=000&amp;Manufacturer=Any&amp;count=001&amp;ch1=Any">Reset to default search settings</a></li>
			<li><a href="#SearchMode=Live&amp;DisplayMode=1&amp;FullParam=0&amp;MaxChannels=000&amp;Manufacturer=Any&amp;count=001&amp;ch1=Any">Display all manufacturer's fixtures</a></li>
		</ul>
		
		<hr />
		
		<h2>Examples</h2>
		
		<ul class="quickexample">
			<li><a href="#SearchMode=Live&amp;DisplayMode=1&amp;FullParam=0&amp;MaxChannels=000&amp;Manufacturer=martin&amp;count=001&amp;ch1=Any">Display all Martin's fixtures</a></li>
			<li><a href="#SearchMode=live&amp;DisplayMode=0&amp;FullParam=0&amp;MaxChannels=000&amp;Manufacturer=any&amp;count=002&amp;ch1=color&amp;colorslots1=12&amp;ch2=gobo&amp;goboslots1=07">Search fixtures with 12 slots on color wheel and 7 gobos</a></li>
			<li><a href="#SearchMode=Exact&amp;DisplayMode=0&amp;FullParam=0&amp;MaxChannels=000&amp;Manufacturer=Any&amp;count=004&amp;ch1=intensity&amp;ch2=red&amp;ch3=green&amp;ch4=blue">Search fixtures with Intensity &amp; RGB <strong>with</strong> channel order</a></li>
			<li><a href="#SearchMode=Live+Exact&amp;DisplayMode=0&amp;FullParam=0&amp;MaxChannels=000&amp;Manufacturer=Any&amp;count=004&amp;ch1=intensity&amp;ch2=red&amp;ch3=blue&amp;ch4=green">Search fixtures with Intensity &amp; RGB <strong>without</strong> channel order</a></li>
			<li><a href="#SearchMode=StartWith&amp;DisplayMode=0&amp;FullParam=0&amp;MaxChannels=007&amp;Manufacturer=Any&amp;count=003&amp;ch1=pan&amp;ch2=tilt&amp;ch3=red">Search fixtures on 7 DMX channels <strong>starting with</strong> Pan, Tilt and RED channel order</a></li>
			<li><a href="#SearchMode=Live&amp;DisplayMode=0&amp;FullParam=1&amp;MaxChannels=000&amp;Manufacturer=arkaos&amp;count=001&amp;ch1=Soft+Edge">Search Arkaos fixture <strong>having</strong> "Soft Edge" channel</a></li>
		</ul>
		
	</div>
	<form method="post" data-form="<?php echo _FixtureFinder_; ?>" action="./">
		<div>
			<fieldset id="<?php echo _Preferences_; ?>">
				<?php if($Stats['NbManufacturer'] <= 0) { ?>
				<h2>Fixture Library scan is in progress</h2>
				<div>
					<div class="label">
						Maintenance
						<span>Please retry in few minutes, we are indexing the Fixture Library for you. It shall not be so long ... ;-)</span>
					</div>
				</div>
				<?php } else { ?>
				<h2>Search Settings</h2>
				<div>
					<div>
						<label for="<?php echo _SearchMode_; ?>">
							Mode
								<span>Type of search</span>
						</label>
					</div>
					<div>
						<select data-default="<?php echo _Search_Exact_; ?>" autocomplete="off" name="<?php echo _SearchMode_; ?>" id="<?php echo _SearchMode_; ?>">
						 <optgroup label="Ordered (with channel order)">
							<option value="<?php echo strtolower(_Search_Exact_); ?>" selected="selected"><?php echo _Search_Exact_; ?></option>
							<option value="<?php echo strtolower(_Search_StartWith_); ?>"><?php echo _Search_StartWith_; ?></option>
						</optgroup>
						 <optgroup label="Unordered (without channel order)">
							<option value="<?php echo strtolower(_Search_Exact_Live_); ?>"><?php echo _Search_Exact_Live_; ?></option>
							<option value="<?php echo strtolower(_Search_Live_); ?>"><?php echo _Search_Live_; ?></option>
						 </optgroup>
						</select>
					</div>
				</div>
				<div>
					<div>
						<label for="<?php echo _DisplayMode_; ?>">
							Result
								<span>Set result display level</span>
						</label>
					</div>
					<div>
						<select data-default="0" autocomplete="off" name="<?php echo _DisplayMode_; ?>" id="<?php echo _DisplayMode_; ?>">
						<optgroup label="Full view with DMX Charts">
							<option value="0" selected="selected">Detailed</option>
						</optgroup>
						<optgroup label="DMX Charts hidden">
							<option value="1">Simpler</option>
						</optgroup>
						</select>
					</div>
				</div>
				<div>
					<div>
						<label for="<?php echo _FullParam_; ?>">
							Channel type list
								<span><em>Restricted</em> are most common DMX types</span>
						</label>
					</div>
					<div>
						<select data-default="0" autocomplete="off" name="<?php echo _FullParam_; ?>" id="<?php echo _FullParam_; ?>">
						<optgroup label="Most common Channel Type">
							<option value="0" selected="selected">Restricted</option>
						</optgroup>
						<optgroup label="Full list of Channel Type">
							<option value="1">Full</option>
						</optgroup>
						</select>
					</div>
				</div>
				<div id="countermaxchannel">
					<div>
						<label for="<?php echo _MaxChannels_; ?>">
							Max Channel
								<span>Number of DMX Channel for the searched fixture</span>
						</label>
					</div>
					<div>
						<button type="button" id="bll">-</button>
						<input autocomplete="off" type="text" id="<?php echo _MaxChannels_; ?>" name="<?php echo _MaxChannels_; ?>" value="000" />
						<button type="button" id="bpp">+</button>
					</div>
				</div>
			</fieldset>
			<fieldset id="<?php echo _Channels_; ?>">
				<h2>Searched Fixture</h2>
				<?php echo $DMXChartManager->SelectManufacturers();
				 echo $DMXChartManager->SelectFixtureNames(); ?>
				<div id="counter">
					<div>
						<label for="count">
							DMX Channel Count
								<span>Adjust the number of DMX channel to be displayed below</span>
						</label>
					</div>
					<div>
						<button type="button" id="bl">-</button>
						<input autocomplete="off" type="text" value="001" id="count" name="count" />
						<button type="button" id="bp">+</button>
					</div>
				</div>
				<div>
					<div class="label">
						Reset Channel Type
							<span>Set all channel type to "<?php echo _ValAny_; ?>"</span>
					</div>
					<div>
						<button type="button" id="Reset">Reset</button>
					</div>
				</div>
			</fieldset>
		</div>
		<div>
			<fieldset id="<?php echo _Fixtures_; ?>">
			</fieldset><?php } ?>
		</div>
	</form>
	
	<footer>
	<p><a href="<?php echo _Spb8Donate_; ?>">Donate</a> | <a pop href="./<?php echo _Fixturelog_; ?>">Library changelog</a> | <a pop href="./<?php echo _Changelog_; ?>">Site changelog</a> | <a pop href="./<?php echo _Synchro_; ?>">Status</a>
	<br /><span class="copyleft"><a pop-iframe href="./<?php echo _Admin_; ?>">&copy;</a></span> Tool designed by <a href="<?php echo _Spb8Contact_; ?>">Spb8 Lighting</a> <em>(<a href="<?php echo _Spb8Facebook_; ?>">Sylvain Guiblain</a>)</em></p>
	
	<p><a href="<?php echo _MartinLibrary_; ?>"><?php echo _MartinLibraryRel_; ?></a> by <a href="<?php echo _Martin_; ?>">&copy; Martin Professional</a>
	<br /><?php if($Stats['NbManufacturer'] > 0) { $Stats = $DMXChartManager->GetStatsInfos(); echo $Stats['NbManufacturer'].' manufacturers, <a pop href="./'._List_.'">'.$Stats['NbFixtures'].' fixtures</a>, '.$Stats['NbDMXCharts'].' DMX Charts <em>(Fixture Record: '.urldecode($Stats['NbMaxChannel']).', '.urldecode($Stats['NbMaxMode']).')</em>'; } ?></p>
	</footer>