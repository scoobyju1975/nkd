NKD.sidebar = {

	init: function()
	{
		if ($('body[data-check="cms"]').length > 0) {
			NKD.debug('sidebar');
			NKD.sidebar.startSidebar();
		}
	},

	startSidebar: function()
	{
		$('.st-container').each(function()
		{
			var $container = $(this);
			$container.find('.st-trigger').on('click', function(e)
			{
				e.preventDefault();

				NKD.sidebar.toggleSidebar($container);

				return false;
			});
		});
	},

	toggleSidebar: function($target)
	{
		var menuHeight = $target.find('.st-menu').height();

		if ($target.hasClass('st-menu-open'))
		{
			$target.removeClass('st-menu-open');
			$target.height($target.data('original-height')); // set to original

			setTimeout( function() {
				$target.css('height', ''); // remove style
			}, 2000);
		} else {

			var originalHeight = $target.height(),
				targetHeight = (menuHeight >= originalHeight) ? menuHeight : originalHeight;

			$target.data("original-height", originalHeight); // store height

			$target.removeClass().addClass('st-container st-effect-3');
			$target.height(targetHeight);
			$target.find('.st-menu').height(targetHeight);

			setTimeout( function() {
				$target.addClass('st-menu-open');
			}, 25);
		}
	}
};