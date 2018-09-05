var $Message = {
	Only1XmlAtOnce: 'Only 1 XML file is allowed at once',
	OnlyXmlFileAllowed: 'Only XML file are allowed',
	OnlyThisXmlNameAllowed: 'Only .OnyxPatch.xml or .OnyxFixtureGroup.xml are allowed',
	Action: {
		WiP: 'Work in progress ...'
	}
},
	$Settings = {
		WebSite: 'https://onyxfixturefinder.com',
		WebSiteFixture: '/fixture'
	},
	$Options = {
		Online: true,
		InvertIcon: false
	},
	$Regex = {
		Patch: /\.onyxpatch\.xml$/i,
		Group: /\.onyxfixturegroup\.xml$/i
	},
	$dropper = document.querySelector('#FixtureRequest'),
	$dropperText = document.querySelector('#FixtureRequest span'),
	$Container = document.querySelector('div.form>div:last-child'),
	$LineSearch = document.querySelector('.linesearch');

$dropper.addEventListener('dragover', function (e) {
	e.preventDefault();
});
$dropper.addEventListener('dragenter', function () {
	$dropper.classList.add('DragEnter');
});
$dropper.addEventListener('dragleave', function () {
	$dropper.classList.remove('DragEnter');
});

$dropper.addEventListener('drop', function (e) {
	e.preventDefault();
	$dropper.classList.remove('DragEnter');
	var files = e.dataTransfer.files,
		FileUpload = files[0],
		ErrorMessage = [];
	if (files.length > 1) {
		ErrorMessage.push($Message.Only1XmlAtOnce);
	}
	if (FileUpload.type != 'text/xml') {
		ErrorMessage.push($Message.OnlyXmlFileAllowed);
	}
	if (FileUpload.name.search($Regex.Patch) == -1 && FileUpload.name.search($Regex.Group) == -1) {
		ErrorMessage.push($Message.OnlyThisXmlNameAllowed);
	}
	if (ErrorMessage.length > 0) {
		$dropperText.innerHTML = ErrorMessage.join('<br />');
	} else {
		$dropper.classList.add('DropGood');
		var reader = new FileReader(),
			parser = new DOMParser(),
			xmlDoc;
		reader.addEventListener('load', function (e) {
			xmlDoc = parser.parseFromString(e.target.result, 'text/xml');
			$dropperText.innerHTML = $Message.Action.WiP;
			if (FileUpload.name.search($Regex.Patch) != -1) {
				$Patch.Parse.XML(xmlDoc);
				$Run.Patch();
			}
			if (FileUpload.name.search($Regex.Group) != -1) {
				$Patch.Parse.XML(xmlDoc);
				$Run.Patch();
			}
			reader = false;
			files = false;
			xmlDoc = false;
		});
		reader.readAsText(FileUpload);
	}
}, false);

var $Page = {
	Set: {
		SubTitle: function (v) {
			$LineSearch.innerHTML = v;
			return $Page;
		},
		Content: function (v) {
			$Container.innerHTML = v;
			return $Page;
		},
		HeadOnClick: function () {
			var $Table = document.getElementsByTagName('table')[0],
				$TableHead = document.getElementsByTagName('th');

			for (var i = 0; i < $TableHead.length; i++) {
				$TableHead[i].addEventListener('click', function () {
					var parent_element = this.parentNode,
						rowId = Array.prototype.indexOf.call(parent_element.children, this);
					$Page.Set.sortTable($Table, rowId);
				}, false);
			}
		},
		sortTable: function ($table, rowId) {
			var rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
			switching = true;
			dir = 'asc';
			while (switching) {
				switching = false;
				rows = $table.rows;
				for (i = 1; i < (rows.length - 1); i++) {
					shouldSwitch = false;
					x = rows[i].getElementsByTagName('td')[rowId];
					y = rows[i + 1].getElementsByTagName('td')[rowId];
					if (isNaN(x.innerHTML)) {
						if (dir == 'asc') {
							if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
								shouldSwitch = true;
								break;
							}
						} else if (dir == 'desc') {
							if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
								shouldSwitch = true;
								break;
							}
						}
					} else {
						if (dir == 'asc') {
							if (Number(x.innerHTML) > Number(y.innerHTML)) {
								shouldSwitch = true;
								break;
							}
						} else if (dir == 'desc') {
							if (Number(x.innerHTML) < Number(y.innerHTML)) {
								shouldSwitch = true;
								break;
							}
						}
					}
				}
				if (shouldSwitch) {
					rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
					switching = true;
					switchcount++;
				} else {
					if (switchcount == 0 && dir == 'asc') {
						dir = 'desc';
						switching = true;
					}
				}
			}
		}
	}
},
	$Patch = {
		Show: {
			Name: false,
			Build: false,
			FixturesCount: 0
		},
		Content: {
			Header: false,
			Description: false,
			Table: false
		},
		Fixtures: {
		},
		Display: function () {
			$Page.Set.SubTitle($Patch.Content.Header).Set.Content($Patch.Content.Table);
		},
		Set: {
			Content: function () {
				if (!$Patch.Show.Name || $Patch.Fixtures.length == 0) {
					return false;
				} else {
					var $Content = {
						thead: '<tr>' + "\n"
							+ '<th>ID</th>' + "\n"
							+ '<th>Name</th>' + "\n"
							+ '<th>Manufacturer</th>' + "\n"
							+ '<th>Model</th>' + "\n"
							+ '<th>Personality</th>' + "\n"
							+ '<th>Universe</th>' + "\n"
							+ '<th>Address</th>' + "\n"
							+ '<th>Invert</th>' + "\n"
							+ '</tr>',
						tbody: []
					};
					for (var Fixture in $Patch.Fixtures) {
						if ($Patch.Fixtures.hasOwnProperty(Fixture)) {
							$Content.tbody.push('<tr>' + "\n"
								+ '<td class="number">' + $Patch.Fixtures[Fixture].ID + '</td>' + "\n"
								+ '<td>' + $Patch.Fixtures[Fixture].Name + '</td>' + "\n"
								+ '<td><a target="_blank" href="' + (($Options.Online) ? '.' : $Settings.WebSite) + '/#SearchMode=live&amp;DisplayMode=1&amp;Manufacturer=' + encodeURIComponent($Patch.Fixtures[Fixture].Manufacturer) + '" />' + $Patch.Fixtures[Fixture].Manufacturer + '</a></td>' + "\n"
								+ '<td><a pop href="' + (($Options.Online) ? '.' : $Settings.WebSite) + $Settings.WebSiteFixture + '/' + encodeURIComponent($Patch.Fixtures[Fixture].Manufacturer) + '/' + encodeURIComponent($Patch.Fixtures[Fixture].Model) + '" />' + $Patch.Fixtures[Fixture].Model + '</a></td>' + "\n"
								+ '<td>' + $Patch.Fixtures[Fixture].Mode + '</td>' + "\n"
								+ '<td class="number">' + $Patch.Fixtures[Fixture].Universe + '</td>' + "\n"
								+ '<td class="number">' + $Patch.Fixtures[Fixture].Address + '</td>' + "\n"
								+ '<td>' + $Patch.Fixtures[Fixture].Invert + '</td>' + "\n"
								+ '</tr>');
						}
					}
					$Patch.Content.Header = 'Onyx patch summary for "' + $Patch.Show.Name + '" <em>(software build ' + $Patch.Show.Build + ')</em>';
					$Patch.Content.Description = 'Patch summary: ' + $Patch.Show.Name + ' <em>(' + $Patch.Show.FixturesCount + ' fixture' + (($Patch.Show.FixturesCount > 1) ? 's' : '') + ')</em>';
					$Patch.Content.Table = '<table class="patch">' + "\n"
						+ '<thead>' + "\n"
						+ $Content.thead + "\n"
						+ '</thead>' + "\n"
						+ '<tbody>' + "\n"
						+ $Content.tbody.join("\n") + "\n"
						+ '</tbody>' + "\n"
						+ '</table>';
					return $Patch;
				}
			}
		},
		Parse: {
			XML: function ($Xml) {
				//Set XML Getter
				var $General = $Xml.getElementsByTagName('Fixtures')[0],
					$Fixtures = $General.getElementsByTagName('Fixture');

				//Get and Set Show properties
				$Patch.Show.Name = $General.getAttribute('showName');
				$Patch.Show.Build = $General.getAttribute('showBuild');
				$Patch.Show.FixturesCount = $General.childElementCount;

				for (var i = 0; i < $Fixtures.length; i++) {
					if ($Fixtures.hasOwnProperty(i)) {
						var $Fixture = {
							ID: $Fixtures[i].getAttribute('nr'),
							Name: (($Fixtures[i].getAttribute('name') != null) ? $Fixtures[i].getAttribute('name') : ''),
							Manufacturer: $Fixtures[i].getAttribute('manufacturer'),
							Model: $Fixtures[i].getAttribute('model'),
							Mode: $Fixtures[i].getAttribute('displayName').replace($Fixtures[i].getAttribute('model'), ''),
							Universe: '',
							Address: '',
							Invert: ''
						},
							$DMXInfos = $Fixtures[i].getElementsByTagName('DMXChannel')[0];
						if (typeof $DMXInfos !== 'undefined') {
							if ($Options.InvertIcon) {
								if ($DMXInfos.getAttribute('panTiltSwapped') == 1) {
									$Fixture.Invert += '<span data-option="swap"><span>Swap</span></span>';
								}
								if ($DMXInfos.getAttribute('panInverted') == -1) {
									$Fixture.Invert += '<span data-option="pan"><span>Pan</span></span>';
								}
								if ($DMXInfos.getAttribute('tiltInverted') == -1) {
									$Fixture.Invert += '<span data-option="tilt"><span>Tilt</span></span>';
								}
							} else {
								if ($DMXInfos.getAttribute('panInverted') == -1) {
									$Fixture.Invert += '<abbr title="Pan inverted">P</abbr>';
								}
								if ($DMXInfos.getAttribute('tiltInverted') == -1) {
									$Fixture.Invert += '<abbr title="Tilt inverted">T</abbr>';
								}
								if ($DMXInfos.getAttribute('panTiltSwapped') == 1) {
									$Fixture.Invert += '<abbr title="Pan/Tilt swapped">S</abbr>';
								}
							}
							$Fixture.Universe = $DMXInfos.getAttribute('universe');
							$Fixture.Address = $DMXInfos.getAttribute('startAddress');
						}
						$Patch.Fixtures[$Fixture.ID] = $Fixture;
					}
				}
			}
		}
	},
	$Run = {
		Patch: function () {
			$Patch.Set.Content().Display();
		}
	};