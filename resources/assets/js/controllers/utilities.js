NKD.utilities = {

	init: function()
	{
		NKD.debug('utils');

		NKD.utilities.ajaxConfig();
		NKD.utilities.ckEditorConfig();
		NKD.utilities.toggleOverlay();
		NKD.utilities.createTooltips();
		NKD.utilities.noDragDrop();
	},

	ajaxConfig: function()
	{
		$.ajaxSetup({
			headers: {
				'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
			}
		});
	},

	ckEditorConfig: function()
	{
		CKEDITOR.disableAutoInline = true;
		CKEDITOR.allowedContent = true;
		CKEDITOR.extraAllowedContent = 'i hr';
		CKEDITOR.dtd.$removeEmpty.i = false;
		CKEDITOR.dtd.$removeEmpty.hr = false;
		CKEDITOR.dtd.$removeEmpty.span = false;
	},

	toggleOverlay: function()
	{
		// what is this? well it displays a semi-transparent overlay of a graphic, useful for
		// debugging layout based items, and for getting scale correct.
		$('#js-toggle-overlay a').on('click', function()
		{
			$('.dev-overlay').toggle();

			return false;
		});
	},

	noDragDrop: function()
	{
		$(document).bind("drop dragover", function(e) {
			console.log(e.target);
		});
	},

	createTooltips: function()
	{
		$('[data-toggle="tooltip"]').tooltip({
			'container':'body'
		});
	},

	randomNumber: function(min, max)
	{
		return Math.floor(Math.random()*(max-min+1)+min);
	},

	cssMap: function($element, map)
	{
		$.each(map, function(property, value){
			if (value instanceof Array) {
				for(var i=0, len=value.length; i<len; i++) {
					$element.css(property, value[i]);
				}
			} else {
				$element.css(property, value);
			}
		});
	}
};