NKD.responsive = {

	view: null,

	init: function()
	{
		NKD.debug('responsive');

		NKD.responsive.view = NKD.responsive.currentView();

		// on resize
		$(window).resize(function () {
			NKD.responsive.view = NKD.responsive.currentView();
			$('body').attr('data-width', NKD.responsive.view);
		});

		$('body').attr('data-width', NKD.responsive.view);
	},

	currentView: function() {

		// 15px for scrollbar
		var width = ($(document).width() + 15);
		var view;

		if (width < config.globals.screenSm) {
			view = "xs";
		} else if (width >= config.globals.screenSm && width < config.globals.screenMd) {
			view = "sm";
		} else if (width >= config.globals.screenMd && width < config.globals.screenLg) {
			view = "md";
		} else if (width >= config.globals.screenLg) {
			view = "lg";
		}

		return view;
	}
};