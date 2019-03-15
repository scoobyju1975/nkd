NKD.motionicons = {

	scrollTo: 0,
	skrollrInstance: null,

	init: function()
	{
		NKD.debug('icons');

		//this.drawObserver();

		//this.startSVGAnimation($('.icon-draw svg'));
	},

	startSkrollr: function()
	{
		this.skrollrInstance = skrollr.init({
			smoothScrolling: true,
			smoothScrollingDuration: 350,
			mobileDeceleration: 0.005
		});

		this.skrollrInstance.setScrollTop(this.scrollTo, true);
	},

	hideSVGPaths: function(parentElement)
	{
		var paths = $(parentElement).find('path');

		//for each PATH..
		$.each(paths, function() {

			//get the total length
			var totalLength = this.getTotalLength();

			//set PATHs to invisible
			$(this).css({
				'stroke-dashoffset': totalLength,
				'stroke-dasharray': totalLength + ' ' + totalLength
			});
		});
	},

	drawObserver: function()
	{
		$(".icon-draw").each(function()
		{
			var self = $(this);

			self.attr("data-"+self.height()+"-bottom","@data-v:0");
			self.attr("data-80-center","@data-v:1");
			self.attr("data-v",0);
		});

		this.drawSVGScrollr();
		this.startSkrollr();
	},

	drawSVGScrollr: function()
	{
		$.each($(".icon-draw"), function(i)
		{
			var self = $(this),
				lastV = self.data("last-v"),
				v = self.attr("data-v");

			if ( lastV != v)
			{
				self.data("last-v",v);
			}

		});

		requestAnimationFrame(this.drawSVGScrollr);
	},

	drawSVGPaths: function(target, timeMin, timeMax, timeDelay, isRandomized)
	{
		$.each(target, function(i)
		{
			var $svg = $(this),
				paths = $svg.find('path'),
				total = paths.length;

			// toggle randomized.
			if (isRandomized) {
				paths.sort(function() {
					return 0.5 - Math.random();
				});
			}

			// for each PATH..
			$.each(paths, function(i)
			{
				// get the total length
				var totalLength = this.getTotalLength();

				// set PATHs to invisible
				$(this).css({
					'stroke-dashoffset': totalLength,
					'stroke-dasharray': totalLength + ' ' + totalLength
				});

				// animate
				$(this).delay(timeDelay*i).animate({
					'stroke-dashoffset': 0
				}, {
					duration: Math.floor(Math.random() * timeMax) + timeMin,
					easing: 'easeInOutQuad'
				});
			});

		});
	},

	startSVGAnimation: function(parentElement)
	{
		this.drawSVGPaths(parentElement, 200, 500, 20, true);
	}
};