require('./bootstrap');

var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');
 
mapboxgl.accessToken = 'pk.eyJ1IjoiYXVuaW1oc24iLCJhIjoiY2tuazlxbG8wMDZwMzJvcGVucnhqdDhxZCJ9.FghoO5lb2VZkbxgN3cSzSg';
var map = new mapboxgl.Map({
    container: 'mapbox',
    style: 'mapbox://styles/mapbox/streets-v11'
});

var marker = new mapboxgl.Marker()
                .setLngLat([30.5, 50.5])
                .addTo(map);