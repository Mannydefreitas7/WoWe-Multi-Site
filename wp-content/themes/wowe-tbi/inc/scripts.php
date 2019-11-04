
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/functions-new.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/scrollax.min.js"></script>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyB9ZWPml5wyfYOP3KY_i4HFRLIallt0JJQ"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.gmap.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/scripts.js"></script>

	<script type="text/javascript">
		jQuery( window ).load( function () {

			jQuery( '#headquarters-map' ).gMap( {
				address: '3206 W Burbank Blvd, Burbank, CA 91505',
				maptype: 'ROADMAP',
				zoom: 13,
				markers: [ {
					address: "3206 W Burbank Blvd, Burbank, CA 91505",
					html: "3206 W Burbank Blvd, Burbank, CA 91505",
					icon: {
						image: "<?php echo get_template_directory_uri() ?>/images/icons/map-icon-red.png",
						iconsize: [ 60, 60 ],
						iconanchor: [ 14, 44 ]
					}
				} ],
				doubleclickzoom: false,
				controls: {
					panControl: false,
					zoomControl: false,
					mapTypeControl: false,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				},
				styles: [ {
					"featureType": "administrative",
					"elementType": "labels.text.fill",
					"stylers": [ {
						"color": "#444444"
					}, {
						"weight": "1.00"
					} ]
				}, {
					"featureType": "landscape",
					"elementType": "all",
					"stylers": [ {
						"color": "#f2f2f2"
					} ]
				}, {
					"featureType": "poi",
					"elementType": "all",
					"stylers": [ {
						"visibility": "off"
					} ]
				}, {
					"featureType": "road",
					"elementType": "all",
					"stylers": [ {
						"saturation": -100
					}, {
						"lightness": 45
					}, {
						"visibility": "on"
					} ]
				}, {
					"featureType": "road",
					"elementType": "geometry.fill",
					"stylers": [ {
						"visibility": "simplified"
					}, {
						"saturation": "4"
					}, {
						"color": "#648c0e"
					} ]
				}, {
					"featureType": "road",
					"elementType": "geometry.stroke",
					"stylers": [ {
						"color": "#648c0e"
					}, {
						"visibility": "simplified"
					}, {
						"weight": "2.01"
					}, {
						"gamma": "5.77"
					}, {
						"lightness": "-42"
					} ]
				}, {
					"featureType": "road",
					"elementType": "labels.text",
					"stylers": [ {
						"color": "#000000"
					}, {
						"visibility": "on"
					}, {
						"weight": "0.81"
					}, {
						"gamma": "2.84"
					} ]
				}, {
					"featureType": "road.highway",
					"elementType": "all",
					"stylers": [ {
						"visibility": "simplified"
					} ]
				}, {
					"featureType": "road.arterial",
					"elementType": "labels.icon",
					"stylers": [ {
						"visibility": "off"
					} ]
				}, {
					"featureType": "road.local",
					"elementType": "all",
					"stylers": [ {
						"visibility": "on"
					}, {
						"color": "#648c0e"
					}, {
						"gamma": "5.59"
					}, {
						"weight": "4.02"
					} ]
				}, {
					"featureType": "transit",
					"elementType": "all",
					"stylers": [ {
						"visibility": "off"
					} ]
				}, {
					"featureType": "water",
					"elementType": "all",
					"stylers": [ {
						"color": "#648c0e"
					}, {
						"visibility": "on"
					} ]
				} ]
			} );

		} );
	</script>
