NKD.googlemaps = {

	map: null,

	init: function()
	{
		if ($('#js-map').length > 0)
		{
			NKD.debug('googlemaps');
			NKD.googlemaps.embed();
		}
	},

	embed: function()
	{
		var $mapElem = $('#js-map'),
			mapStyle = [
				{
					stylers: [
						{ hue: "#00ffe6" },
						{ saturation: -20 }
					]
				},{
					featureType: "road",
					elementType: "geometry",
					stylers: [
						{ lightness: 100 },
						{ visibility: "simplified" }
					]
				},{
					featureType: "road",
					elementType: "labels",
					stylers: [
						{ visibility: "off" }
					]
				}
			];

		if ($mapElem.length === 0) {
			return false;
		}

		// Google map settings
		var location = new google.maps.LatLng(51.521626,-0.105813);

		var mapOptions = {
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: location,
			maxZoom: 17,
			zoom:15,
			panControl: false,
			zoomControl: true,
			mapTypeControl: false,
			scaleControl: true,
			streetViewControl: false,
			overviewMapControl: false,
			visualRefresh: true
		};

		var map = new google.maps.Map($mapElem[0], mapOptions);

		var marker = new google.maps.Marker({
			position: location,
			map: map,
			title:"NKD - 69 Turnmill Street",
			optimized: true,
			icon: '/wp-content/themes/nkd/images/nkd-marker.png'
		});

		map.setOptions({styles: mapStyle});

		// Trap the mouse interaction
		$('.google-maps .overlay').on('click', function() {
			// this will enable map clicking by disabling the overlay
			$(this).css({'pointer-events': 'none'});
		});
	}
};