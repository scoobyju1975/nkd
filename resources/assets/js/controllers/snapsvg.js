NKD.snapsvg = {

	init: function() {
		if ($('.animated-icon').length > 0) {
			NKD.debug('snapsvg');
			NKD.snapsvg.inlineSvgs();
			NKD.snapsvg.startSvgAnimation();
			NKD.snapsvg.updateSvgAnimation();
		}
	},

	inlineSvgs: function()
	{
		$('.animated-icon').each(function() {
			var $svg = $(this),
				w = $svg.width(),
				h = $svg.height(),
				svg = Snap(w,h),
				setW = w !== 0,
				setH = h !== 0;

			// create a container to store everything
			$svg.wrap('<div class="svg-container" data-src="'+$svg.attr('src')+'"></div>');
			var $container = $svg.parent('.svg-container');

			Snap.load($container.data('src'),function(f) {
				svg.append(f);

				var container = $container.children("svg"),
					loaded = container.children("svg"),
					originalW = parseFloat($svg.width()),
					originalH = parseFloat($svg.height()),
					viewBox = loaded[0].getAttribute('viewBox').split(" ");

				if (setW)
				{
					loaded.attr("width", w);
				}
				if(setH){
					loaded.attr("height",h);
				}

				/*$container.css({
				 width: w,
				 height: h
				 });*/

				$container.data("loaded",true);
			});

			svg.appendTo($container.get(0));
			$container.data('snap', svg);

			// delete original image
			$svg.remove();
		});
	},

	startSvgAnimation: function() {
		$('.svg-container').each(function() {
			var $svg = $(this);

			$svg.attr("data-"+$svg.height()+"-bottom","@data-v:0");
			$svg.attr("data-80-center","@data-v:1");
			$svg.attr("data-v",0);
		});
	},

	updateSvgAnimation: function()
	{
		$('.svg-container').each(function()
		{
			var $svg = $(this),
				lastV = $svg.data("last-v"),
				v = $svg.attr("data-v");

			if (lastV!=v)
			{
				if ($svg.hasClass("line")) {
					$svg.css({
						transform: "scale("+v+",1)"
					});
				}

				if($svg.data("loaded"))
				{
					var snap = $(this).data("snap");
					if (snap !== null)
					{
						var path=snap.selectAll("path,line,polyline,polygon,ellipse");
						path.forEach(function(i)
						{
							var l = i.attr("data-length");

							if (l === null) {
								l = i.getTotalLength();
								i.attr("data-length", l);
							}

							if (typeof(l) == "undefined") {
								l = 1000;
							}

							i.attr({strokeDasharray:(v*l)+","+l});
						});
					}
					$svg.data("last-v", v);
				}
			}
		});

		requestAnimationFrame(NKD.snapsvg.updateSvgAnimation);
	}
};