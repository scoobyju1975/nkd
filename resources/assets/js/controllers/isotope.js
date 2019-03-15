NKD.isotope = {

	isotopePool: [],
	isotopeDestroyed: false,

	init: function () {
		NKD.debug('isotope');
		NKD.isotope.createIsotope();
		NKD.isotope.fileBrowseListeners();
	},

	createIsotope: function ()
	{
		var instance = this,
			$target = $('.isotope');

		$target.each(function (i, value) {
			var $container = $(this);

			$container.imagesLoaded(function() {
				$container.isotope({
					//transformsEnabled: false,
					hiddenStyle: {
						opacity: 0
					},
					visibleStyle: {
						opacity: 1
					},
					itemSelector: '.item',
					layoutMode: 'fitRows',
					filter: '*',
					resizable: false,
					//transitionDuration: 0,
					masonry: {columnWidth: '.item'}
				});
			});

			$(window).resize(function () {
				instance.checkIsotope($container);
			});

			NKD.isotope.isotopePool.push($container); // push to called array.

			NKD.isotope.createListeners();
		});
	},

	checkIsotope: function (el) {
		NKD.isotope.isotopeDestroyed = false;
		el.isotope({
			masonry: {columnWidth: '.item'}
		});
	},

	createListeners: function()
	{
		var $list = $('.pills-staff .nav').find('a');

		// bind filter button click
		$list.on('click', function()
		{
			var $list = $(this).parents('.nav').find('li'),
				$li = $(this).parent(),
				filterValue = $li.hasClass('active') ? '*' : $(this).attr('data-filter');

			$list.not($li).removeClass('active');
			$li.toggleClass('active');

			//$(this).parents('ul').find('li').removeClass('active');
			//$(this).parents('li').addClass('active');

			$('.isotope').isotope({ filter: filterValue });

			return false;
		});
	},

	fileBrowseListeners: function()
	{
		function getUrlParam( paramName ) {
			var reParam = new RegExp( '(?:[\?&]|&)' + paramName + '=([^&]+)', 'i' ) ;
			var match = window.location.search.match(reParam) ;

			return ( match && match.length > 1 ) ? match[ 1 ] : null ;
		}

		var $list = $('.isotope-files .item').find('a');

		$list.on('click', function()
		{
			var funcNum = getUrlParam('CKEditorFuncNum');
			var fileUrl = $(this).attr('href');

			window.opener.CKEDITOR.tools.callFunction(funcNum, fileUrl);
			window.close();

			return false;
		});
	}
};