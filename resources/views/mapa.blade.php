<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">

<title>Geocodificador</title>

<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>

</head>
<body>
	<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
	<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css">
	<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
	<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
	
	<div id="map"></div>
	 
	<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoiZ3VpbGhlcm1lLWZzIiwiYSI6ImNrbWV4em54OTA0OWgyb3F5YXUzMmNlaXMifQ.HbQ8a2FbjHn_QR8ellzbXw';
	
	var map = new mapboxgl.Map({
	container: 'map',
	style: 'mapbox://styles/mapbox/streets-v11',
	center: [-79.4512, 43.6568],
	zoom: 13
	});
	 
	map.addControl(
	new MapboxGeocoder({
	accessToken: mapboxgl.accessToken,
	mapboxgl: mapboxgl
	})
	);
	</script>
	 
</body>
</html>