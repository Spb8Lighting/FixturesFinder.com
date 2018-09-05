$(document).ready(function() {
	$('a[href^="http://"]').prop('target', '_blank');
	$('a[href^="https://"]').prop('target', '_blank');
	var _Debug_ = false, $Datas = false;
	function Debug(v, type=false){
		if(_Debug_) {
			switch(type){
				case 'group':
					console.groupCollapsed(v);
					break;
				case 'groupend':
					console.groupEnd();
					break;
				case 'info':
					console.info(v);
					break;
				case 'warning':
					console.warn(v);
					break;
				case 'error':
					console.error(v);
					break;
				case 'time':
					console.time('AJAX Time answer');
					break;
				case 'timeend':
					console.timeEnd(v);
					break;
				default:
					console.log(v);
				break;
			}
		}
	}
	$.unserialize = function(serializedString){
		var str = decodeURIComponent(serializedString.replace(/\+/gmi, ' ')),
		pairs = str.split('&'),
		obj = {}, p, idx;
		for (var i=0, n=pairs.length; i < n; i++) {
			p = pairs[i].split('=');
			idx = p[0]; 
			if (obj[idx] === undefined) {
				obj[idx] = unescape(p[1]);
			}else{
				if (typeof obj[idx] == "string") {
					obj[idx]=[obj[idx]];
				}
				obj[idx].push(unescape(p[1]));
			}
		}
		return obj;
	};
	if(window.location.hash) {
		$Datas = $.unserialize(window.location.hash.substr(1));
		if($Datas['<?php echo _DEBUG_; ?>']) {
			_Debug_ = true;
			Debug('Debug mode detected', 'log');
		}
		Debug([$Datas], 'info');	
	}
	if(window.location != window.parent.location) {
		Debug('Iframe detected, add class iFrame to HTML', 'log');
			$('html').addClass('iframe');
	}
	var $Body = $('body'),
	$Title = $('title'),
	$Reset = $('#Reset'),
	$HomeLink = $('h1>a'),
	$QuickSearchLink = $('h1>span:first-child>a'),
	$QuickSearchBOX = $('#quicksearch'),
	$SettingsLink = $('#settings a'),
	$SettingsBox = $('#Preferences'),
	$SettingsBoxLink = $('a[href="#Preferences"]'),
	$Line = $('.linesearch'),
	$Form = $('form'),
	<?php echo _Channels_; ?>         = $('#<?php echo _Channels_; ?>'),
	<?php echo _Preferences_; ?>         = $('#<?php echo _Preferences_; ?>'),
	<?php echo _MaxChannels_; ?>		= $('#<?php echo _MaxChannels_; ?>'),
	countermaxchannel		= $('#countermaxchannel'),
    PlusButton      = $('#bp'),
	LessButton      = $('#bl'),
	PlusPlusButton  = $('#bpp'),
	LessLessButton  = $('#bll'),
	Count      = $('#count'),
	DropDownDefault = <?php echo $DMXChartManager->SelectParameters(_DefaultNbParameters_); ?>,
	DropDown = DropDownDefault,
	DropDownFull = <?php echo $DMXChartManager->SelectParameters(); ?>,
	x = 1,
	y = 0,
	RegexWheel = /^(color|gobo|animation) ?([0-9]{1,2})?$/i,
	Wheel = {
		'color' 	: 0,
		'gobo'		: 0,
		'animation'	: 0
	},
	timer,
	timer2,
	ActualLink = window.location.pathname,
	DefaultSelect2 = 'span[id^="select2-SPB8-"]',
	DefaultSelect = '<div id="chSPB8" data-option="">'+
	"\t"+'<div class="label">#SPB8<span>Channel type</span></div>'+
	"\t\t"+'<div><select data-default="<?php echo strtolower(_ValAny_); ?>" autocomplete="off" name="chSPB8">'+
	"\t\t"+'</select></div>'+
	"\t"+'</div>';
	$Body.append('<div id="NavButtons"><a class="img" href="#ToTop" title="Go to top">▲</a><a class="img" href="#ToBottom" title="Go to bottom">▼</a></div>');
	$.Wait = function(ms) {
		var defer = $.Deferred();
		setTimeout(function() {
			defer.resolve();
		}, ms);
		return defer;
	};
	$.fn.WheelCount = function(wait=0) {
		Debug('Function Wheelount(wait, count)', 'group');
		count = this.val();
		if(count == 0) {
			count = '<?php echo _ValAny_; ?>';
		}
		Debug([wait, count], 'warn');
			this.val(TwoDigit(count)).addClass('active');
			clearTimeout(timer);
		Debug('Timer cleared', 'info');
			timer = setTimeout(function (event) {
				Debug('Function WheelCount(wait, count) Timer raised with '+wait, 'info');
				TrigChange();
				Debug('', 'groupend');
			}, wait);
		return this;
	};
	$.fn.DMXCount = function(wait, count) {
		Debug('Function DMXCount(wait, count)', 'group');
		Debug([wait, count], 'warn');
			this.val(TriDigit(count)).addClass('active');
			clearTimeout(timer);
		Debug('Timer cleared', 'info');
			timer = setTimeout(function (event) {
				Debug('Function DMXCount(wait, count) Timer raised with '+wait, 'info');
				TrigChange();
				Debug('', 'groupend');
			}, wait);
		return this;
	};
	$.fn.AddSelect = function(ChRef) {
		Debug('Function AddSelect(ChRef)', 'group');
		Debug([ChRef], 'warn');
			var Html = DefaultSelect.replace(/SPB8/gm, ChRef);	
			Debug('Add new Select channel type', 'info');
				this.append(Html);
			Debug('Add autocomplete to this new Select', 'info');
				$('select[name="ch'+ChRef+'"]').select2({data: DropDown, templateResult: formatState});
				RemoveAutoFocus();
		Debug('', 'groupend');
	  return this;
	};
	$.fn.RemoveSelect = function(ChRef) {
		Debug('Function RemoveSelect(ChRef)', 'group');
		Debug([ChRef], 'warn');
		var ToBeUnloaded = this.find('select[name="ch'+ChRef+'"]');
			Debug('Unload Autocomplete from select to be removed', 'info');
				ToBeUnloaded.select2('destroy');
			Debug('Remove row containing select', 'info');
				$('#<?php echo _Channel_; ?>'+ChRef).remove();
		Debug('', 'groupend');
	  return this;
	};
	$.fn.CheckValueSelect = function() {
		Debug('Function CheckValueSelect()', 'group');
			var $this = this,
			$Parent = $this.parents('div').eq(1);
			if(!!$this.val()) {
				var $Val = $this.val().toLowerCase(),
				$Name = $this.prop('name'),
				$Text = $this.find('option:selected').text(),
				$Default = $this.attr('data-default').toLowerCase(),
				NewSelector = DefaultSelect2.replace(/SPB8/gm, $Name),
				ColorToChange = $(NewSelector).parent('span'),
				$DivParent = $this.parent('div');
				Debug([$Text, $Name, NewSelector, ColorToChange], 'info');
				if($Text) {
					$Parent.attr('data-option', $Text.toLowerCase());
				}
				$DivParent.find('.select2.select2-container.select2-container--default').attr('style', 'width:100%;');
				if($Val != $Default){
					Debug('ADD Background', 'info');
					ColorToChange.addClass('otherthanany').attr('data-background', $Text.toLowerCase());
				} else {
					Debug('REMOVE Background', 'info');
					ColorToChange.removeClass('otherthanany');
				}
				if($DivParent.hasClass('TwoColumns') && !$this.hasClass('BlockButton')) {
					Debug('Wheel Field removed', 'info');
					$DivParent.removeClass('TwoColumns');
					$DivParent.find('.BlockButton').remove();
				}
				if(RegexWheel.test($Val)) {
					Debug('Wheel Field added', 'group');
						var WheelInfo = $Val.match(RegexWheel);
						if(!WheelInfo[2]) {
							WheelInfo[2] = 1;
						}
						Debug('Wheel '+WheelInfo[1]+' n°'+WheelInfo[2], 'info');
						$DivParent.find('.BlockButton').remove();
						$DivParent.addClass('TwoColumns').append('<input type="tel" class="BlockButton" name="'+WheelInfo[1]+'slots'+(WheelInfo[2])+'" data-default="<?php echo _ValAny_; ?>" value="<?php echo _ValAny_; ?>"/>').find('.select2.select2-container.select2-container--default').attr('style', 'width:70%;');
					Debug('', 'groupend');
				}
			} else {
				$Parent.attr('data-option', '');
			}
		Debug('', 'groupend');
	  return this;
	};
	function BlurAll() {
		Debug('Function BlurAll()', 'group');
			Debug('Add CSS class LOADER to Body', 'infos');
				$Body.addClass('loader');
			//$Form.addClass('focus');
			Debug('Set all input, select and button readonly attribute. Then set focus out', 'infos');
				$Form.find('input, select, button').prop('readonly', true).blur();
		Debug('', 'groupend');
	}
	function UnBlurAll() {
		Debug('Function UnBlurAll()', 'group');
			Debug('Remove CSS class LOADER from Body', 'infos');
				$Body.removeClass('loader');
			//$Form.removeClass('focus');
			Debug('Remove readonly attributes from all input, select and button readonly', 'infos');
				$Form.find('input, select, button').prop('readonly', false);
		Debug('', 'groupend');
		}
	function TrigChange() {
		Debug('Function TrigChange()', 'group');
			BlurAll();
			Debug('Remove class Active from DMX n° of Channel', 'info');
				Count.removeClass('active');
			Debug('Remove class Active from MAX DMX Channel', 'info');
				<?php echo _MaxChannels_; ?>.removeClass('active');
			Debug('Remove class Active from Wheel Channel', 'info');
				$Body.find('.BlockButton').removeClass('active');
			Debug('Trigger CHANGE to select', 'infos');
				$(<?php echo _Channels_; ?>).find('select').eq(0).trigger('change');
		Debug('', 'groupend');
		}
	function TriDigit(val) {
		Debug('Function TriDigit(val)', 'group');
		Debug([val], 'warn');
			var v = val;
			while((v+'').length < 3) {
				Debug('Add a 0 to number '+val, 'info');
				v = '0'+v;
				}
			Debug('Return '+val+' > '+v, 'info');
		Debug('', 'groupend');
		return v;
		}
	function TwoDigit(val) {
		Debug('Function TwoDigit(val)', 'group');
		Debug([val], 'warn');
			var v = val;
			if(v != '<?php echo _ValAny_; ?>') {
				while((v+'').length < 2) {
					Debug('Add a 0 to number '+val, 'info');
					v = '0'+v;
					}
				Debug('Return '+val+' > '+v, 'info');
			}
		Debug('', 'groupend');
		return v;
		}
	function DirectDMX() {
		Debug('Function DirectDMX()', 'group');
			BlurAll();
			var DMXChannelVal = parseInt(Count.val().trim());
			Debug(['DMX n° of Channel, Filtered Value', Count.val(), DMXChannelVal], 'info');
			if(DMXChannelVal == 0) {
				Debug('Requested DMX n° of Channel is 0, reset the first select to <?php echo _ValAny_; ?> and set DMX n° of Channel to 1', 'info');
				$('select[name="ch1"]').val('<?php echo strtolower(_ValAny_); ?>').trigger('change.select2');
				DMXChannelVal = 1;
			}
			if(DMXChannelVal > 0 && DMXChannelVal <= 512) {
				Debug('Requested 512 < DMX n° of Channel > 0', 'info');
				if(x > DMXChannelVal) {
					Debug('Previous DMX n° of Channel count > entered value', 'info');
					for(var i=DMXChannelVal+1; i<=x; i++) {
						<?php echo _Channels_; ?>.RemoveSelect(i);
					}
				}
				if(DMXChannelVal > x) {
					Debug('Entered value > DMX n° of Channel count ', 'info');
					for(var i=x+1; i<=DMXChannelVal; i++) {
						<?php echo _Channels_; ?>.AddSelect(i);
					}
				}
				Debug('Set DMX n° of Channel count to '+x, 'info');
				x = DMXChannelVal;
				}
			Count.DMXCount(50, x);
		Debug('', 'groupend');
		}
	function DirectDMX2() {
		Debug('Function DirectDMX2()', 'group');
			BlurAll();
			var DMXChannelVal = parseInt(<?php echo _MaxChannels_; ?>.val().trim());
			Debug(['MAX DMX, Filtered Value', <?php echo _MaxChannels_; ?>.val(), DMXChannelVal], 'info');
			if(DMXChannelVal >= 0 && DMXChannelVal <= 512) {
				Debug('Requested 512 <= DMX n° of Channel >= 0', 'info');
					y = DMXChannelVal;
				Debug('Set MAX DMX count to '+y, 'info');
				}
			<?php echo _MaxChannels_; ?>.DMXCount(50, y);
		Debug('', 'groupend');
		}
	function ChangeDropDown(DropDown) {
		BlurAll();
		$Datas = $.unserialize($('form').serialize());
		<?php echo _Channels_; ?>.find('select[name^="ch"]').empty().select2({data: DropDown});
		HashUsed(true);
		UnBlurAll();
	}
	function QuickAction() {
		if($Datas) {
			var NbChannelToAdd = Object.keys($Datas).length - 1,
			NbActualChannel = Number(Count.val());
			if(NbChannelToAdd > 0) {
				if($('select[name="ch'+NbActualChannel+'"]').val() == '<?php echo strtolower(_ValAny_); ?>') {
					NbActualChannel = NbActualChannel -1;
				}
				Count.val(NbActualChannel + NbChannelToAdd).trigger('change');
				$.each($Datas, function(index, value){
					index = Number(index);
					if(Number.isInteger(index)) {
						value = value.toLowerCase();
						$('select[name="ch'+(NbActualChannel + index)+'"]').val(value).trigger('change.select2').CheckValueSelect();
					}
					
				});
			}
		$Datas = false;
		}
	}
	function HashUsed(direct) {
		if($Datas) {
			$.each($Datas, function(index, value){
				value = value.toLowerCase();
				if(index.toLowerCase() != '<?php echo _DEBUG_; ?>') {
					switch(index.toLowerCase()) {
						case '<?php echo strtolower(_MaxChannels_); ?>':
							$('*[name="'+index+'"]').val(value);
							Debug('Only change value', 'info');
							break;
						case '<?php echo strtolower(_SearchMode_); ?>':
						case 'count':
						case '<?php echo strtolower(_FullParam_); ?>':
							if(!direct) {
								$('*[name="'+index+'"]').val(value).trigger('change');
								Debug('Trigger real change', 'info');
							} else {
								$('*[name="'+index+'"]').val(value).trigger('change.select2');
							}
							break;
						default:
							$('*[name="'+index+'"]').val(value).trigger('change.select2').CheckValueSelect();
							Debug('Trigger false change for autocomplete & Activate Highlight selection', 'info');
							break;
					}
					Debug([index, value], 'warn');
				} else if(index.toLowerCase() == '<?php echo _DEBUG_; ?>') {
					$('form').append('<input type="hidden" name="debug" value="debug" />');
				}
			});
			TrigChange();
			if(!$Datas['<?php echo _DEBUG_; ?>']) {
				window.history.pushState(null, document.title, window.location.pathname);
			}
		$Datas = false;
		}
	}
	Debug('Initialisation', 'group');
		Debug('Fancybox for Pop-in', 'info');
			$('body').on('click', 'a[pop]', function(e) {
				e.preventDefault();
				var Link = $(this).attr('href'),
				Title = $(this).text(),
				OriginTitle = document.title;
				$.fancybox.open({
					opts: {
						smallBtn : true,
						touch: false,
						buttons : [],
						ajax : {
							settings : {
								method: 'POST',
								data : {
									<?php echo _GetPage_; ?> : true,
									fancybox : false
								}
							}

						},
						afterLoad: function(i,c) {
							$Title.text(Title);
							history.pushState({url : Link, title : Title}, Title, Link);
						},
						beforeClose: function(i,c) {
							$Title.text(OriginTitle);
							history.back();
						}
					},
					src  : Link,
					type : 'ajax'
				});
			});
			$('body').on('click', 'a[pop-iframe]', function(e) {
				e.preventDefault();
				$.fancybox.open({
					smallBtn : true,
					touch: false,
					buttons : [],
					src  : $(this).attr('href'),
					type : 'iframe'
				});
			});
			
	function formatState(s) {
		if (!s.id) {
			return s.text;
		}
		return $('<span data-option="'+s.element.value.toLowerCase()+'">'+s.text+'</span>');
	}
	
		Debug('Select2 for autocomplete SELECT', 'info');
			$.fn.select2.defaults.set('width', '100%');
		Debug('Add the first select to the page', 'info');
			<?php echo _Channels_; ?>.AddSelect(1);
		Debug('Hide the MAX Channel row', 'info');
			countermaxchannel.hide();
		Debug('Add AutoComplete to <?php echo _Preferences_; ?> without search', 'info');
			<?php echo _Preferences_; ?>.find('select').select2({minimumResultsForSearch: Infinity});
		Debug('Add AutoComplete to <?php echo _Channels_; ?> with reduced search', 'info');
			<?php echo _Channels_; ?>.find('select[name^="ch"]').select2({data: DropDown, templateResult: formatState});
			RemoveAutoFocus();
			<?php echo _Channels_; ?>.find('select[name="<?php echo _Manufacturer_; ?>"]').select2();
			<?php echo _Channels_; ?>.find('select[name="<?php echo _FixtureName_; ?>"]').select2();
	Debug('', 'groupend');
		
	function RemoveAutoFocus() {
		$('select').on('select2:open', function (e) {
			$('.select2-search input').prop('focus',false);
		});
	}
	 // Create reusable method
    function myConfirm( opts ) {
        $.fancybox.open(
             '<div class="form dialog">' +
                    '<h2>' + opts.title + '</h2>' +
                    '<p>' + opts.message + '</p>' +
                    '<p>' +
                        '<a data-value="0" data-fancybox-close>Cancel</a> ' +
                        '<button data-value="1" data-fancybox-close class="btn">Yes</button>' +
                    '</p>' +
             '</div>', {
                 smallBtn   : false,
                 buttons    : false,
                 keyboard   : false,
                 afterClose : function( instance, current, e ) {
                     var button = e ? e.target || e.currentTarget : null,
                     value  = button ? $(button).data('value') : 0;

                     opts.callback(value);
                 }
             }
        );
    }
	if(window.location.pathname == '/') {
		$HomeLink.click(function(e) {
			e.preventDefault();
			var URI = $(this).attr('href');
			myConfirm({
				title    : 'Are you sure?',
				message  : 'Do you want to loose your search and refresh this page?',
				callback : function (value) {
					if (value) {
					   window.location = URI;
					} else {
						return false;
					}
				}
			});
		});
	}
	//DMX Input down
    $(PlusButton).click(function(e){
		Debug('CLICK + button of DMX Channel n°', 'group');
			e.preventDefault();
			if(x <= 512){
				x++;
				<?php echo _Channels_; ?>.AddSelect(x);
				Count.DMXCount(700, x);
			}
		Debug('', 'groupend');
    });
	$(PlusPlusButton).click(function(e){
		Debug('CLICK + button of Max DMX', 'group');
			e.preventDefault();
			if(y <= 512){
				y++;
				<?php echo _MaxChannels_; ?>.DMXCount(700, y);
			}
		Debug('', 'groupend');
    });
	//DMX Input up
	$(LessButton).click(function(e){
		Debug('CLICK - button of DMX Channel n°', 'group');
			e.preventDefault();
			if(x > 1){
				<?php echo _Channels_; ?>.RemoveSelect(x);
				x--;
				Count.DMXCount(700, x);
			}
    });
	$(LessLessButton).click(function(e){
		Debug('CLICK  - button of Max DMX', 'group');
			e.preventDefault();
			if(y > 0){
				y--;
				<?php echo _MaxChannels_; ?>.DMXCount(700, y);
			}
		Debug('', 'groupend');
    });
	$Reset.click(function(e){
		Debug('RESET Channel type to default', 'group');
			e.preventDefault();
			$(<?php echo _Channels_; ?>).find('select').each(function() {
				$(this).val('<?php echo strtolower(_ValAny_); ?>').trigger('change.select2').CheckValueSelect();
			});
			Wheel = {
				'color' 	: 0,
				'gobo'		: 0,
				'animation'	: 0
			};
			TrigChange();
		Debug('', 'groupend');
	});
    Count.click(function(){
		Debug('CLICK DMX Channel n°', 'group');
			Debug('Select the complete input value', 'info');
			$(this).select();
		Debug('', 'groupend');
	});
	//Display the fixture changelog
	$Body.on('click', 'a[href="#<?php echo _ChangelogLink_; ?>"]', function(e){
		Debug('Changelog Link Clicked', 'group');
			e.preventDefault();
			var $DisplayChangelog = $('#<?php echo _ChangelogLink_; ?>');
			if($DisplayChangelog.is(':visible')) {
				$DisplayChangelog.slideUp(250);
			} else {
				$DisplayChangelog.slideDown(250);
			}
		Debug('', 'groupend');
	});
	$Body.on('click', 'a[href="#<?php echo _CollapseLink_; ?>"], a[href="#<?php echo _ExpandLink_; ?>"]', function(e){
		Debug('Fixture Detail View Clicked', 'group');
			e.preventDefault();
			var $FixtureDetails = $('.form.FixtureDetail'),
			$This = $(this),
			$ThisHref = $This.attr('href').substr(1);
			// Hide the icon and link just clicked
				$This.parent('h3').hide();
			//Following the link clicked, do the right actions
				switch($ThisHref) {
					case '<?php echo _ExpandLink_; ?>':
						Debug('Expand infos', 'info');
						$('a[href="#<?php echo _CollapseLink_; ?>"]').parent('h3').css('display', 'initial');
						$FixtureDetails.addClass('extended');
						break;
					case '<?php echo _CollapseLink_; ?>':
						Debug('Collapse infos', 'info');
						$('a[href="#<?php echo _ExpandLink_; ?>"]').parent('h3').css('display', 'initial');
						$FixtureDetails.removeClass('extended');
						break;
				}
		Debug('', 'groupend');
	});
	//Display QuickSearch box
	$QuickSearchLink.addClass('HighLight');
	$QuickSearchBOX.slideDown(250);
		$.Wait(250).then(function() {
			$QuickSearchLink.removeClass('HighLight');
			$QuickSearchBOX.slideUp(250);
		});
	// Menu box
	$('.showbox').on('click', 'a', function(e){
		Debug('Panel Displayed', 'group');
			e.preventDefault();
			var $This = $(this),
			$Href = $This.attr('href'),
			$Target = $($Href);
			$('.showbox a').removeClass('HighLight');
			if($Target.is(':visible')) {
				$Target.slideUp(250);
				$Body.removeClass('SetOpacity');
				$Target.blur();
			} else {
				ScrollToTop();
				$('.DispBox').slideUp(250);
				$Target.slideDown(250);
				$This.addClass('HighLight');
				$Body.addClass('SetOpacity');
			}
		Debug('', 'groupend');
	});
	// Outside click hide Menu Box
	$('h1, #Channels, #Fixtures, form>div:nth-child(2)').click(function(e) {
		if($(e.target).parent('a').parent('span').prop('class') != 'showbox' && $('.DispBox').is(':visible')) {
			$('.DispBox').slideUp(250);
			$('.showbox a').removeClass('HighLight');
			$Body.removeClass('SetOpacity');
		}
	});
	
	//Scroll Shortcut
	var NavTimeOut;
	$(window).scroll(function() {
		clearTimeout(NavTimeOut);
		if($(this).scrollTop() > 70 && $(this).scrollTop() < (document.body.scrollHeight - 10)) {
			$('#NavButtons').fadeIn(250);
			NavTimeOut = setTimeout(function(){ $('#NavButtons').fadeOut(250); }, 2000);
		} else {
			$('#NavButtons').fadeOut(250);
		}
	});
	$('#NavButtons').on('click', 'a', function(e) {
		e.preventDefault();
		var $Href = $(this).attr('href');
		if($Href == '#ToTop') {
			ScrollToTop();
		} else {
			ScrollToBottom();
		}
	});
	function ScrollToTop() {
		$('html, body').animate({scrollTop: 0}, 250);
	}
	function ScrollToBottom() {
		$('html, body').animate({scrollTop: document.body.scrollHeight}, 250);
	}
	//QuickSearch Link hit
	$QuickSearchBOX.find('a').click(function(e){
		Debug('QuickSearch link clicked', 'group');
			e.preventDefault();
			$QuickSearchLink.removeClass('HighLight');
			$QuickSearchBOX.slideUp(250);
			$Body.removeClass('SetOpacity');
			var $Href = $(this).attr('href').substr(1);
			$Datas = $.unserialize($Href);
			switch($Href.substring(0,6).toLowerCase()) {
				case 'action':
					QuickAction();
					break;
				default:
					$Datas = $.unserialize($(this).attr('href').substr(1));
					HashUsed(false);
					break;
			}
		Debug('', 'groupend');
	});
	<?php echo _MaxChannels_; ?>.click(function(){
		Debug('CLICK Max DMX', 'group');
			Debug('Select the complete input value', 'info');
			$(this).select();
		Debug('', 'groupend');
	});
	$Body.on('click', '.BlockButton', function(){
		Debug('CLICK Wheel number', 'group');
			Debug('Select the complete input value', 'info');
			$(this).select();
		Debug('', 'groupend');
	});
	$Body.on('change', '.BlockButton', function(){
		Debug('Change Wheel number', 'group');
			$(this).WheelCount();
		Debug('', 'groupend');
	});
	//Detect change on the number of DMX input
	Count.on('change', function() {
		Debug('CHANGE of DMX Channel n°', 'group');
			DirectDMX();
		Debug('', 'groupend');
	});
	<?php echo _MaxChannels_; ?>.on('change', function() {
		Debug('CHANGE of Max DMX', 'group');
			DirectDMX2();
		Debug('', 'groupend');
	});
	//Detect Preferences changed
	$(<?php echo _Preferences_; ?>).on('change','select', function() {
		Debug('CHANGE of Preference', 'group');
			var $This = $(this),
			CheckValue = $This.val(),
			$ThisID = $This.prop('id');
			$This.CheckValueSelect();
			if($ThisID == '<?php echo _SearchMode_; ?>') {
				Debug('CHANGE of Search Mode', 'info');
				Debug([CheckValue], 'warn');
				if(CheckValue == '<?php echo strtolower(_Search_Exact_); ?>' || CheckValue == '<?php echo strtolower(_Search_Exact_Live_); ?>') {
					Debug('HIDE Max DMX', 'info');
					countermaxchannel.slideUp(250);
				} else {
					Debug('SHOW Max DMX', 'info');
					countermaxchannel.slideDown(250);
				}
				//If Search function change, set the notification icon
				if(CheckValue != '<?php echo strtolower(_Search_Exact_); ?>') {
					$SettingsBoxLink.addClass('notif');
				} else {
					$SettingsBoxLink.removeClass('notif');
				}
			}
			if($ThisID == '<?php echo _FullParam_; ?>') {
				Debug('CHANGE of Channel Type List', 'info');
				if(CheckValue == 0) {
					Debug('Set AutoComplete list to Restricted choice', 'info');
					if(DropDown != DropDownDefault) {
						DropDown = DropDownDefault;
						ChangeDropDown(DropDownDefault);
					}
				} else {
					Debug('Set AutoComplete list to Full choice', 'info');
					if(DropDown != DropDownFull) {
						DropDown = DropDownFull;
						ChangeDropDown(DropDownFull);
					}
				}
			} else {
				TrigChange();
			}
		Debug('', 'groupend');
	});	
	//Detect Channel changed
	$(<?php echo _Channels_; ?>).on('change','select', function(data){
		Debug('SEARCH for FIXTURES Matching New settings', 'group');
			var $This = $(this),
			$ThisID = $This.prop('id'),
			$ThisVAL = $(this).val();
			$This.CheckValueSelect();
			BlurAll();
			// Automatic adjustment for fixture search
			if($ThisID == '<?php echo _FixtureName_; ?>') {
				Debug('CHANGE of Fixture Name', 'info');
				if($ThisVAL != '<?php echo _ValAny_; ?>' && $('#<?php echo _SearchMode_; ?>').val() == '<?php echo strtolower(_Search_Exact_); ?>') {
					$('#<?php echo _SearchMode_; ?>').val('<?php echo strtolower(_Search_Live_); ?>').trigger('change');
				} else {
					$('#<?php echo _SearchMode_; ?>').trigger('change');
				}
			} else {
				var Line = '',
				Search = $('#<?php echo _SearchMode_; ?> option:selected').text(),
				Manuf = $('#<?php echo _Manufacturer_; ?> option:selected').text(),
				FixtureName = $('#<?php echo _FixtureName_; ?> option:selected').text(),
				MDMX = <?php echo _MaxChannels_; ?>.val(),
				NDMX = $('#count').val(),
				FormData = $('form').serialize();
				Debug('Run the search', 'info');
				Debug([FormData], 'warn');
				Debug('AJAX Time answer', 'time');
				clearTimeout(timer2);
				Debug('Timer cleared', 'info');
				timer2 = setTimeout(function (event) {
					Debug('Function SEARCH for FIXTURES Matching New settings Timer raised with 50ms', 'info');
					$.post('<?php echo _AJAX_; ?>', FormData, function(data) {
						var Sentence = (data.<?php echo _NbFixtures_; ?> < <?php echo _MaxFixtureFound_; ?>) ? data.<?php echo _NbFixtures_; ?>+' fixture'+((data.<?php echo _NbFixtures_; ?>>1) ? 's' : '')+' profile found' : 'Please refine your search';
						$(<?php echo _Fixtures_; ?>).html('<h2>'+Sentence+'</h2>'+data.<?php echo _FixtureHtml_; ?>);
						Debug('AJAX Time answer', 'timeend');
						Debug('AJAX answer receive => SET and DEFINE Search feedback text', 'info');
						Debug([data], 'info');
						Debug('DEFINE Search feedback text', 'info');
						Line+= '<span><em>'+Search+'</em> search</span>';
						if(Manuf != '<?php echo _ValAny_; ?>' && FixtureName == '<?php echo _ValAny_; ?>') {
							Line+= ' <span>in <em>'+Manuf+'</em>\'s fixtures</span>';
						} else if(Manuf == '<?php echo _ValAny_; ?>' && FixtureName != '<?php echo _ValAny_; ?>') {
							Line+= ' <span>in <em>'+FixtureName+'</em></span>';
						} else if(Manuf != '<?php echo _ValAny_; ?>' && FixtureName != '<?php echo _ValAny_; ?>') {
							Line+= ' <span>in <em>'+Manuf+'</em>\'s '+FixtureName+'</span>';
						} else {
							Line+= ' <span>in <em>all fixtures</em></span>';
						}
						if(Search == '<?php echo _Search_Exact_; ?>' || Search == '<?php echo _Search_Exact_Live_; ?>') {
							Line+= ' <span>with <em>'+NDMX+'</em> Channels</span>';
						} else if(MDMX > 0) {
							Line+= ' <span>with a maximum of <em>'+MDMX+'</em> Channels</span>';
						}
						var LineNbOfFixture = '('+ ((data.<?php echo _NbFixtures_; ?> < <?php echo _MaxFixtureFound_; ?>) ? data.<?php echo _NbFixtures_; ?> : 'Refine your search' ) + ')',
						LineInText = $(Line).text() + ' ' + LineNbOfFixture;
						$Title.text(LineInText);
						ActualLink = '#'+$('form').serialize();
						history.pushState({url : ActualLink, title : LineInText}, LineInText, ActualLink);
						$Line.empty().append('<a href="'+ActualLink+'">'+Line+'</a> <span title="'+Sentence+'"><em>' + LineNbOfFixture + '</em></span>');
						UnBlurAll();
						Debug('', 'groupend');
					});
				}, 50);
			}
		return false;
	});
	
	window.onpopstate = function(e) {
		if(e.state == null) {
			$.fancybox.close();
		} else {
			$.fancybox.close();
			if($('div.fancybox-container').length == 2) {
				window.history.pushState({url : e.state.url, title : e.state.title}, e.state.title, e.state.url);
			} else {
				window.history.pushState(null, window.location.title, ActualLink);
			}
		}
	};
	
	if(window.location.hash) {
		Debug('RESTORE Previous session', 'group');
		HashUsed(false);
		Debug('', 'groupend');
	}
	
});