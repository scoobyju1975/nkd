NKD.skrollr = {

	s: null,

	init: function()
	{
		if ($('.skrollr, .js-animate-image').length > 0)
		{
			NKD.debug('skrollr');
			NKD.skrollr.startSkrollr();
		}
	},

	startSkrollr: function()
	{
		$('*[data-anchor-target]').each(function() {
			var target = $(this).data('anchor-target');

			// target doesnt exist, so remove it.
			if ($(target).length === 0) {
				$(this).removeAttr('data-anchor-target');
				$(this).removeAttr('data-bottom*');
				$(this).removeAttr('data-top*');
			}
		});

		this.s = skrollr.init({
			render: function(data) {
				// Debugging
				//console.log(data.curTop);
			}
		});
	},

	refreshSkrollr: function($target)
	{
		this.s.refresh($target);
	}
};