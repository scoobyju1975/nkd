NKD.slideshows = {

	slideshow: [],
	isActive: false,

	init: function() {

		if ($('.js-slideshow').length > 0)
		{
			NKD.debug('slideshows');

			$(window).resize(function () {
				$.each(NKD.slideshows.slideshow, function (i, value) {
					value.stopAutoplay();
					value.resizeFix();
				});

				NKD.slideshows.setSlideshowHeight();
			});

			NKD.slideshows.setSlideshowHeight();
			NKD.slideshows.initSlideshow();
		}
	},

	initSlideshow: function() {
		var self = this,
			$target = $('.js-slideshow');

		$target.each(function (i, value) {
			var $module = $(this).parents('.module'),
				$paginator = $(this).data('paginator') ? $(this).data('paginator') : false,
				autoplay = $module.find("[data-autoplay='true']").length > 0 ? 5000 : null;

			NKD.slideshows.slideshow[i] = new Swiper($(this)[0], {
				mode: 'horizontal',
				pagination: $paginator,
				paginationClickable: true,
				loop: true,
				autoplay: autoplay
			});

			NKD.slideshows.listenArrows($module, NKD.slideshows.slideshow[i]);
		});
	},

	setSlideshowHeight: function() {
		var self = this,
			$slideshow = $('.js-slideshow');

		$slideshow.each(function () {
			var $slide = $(this).find('.swiper-slide'),
				maxHeight = 0;

			$slide.css('height', ''); // reset

			$slide.each(function () {
				maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
			});

			$(this).height(maxHeight); // set container height
		});
	},

	listenArrows: function($module, slideshow)
	{
		$module.find('.arrow-left').on('click', function(e) {
			e.preventDefault();
			slideshow.swipePrev();
		});

		$module.find('.arrow-right').on('click', function(e) {
			e.preventDefault();
			slideshow.swipeNext();
		});
	}

};