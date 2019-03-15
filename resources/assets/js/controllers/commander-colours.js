NKD.commander_colours = {

	palette : [
		["#010101","#222222","#333333","#555555","#777777","#eeeeee","#fefefe"], // grays
		["#9A2425","#B12A2A","#CA3230","#E43B35","#EA6551","#EF8B74","#F5B09B"], // red
		["#2E6D66","#3D8981","#48A29A","#51BBB0","#80C8BF","#A2D4CE","#C1E1DC"], // green
		["#090F12","#0F181C","#172226","#1E2D33","#465860","#70818A","#97A6AE"], // blue
		["#968737","#B3A141","#D1BE4F","#F2DD5D","#F4E37F","#F6E99F","#F8EFBD"] // yellow
	],

	init: function () {
		if ($('body[data-check="cms"]').length > 0) {
			NKD.debug('commander colours');
			NKD.commander_colours.createListeners();
		}
	},

	createListeners: function()
	{
		var self = this,
			$modules = $('.module');

		$modules.each(function(i)
		{
			var $module = $(this);

			NKD.commander_colours.textShade($module);
			NKD.commander_colours.linkColour($module);

			setTimeout(function() {
				NKD.commander_colours.backgroundColour($module);
				NKD.commander_colours.backgroundGradient($module);
				NKD.commander_colours.backgroundGradientAdvanced($module);
			}, (i * 200));
		});
	},

	textShade: function($module)
	{
		var $text_colour = $module.find('select[name=text_colour]'),
			$save_button = $module.find('.js-save-handle');

		// Text Shade / Tint
		$text_colour.off('change');
		$text_colour.on('change', function()
		{
			$module.removeClass(function(index, css) {
				return (css.match (/\btext-\S+/g) || []).join(' ');
			}).addClass(this.value);

			// set save button active.
			$save_button.addClass('active');
		});
	},

	linkColour: function($module)
	{
		var $link_colour = $module.find('select[name=link_colour]'),
			$save_button = $module.find('.js-save-handle');

		// Link Colour
		$link_colour.off('change');
		$link_colour.on('change', function()
		{
			$module.removeClass(function(index, css) {
				return (css.match (/\blink-\S+/g) || []).join(' ');
			}).addClass(this.value);

			// set save button active.
			$save_button.addClass('active');
		});
	},

	backgroundColour: function($module)
	{
		var $bg_colour = $module.find('input[name=bg_colour]'),
			$bg_gradient_top = $module.find('input[name=bg_gradient_top]'),
			$bg_gradient_bottom = $module.find('input[name=bg_gradient_bottom]'),
			$bg_gradient = $module.find('textarea[name=bg_gradient]'),
			$save_button = $module.find('.js-save-handle');

		// Solid Colour
		$bg_colour.spectrum({
			preferredFormat: "hex",
			allowEmpty:true,
			showInitial: true,
			showInput: true,
			showPaletteOnly: true,
			togglePaletteOnly: true,
			togglePaletteMoreText: 'More',
			togglePaletteLessText: 'Less',
			clickoutFiresChange: true,
			palette: NKD.commander_colours.palette,
			change: function(color)
			{
				if (color !== null) {
					$module.css('background', color.toHexString());
					$bg_gradient_top.spectrum('set', null);
					$bg_gradient_bottom.spectrum('set', null);
					$bg_gradient.val(null);
				} else {
					$module.css('background', '');
				}

				// set save button active.
				$save_button.addClass('active');
			}
		});
	},

	backgroundGradient: function($module)
	{
		var $bg_colour = $module.find('input[name=bg_colour]'),
			$bg_gradient_top = $module.find('input[name=bg_gradient_top]'),
			$bg_gradient_bottom = $module.find('input[name=bg_gradient_bottom]'),
			$bg_gradient = $module.find('textarea[name=bg_gradient]'),
			$save_button = $module.find('.js-save-handle');

		// Gradient Top
		$bg_gradient_top.spectrum({
			preferredFormat: "hex",
			allowEmpty:true,
			showInitial: true,
			showInput: true,
			showPaletteOnly: true,
			togglePaletteOnly: true,
			togglePaletteMoreText: 'More',
			togglePaletteLessText: 'Less',
			clickoutFiresChange: true,
			palette: NKD.commander_colours.palette,
			change: function(color)
			{
				if (color !== null && $bg_gradient_bottom.spectrum('get') !== null)
				{
					var top = color.toHexString(),
						bottom = $bg_gradient_bottom.spectrum('get').toHexString(),
						cssObj = {
							'background': [top,
								'-moz-linear-gradient(top, '+top+' 0%, '+bottom+' 100%)',
								'-webkit-gradient(linear, left top, left bottom, color-stop(0%,'+top+'), color-stop(100%,'+bottom+'))',
								'-webkit-linear-gradient(top, '+top+' 0%,'+bottom+' 100%)',
								'-o-linear-gradient(top, '+top+' 0%,'+bottom+' 100%)',
								'-ms-linear-gradient(top, '+top+' 0%,'+bottom+' 100%)',
								'linear-gradient(to bottom, '+top+' 0%,'+bottom+' 100%)'],
							'filter': 'progid:DXImageTransform.Microsoft.gradient( startColorstr="'+top+'", endColorstr="'+bottom+'",GradientType=0 )'
						};

					$bg_colour.spectrum('set', null);
					$bg_gradient.val(null);
					NKD.utilities.cssMap($module, cssObj);
				} else {
					$module.css('background', '');
				}

				// set save button active.
				$save_button.addClass('active');
			}
		});

		// Gradient Bottom
		$bg_gradient_bottom.spectrum({
			preferredFormat: "hex",
			allowEmpty:true,
			showInitial: true,
			showInput: true,
			showPaletteOnly: true,
			togglePaletteOnly: true,
			togglePaletteMoreText: 'More',
			togglePaletteLessText: 'Less',
			clickoutFiresChange: true,
			palette: NKD.commander_colours.palette,
			change: function(color)
			{
				if (color !== null && $bg_gradient_top.spectrum('get') !== null)
				{
					var top = $bg_gradient_top.spectrum('get').toHexString(),
						bottom = color.toHexString(),
						cssObj = {
							'background': [top,
								'-moz-linear-gradient(top, '+top+' 0%, '+bottom+' 100%)',
								'-webkit-gradient(linear, left top, left bottom, color-stop(0%,'+top+'), color-stop(100%,'+bottom+'))',
								'-webkit-linear-gradient(top, '+top+' 0%,'+bottom+' 100%)',
								'-o-linear-gradient(top, '+top+' 0%,'+bottom+' 100%)',
								'-ms-linear-gradient(top, '+top+' 0%,'+bottom+' 100%)',
								'linear-gradient(to bottom, '+top+' 0%,'+bottom+' 100%)'],
							'filter': 'progid:DXImageTransform.Microsoft.gradient( startColorstr="'+top+'", endColorstr="'+bottom+'",GradientType=0 )'
						};

					$bg_colour.spectrum('set', null);
					$bg_gradient.val(null);
					NKD.utilities.cssMap($module, cssObj);
				} else {
					$module.css('background', '');
				}

				// set save button active.
				$save_button.addClass('active');
			}
		});
	},

	backgroundGradientAdvanced: function($module)
	{
		var $bg_colour = $module.find('input[name=bg_colour]'),
			$bg_gradient_top = $module.find('input[name=bg_gradient_top]'),
			$bg_gradient_bottom = $module.find('input[name=bg_gradient_bottom]'),
			$bg_gradient = $module.find('textarea[name=bg_gradient]'),
			$save_button = $module.find('.js-save-handle');

		// Gradient Advanced
		$bg_gradient.off('keyup paste change');
		$bg_gradient.on('keyup paste change', function(event)
		{
			var $self = $(this);

			$bg_colour.spectrum('set', null);
			$bg_gradient_top.spectrum('set', null);
			$bg_gradient_bottom.spectrum('set', null);

			// delay needed to catch value
			setTimeout(function() {
				$module.css({'background':'', 'filter':''}); // reset background styles
				$module.attr('style', $module.attr('style') + '; ' + $self.val());
			}, 100);

			// set save button active.
			$save_button.addClass('active');
		});
	}

};