NKD.imagesloaded = {

	images: null,
	imageIndex: 0,
	loaded: false,

	init: function()
	{
		NKD.debug('images');
		NKD.imagesloaded.loadIn();
	},

	hideHeader:function()
	{
		//$('.masthead').hide();
	},

	placeImages: function()
	{
		var self = this,
			$backgrounds = $('.js-images-container').find('figure'),
			screen_size = $('body').attr('data-width');

		$backgrounds.each(function()
		{
			var id = $(this).attr('data-image-id'),
				x = $(this).attr('data-x-'+screen_size),
				y = $(this).attr('data-y-'+screen_size),
				x_unit = $(this).attr('data-x-unit'),
				y_unit = $(this).attr('data-y-unit'),
				$module = $(this).parents('.module'),
				$screen_x = $module.find('.moduleBackgroundEdit .item[data-id='+id+'] input[name=screen_x]'),
				$screen_y = $module.find('.moduleBackgroundEdit .item[data-id='+id+'] input[name=screen_y]');

			$screen_x.val(x);
			$screen_y.val(y);

			if (x == 'none' || y == 'none') {
				$(this).hide().addClass('disabled');
			} else {
				$(this).css({
					'top' : y+y_unit,
					'left' : x+x_unit
				}).show().removeClass('disabled');
			}

		});
	},

	scanImages: function()
	{
		var images = $('img');

		// reset image index.
		NKD.imagesloaded.imageIndex = 0;

		// convert background-image to image assets for loader
		$('section figure').each(function()
		{
			var el = $(this),
				image = el.css('background-image').match(/url\((['"])?(.*?)\1\)/);

			if(image) {
				images = images.add($('<img>').attr('src', image.pop()));
			}
		});

		return images;
	},

	loadIn: function()
	{
		var $overlay = $('.loader-overlay'),
			$spinner = $overlay.find('.spinner'),
			$svg = $spinner.find('img');

		$svg.velocity({rotateZ: 7000}, {
			loop: true,
			duration: 22000,
			easing: 'ease'
		});

		$overlay.velocity("fadeIn", {
			complete: function() {
				$spinner.velocity("transition.bounceDownIn");
			}
		});


	},

	loadOut: function()
	{
		var $overlay = $('.loader-overlay'),
			$spinner = $overlay.find('.spinner img'),
			$navbar = $('.masthead'),
			$firstModule = $('.section').first();

		$('#skrollr-body').addClass('in');

		$navbar.waypoint('sticky', {
			direction: 'down',
			offset: 1800,
			stuckClass: 'fixed'
		});

		$overlay.velocity("fadeOut", {
			duration: 100,
			delay: 1000,
			complete: function() {
				//$('.masthead').velocity("transition.slideDownBigIn");
			}
		});
	}
};