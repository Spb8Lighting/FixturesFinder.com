<?php
$Stats = $DMXChartManager->GetStatsInfos();
?>
<div id="global"></div>
	<div class="DispBox" id="quicksearch">

		<h2>Quick Actions</h2>

		<ul class="quickaction">
			<li class="IntensityShutter"><strong>Intensity &amp; Shutter</strong>
				<ul>
					<li>
						<a href="#Action=Add&amp;1=Intensity&amp;2=Strobe">
							<span data-option="intensity"><span>Intensity</span></span>
							<span data-option="strobe"><span>Strobe</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Strobe&amp;2=Intensity">
							<span data-option="strobe"><span>Strobe</span></span>
							<span data-option="intensity"><span>Intensity</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Intensity&amp;2=Shutter">
							<span data-option="intensity"><span>Intensity</span></span>
							<span data-option="shutter"><span>Shutter</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Shutter&amp;2=Intensity">
							<span data-option="shutter"><span>Shutter</span></span>
							<span data-option="intensity"><span>Intensity</span></span>
						</a>
					</li>
				</ul>
			</li>
			<li class="PanTilt"><strong>Pan &amp; Tilt</strong>
				<ul>
					<li>
						<a href="#Action=Add&amp;1=Pan&amp;2=Pan+Fine">
							<span data-option="pan"><span>Pan</span></span>
							<span data-option="pan fine"><span>Pan</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Tilt&amp;2=Tilt+Fine">
							<span data-option="tilt"><span>Tilt</span></span>
							<span data-option="tilt fine"><span>Tilt</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Pan&amp;2=Tilt">
							<span data-option="pan"><span>Pan</span></span>
							<span data-option="tilt"><span>Tilt</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Pan&amp;2=Tilt&amp;3=PT+Speed">
							<span data-option="pan"><span>Pan</span></span>
							<span data-option="tilt"><span>Tilt</span></span>
							<span data-option="pt speed"><span>Speed</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Pan&amp;2=Pan+Fine&amp;3=Tilt&amp;4=Tilt+Fine">
							<span data-option="pan"><span>Pan</span></span>
							<span data-option="pan fine"><span>Pan</span></span>
							<span data-option="tilt"><span>Tilt</span></span>
							<span data-option="tilt fine"><span>Tilt</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Pan&amp;2=Pan+Fine&amp;3=Tilt&amp;4=Tilt+Fine&amp;5=PT+Speed">
							<span data-option="pan"><span>Pan</span></span>
							<span data-option="pan fine"><span>Pan</span></span>
							<span data-option="tilt"><span>Tilt</span></span>
							<span data-option="tilt fine"><span>Tilt</span></span>
							<span data-option="pt speed"><span>Speed</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Pan&amp;2=Tilt&amp;3=Pan+Fine&amp;4=Tilt+Fine">
							<span data-option="pan"><span>Pan</span></span>
							<span data-option="tilt"><span>Tilt</span></span>
							<span data-option="pan fine"><span>Pan</span></span>
							<span data-option="tilt fine"><span>Tilt</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Pan&amp;2=Tilt&amp;3=Pan+Fine&amp;4=Tilt+Fine&amp;5=PT+Speed">
							<span data-option="pan"><span>Pan</span></span>
							<span data-option="tilt"><span>Tilt</span></span>
							<span data-option="pan fine"><span>Pan</span></span>
							<span data-option="tilt fine"><span>Tilt</span></span>
							<span data-option="pt speed"><span>Speed</span></span>
						</a>
					</li>
				</ul>
			</li>

			<li class="Color"><strong>Color Mixing</strong>
				<ul>
					<li>
						<a href="#Action=Add&amp;1=Cyan&amp;2=Magenta&amp;3=Yellow">
							<span data-option="cyan"><span>C</span></span>
							<span data-option="magenta"><span>M</span></span>
							<span data-option="yellow"><span>Y</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue">
							<span data-option="red"><span>R</span></span>
							<span data-option="green"><span>G</span></span>
							<span data-option="blue"><span>B</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=UV">
							<span data-option="red"><span>R</span></span>
							<span data-option="green"><span>G</span></span>
							<span data-option="blue"><span>B</span></span>
							<span data-option="uv"><span>UV</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=White">
							<span data-option="red"><span>R</span></span>
							<span data-option="green"><span>G</span></span>
							<span data-option="blue"><span>B</span></span>
							<span data-option="white"><span>W</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=White&amp;5=Amber">
							<span data-option="red"><span>R</span></span>
							<span data-option="green"><span>G</span></span>
							<span data-option="blue"><span>B</span></span>
							<span data-option="white"><span>W</span></span>
							<span data-option="amber"><span>A</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=White&amp;5=Amber&amp;6=UV">
							<span data-option="red"><span>R</span></span>
							<span data-option="green"><span>G</span></span>
							<span data-option="blue"><span>B</span></span>
							<span data-option="white"><span>W</span></span>
							<span data-option="amber"><span>A</span></span>
							<span data-option="uv"><span>UV</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=Amber">
							<span data-option="red"><span>R</span></span>
							<span data-option="green"><span>G</span></span>
							<span data-option="blue"><span>B</span></span>
							<span data-option="amber"><span>A</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=Amber&amp;5=White">
							<span data-option="red"><span>R</span></span>
							<span data-option="green"><span>G</span></span>
							<span data-option="blue"><span>B</span></span>
							<span data-option="amber"><span>A</span></span>
							<span data-option="white"><span>W</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Green&amp;3=Blue&amp;4=Amber&amp;5=White&amp;6=UV">
							<span data-option="red"><span>R</span></span>
							<span data-option="green"><span>G</span></span>
							<span data-option="blue"><span>B</span></span>
							<span data-option="amber"><span>A</span></span>
							<span data-option="white"><span>W</span></span>
							<span data-option="uv"><span>UV</span></span>
						</a>
					</li>
				</ul>
			</li>
			<li class="Color Fine"><strong>Color Mixing Fine</strong>
				<ul>
					<li>
						<a href="#Action=Add&amp;1=Cyan&amp;2=Cyan+Fine&amp;3=Magenta&amp;4=Magenta+Fine&amp;5=Yellow&amp;6=Yellow+Fine">
							<span data-option="cyan fine"><span>C</span></span>
							<span data-option="magenta fine"><span>M</span></span>
							<span data-option="yellow fine"><span>Y</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Red+Fine&amp;3=Green&amp;4=Green+Fine&amp;5=Blue&amp;6=Blue+Fine">
							<span data-option="red fine"><span>R</span></span>
							<span data-option="green fine"><span>G</span></span>
							<span data-option="blue fine"><span>B</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Red+Fine&amp;3=Green&amp;4=Green+Fine&amp;5=Blue&amp;6=Blue+Fine&amp;7=UV&amp;8=UV+Fine">
							<span data-option="red fine"><span>R</span></span>
							<span data-option="green fine"><span>G</span></span>
							<span data-option="blue fine"><span>B</span></span>
							<span data-option="uv fine"><span>UV</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Red+Fine&amp;3=Green&amp;4=Green+Fine&amp;5=Blue&amp;6=Blue+Fine&amp;7=White&amp;8=White+Fine">
							<span data-option="red fine"><span>R</span></span>
							<span data-option="green fine"><span>G</span></span>
							<span data-option="blue fine"><span>B</span></span>
							<span data-option="white fine"><span>W</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Red+Fine&amp;3=Green&amp;4=Green+Fine&amp;5=Blue&amp;6=Blue+Fine&amp;7=White&amp;8=White+Fine&amp;9=Amber&amp;10=Amber+Fine">
							<span data-option="red fine"><span>R</span></span>
							<span data-option="green fine"><span>G</span></span>
							<span data-option="blue fine"><span>B</span></span>
							<span data-option="white fine"><span>W</span></span>
							<span data-option="amber fine"><span>A</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Red+Fine&amp;3=Green&amp;4=Green+Fine&amp;5=Blue&amp;6=Blue+Fine&amp;7=White&amp;8=White+Fine&amp;9=Amber&amp;10=Amber+Fine&amp;11=UV&amp;12=UV+Fine">
							<span data-option="red fine"><span>R</span></span>
							<span data-option="green fine"><span>G</span></span>
							<span data-option="blue fine"><span>B</span></span>
							<span data-option="white fine"><span>W</span></span>
							<span data-option="amber fine"><span>A</span></span>
							<span data-option="uv fine"><span>UV</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Red+Fine&amp;3=Green&amp;4=Green+Fine&amp;5=Blue&amp;6=Blue+Fine&amp;7=Amber&amp;8=Amber+Fine">
							<span data-option="red fine"><span>R</span></span>
							<span data-option="green fine"><span>G</span></span>
							<span data-option="blue fine"><span>B</span></span>
							<span data-option="amber fine"><span>A</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Red+Fine&amp;3=Green&amp;4=Green+Fine&amp;5=Blue&amp;6=Blue+Fine&amp;7=White&amp;8=White+Fine&amp;9=Amber&amp;10=Amber+Fine">
							<span data-option="red fine"><span>R</span></span>
							<span data-option="green fine"><span>G</span></span>
							<span data-option="blue fine"><span>B</span></span>
							<span data-option="amber fine"><span>A</span></span>
							<span data-option="white fine"><span>W</span></span>
						</a>
					</li>
					<li>
						<a href="#Action=Add&amp;1=Red&amp;2=Red+Fine&amp;3=Green&amp;4=Green+Fine&amp;5=Blue&amp;6=Blue+Fine&amp;7=White&amp;8=White+Fine&amp;9=Amber&amp;10=Amber+Fine&amp;11=UV&amp;12=UV+Fine">
							<span data-option="red fine"><span>R</span></span>
							<span data-option="green fine"><span>G</span></span>
							<span data-option="blue fine"><span>B</span></span>
							<span data-option="amber fine"><span>A</span></span>
							<span data-option="white fine"><span>W</span></span>
							<span data-option="uv fine"><span>UV</span></span>
						</a>
					</li>
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
			<li><a href="#SearchMode=Live&amp;DisplayMode=1&amp;FullParam=0&amp;MaxChannels=000&amp;Manufacturer=elation&amp;count=001&amp;ch1=Any">Display all Elation's fixtures</a></li>
			<li><a href="#SearchMode=live&amp;DisplayMode=0&amp;FullParam=0&amp;MaxChannels=000&amp;Manufacturer=any&amp;count=002&amp;ch1=color&amp;colorslots1=12&amp;ch2=gobo&amp;goboslots1=07">Search fixtures with 12 slots on color wheel and 7 gobos</a></li>
			<li><a href="#SearchMode=Exact&amp;DisplayMode=0&amp;FullParam=0&amp;MaxChannels=000&amp;Manufacturer=Any&amp;count=004&amp;ch1=intensity&amp;ch2=red&amp;ch3=green&amp;ch4=blue">Search fixtures with Intensity &amp; RGB <strong>with</strong> channel order</a></li>
			<li><a href="#SearchMode=Live+Exact&amp;DisplayMode=0&amp;FullParam=0&amp;MaxChannels=000&amp;Manufacturer=Any&amp;count=004&amp;ch1=intensity&amp;ch2=red&amp;ch3=blue&amp;ch4=green">Search fixtures with Intensity &amp; RGB <strong>without</strong> channel order</a></li>
			<li><a href="#SearchMode=StartWith&amp;DisplayMode=0&amp;FullParam=0&amp;MaxChannels=007&amp;Manufacturer=Any&amp;count=003&amp;ch1=pan&amp;ch2=tilt&amp;ch3=red">Search fixtures on 7 DMX channels <strong>starting with</strong> Pan, Tilt and RED channel order</a></li>
			<li><a href="#SearchMode=Live&amp;DisplayMode=0&amp;FullParam=1&amp;MaxChannels=000&amp;Manufacturer=arkaos&amp;count=001&amp;ch1=Soft+Edge">Search Arkaos fixture <strong>having</strong> "Soft Edge" channel</a></li>
		</ul>

	</div>
	<form method="post" data-form="<?php echo _FixtureFinder_; ?>" action="./">
		<div>
		<?php if ($Stats['NbManufacturer'] <= 0) {?>
			<fieldset>
			<h2>Fixture Library scan is in progress</h2>
			<div>
				<div class="label">
					Maintenance
					<span>Please retry in few minutes, we are indexing the Fixture Library for you. It shall not be so long ... ;-)</span>
				</div>
			</div>
			</fieldset>
		<?php } else {?>
			<fieldset class="DispBox Right" id="<?php echo _Preferences_; ?>">
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
						<input autocomplete="off" type="tel" id="<?php echo _MaxChannels_; ?>" name="<?php echo _MaxChannels_; ?>" value="000" />
						<button type="button" id="bpp">+</button>
					</div>
				</div>
			</fieldset>
			<fieldset id="<?php echo _Channels_; ?>">
				<div class="sticky">
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
							<input autocomplete="off" type="tel" value="001" id="count" name="count" />
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
				</div>
			</fieldset>
		</div>
		<div>
			<fieldset id="<?php echo _Fixtures_; ?>">
			</fieldset><?php }?>
		</div>
	</form>
	<div class="DispBox Right" id="Changelogs">

		<h2>Changelogs</h2>

			<ul>
				<li><a pop href="./<?php echo _Fixturelog_; ?>">Onyx Fixture Library changelog</a> <em>(can slow down your device)</em></li>
				<li><a pop href="./<?php echo _Changelog_; ?>">Onyx Fixture Finder changelog</a></li>
			</ul>

		<h2>Onyx Fixture Finder State</h2>

			<ul>
				<li><a pop href="./<?php echo _Synchro_; ?>">Onyx Fixture Finder VS Onyx Fixture Library</a></li>
			</ul>

	</div>

	<div class="DispBox Right" id="Infos">

		<h2>User Guides</h2>

			<p>Onyx Fixture finder permit to perform following searches:</p>

			<ul id="UGSearches">
				<li><a pop href="./<?php echo _UG_ManufacturerFixture_; ?>">Display all manufacturer fixtures</a></li>
				<li><a pop href="./<?php echo _UG_SpecificFixture_; ?>">Search a fixture by its name</a></li>
			</ul>

			<p>Onyx Fixture finder features:</p>

			<ul id="UGInterface">
				<li><a pop href="./<?php echo _UG_Search_; ?>">Search panel</a></li>
				<li><a pop href="./<?php echo _UG_SearchModes_; ?>">Search modes</a></li>
				<li><a pop href="./<?php echo _UG_FixtureDetails_; ?>">Fixture Details</a></li>
			</ul>

		<?php if ($Stats['NbManufacturer'] > 0) {?>
		<h2>Statistics</h2>

			<p>The fixture library ingestion process has found:</p>

			<ul id="FixturesStats">
				<li><?php echo $Stats['NbManufacturer']; ?> Manufacturers</li>
				<li><?php echo $Stats['NbFixtures']; ?> Fixtures</li>
				<li><?php echo $Stats['NbDMXCharts']; ?> Fixture Profiles</li>
			</ul>

			<p>Access to the <a pop href="./<?php echo _List_; ?>">Complete Onyx Fixture Library list</a> <em>(can slow down your device)</em></p>

		<h2>Hall of Fame</h2>

			<ul id="HallOfFame">
				<li>Maximum DMX channel: <?php echo urldecode($Stats['NbMaxChannel']); ?></li>
				<li>Maximum DMX modes: <?php echo urldecode($Stats['NbMaxMode']); ?></li>
			</ul>
		<?php }?>

		<h2>Informations</h2>

			<p>Fixture Finder ingest <a href="<?php echo _MartinLibrary_; ?>"><?php echo _MartinLibraryRel_; ?></a> by <a href="<?php echo _Martin_; ?>">&copy; Obsidian Control Systems</a></p>

			<p>This tool is proudly designed by <a href="<?php echo _Spb8Contact_; ?>">Spb8 Lighting</a> <em>(<a href="<?php echo _Spb8Facebook_; ?>">Sylvain Guiblain</a>)</em></p>

			<p>If you want to support the host cost, feel free to <a href="<?php echo _Spb8Donate_; ?>">donate</a>!</p>

		<h2>Administration</h2>

			<p>Access to <a pop-iframe href="./<?php echo _Admin_; ?>">administration panel</a></p>

	</div>