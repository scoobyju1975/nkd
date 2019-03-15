NKD.video = {

	init: function()
	{
		if ($('video').length > 0)
		{
			NKD.debug('video');
			NKD.video.setupVideos();
		}
	},

	setupVideos: function()
	{
		var self = this,
			$module = $('.module');

		$module.each(function()
		{
			var $module = $(this),
				$container = $module.find('.js-video-container'),
				$video = $container.find('video'),
				$overlay = $container.find('.overlay'),
				$play_button = $module.find('.js-play'),
				has_vimeo = ($video.data('video') && $video.data('video').length > 0) ? true : false;

			$video.css('opacity', 0);
			$overlay.css('opacity', 0);

			NKD.video.listenPlayButton($module);
			NKD.video.showOverlay($module);

			if (has_vimeo) {
				$play_button.show();
			} else {
				$play_button.hide();
			}
		});
	},

	listenPlayButton: function($module)
	{
		var self = this,
			$play_button = $module.find('.js-play');

		$play_button.on("click", function(e)
		{
			e.preventDefault();

			if (!$(this).css('display','inline-block').hasClass('active'))
			{
				$(this).addClass('active');
				self.videoAnimateIn($module);
			}

			return false;
		});
	},

	showOverlay: function($module)
	{
		if ($('body').attr('data-width') !== 'xs')
		{
			var $container = $module.find('.js-video-container'),
				$video = $container.find('video'),
				$overlay = $container.find('.overlay');

			// delay needed to catch value
			setTimeout(function () {
				$overlay.velocity("transition.fadeIn", {
					stagger: 250
				});

				$video.velocity("transition.fadeIn", {
					delay: 400,
					stagger: 250,
					complete: function () {
						//
					}
				});

			}, 2000);
		}
	},

	videoAnimateIn: function($module)
	{
		var self = this,
			$container = $module.find('.js-video-container'),
			$video = $container.find('video'),
			$overlay = $container.find('.overlay'),
			$play_button = $module.find('.js-play');

		$play_button.velocity("fadeOut", {
			delay: 400,
			display: 'inline-block',
			complete: function() {
				self.vimeoEmbed($module);

				$overlay.velocity({
					backgroundColor: "#000000",
					backgroundColorAlpha: 1
				});
			}
		});
	},

	vimeoEmbed: function($module)
	{
		var instance = this,
			$container = $module.find('.js-video-container'),
			$vimeo = $container.find('.vimeo'),
			$overlay = $container.find('.overlay'),
			vimeoPatternUrl = 'http://vimeo.com/api/oembed.json?url=http%3A//vimeo.com/',
			vimeoId = $module.find('video').data('video').split("/").pop(),
			height = $module.height(),
			autoplay = false;

		$.ajax({
			url: vimeoPatternUrl + vimeoId + '&autoplay=' + autoplay + '&height=' + height + '&api=1&callback=?',
			dataType: 'jsonp',
			timeout: (3 * 1000), // 10 secs
			beforeSend: function()
			{

			},
			success: function(data)
			{
				if (!$vimeo.find('iframe').length) // only append video once
				{
					$vimeo.append(data.html);
				}

				$container.find('video').velocity({opacity: 0});
				$module.find('.mod').velocity({opacity: 0}, {
					delay: 1000,
					complete: function() {
						var vimeo = $module.find('iframe')[0],
						player = $f(vimeo);

						player.addEvent('ready', function() {
							//console.log('ready');

							player.addEvent('pause', onPause);
							player.addEvent('finish', onFinish);
							player.addEvent('playProgress', onPlayProgress);

							$vimeo.find('iframe').velocity("transition.fadeIn");
							player.api("play");
						});

						function onPause(id) {
							// debug
							//console.log('paused');
						}

						function onFinish(id) {
							$overlay.velocity("fadeOut");
							//console.log('finished');
						}

						function onPlayProgress(data, id) {
							// debug
							// console.log(data.seconds + 's played');
						}
					}
				});
			},
			error: function(errorSender, errorMsg)
			{
				console.log('error, video could not load');
			}
		});
	}
};