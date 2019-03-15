NKD.modules = {

	$modules: $('.module'),

	init: function () {
		if ($('.module').length > 0)
		{
			NKD.debug('modules');
			NKD.modules.initModule();
		}
	},

	initModule: function () {
		var self = this,
			$modules = $('.module');

		$modules.each(function(i, value)
		{
			var id = $(this).data('id'),
				bg_colour = $(this).data('bg-colour'),
				bg_gradient_top = $(this).data('bg-gradient-top'),
				bg_gradient_bottom = $(this).data('bg-gradient-bottom');

			if (bg_gradient_top && bg_gradient_bottom) {
				var cssObj = {
					'background': [bg_gradient_top,
						'-moz-linear-gradient(top, '+bg_gradient_top+' 0%, '+bg_gradient_bottom+' 100%)',
						'-webkit-gradient(linear, left top, left bottom, color-stop(0%,'+bg_gradient_top+'), color-stop(100%,'+bg_gradient_bottom+'))',
						'-webkit-linear-gradient(top, '+bg_gradient_top+' 0%,'+bg_gradient_bottom+' 100%)',
						'-o-linear-gradient(top, '+bg_gradient_top+' 0%,'+bg_gradient_bottom+' 100%)',
						'-ms-linear-gradient(top, '+bg_gradient_top+' 0%,'+bg_gradient_bottom+' 100%)',
						'linear-gradient(to bottom, '+bg_gradient_top+' 0%,'+bg_gradient_bottom+' 100%)'],
					'filter': 'progid:DXImageTransform.Microsoft.gradient( startColorstr="'+bg_gradient_top+'", endColorstr="'+bg_gradient_bottom+'",GradientType=0 )'
				};

				NKD.utilities.cssMap($(this), cssObj); // set css gradient
			}
		});
	}

};