
var map = L.map('map-osm', {
    preferCanvas: true // recommended when loading large layers.
  });

  map.setView(
    [
        -9.4262004,
        -40.4919658
    ], 12);

var tiles = L.tileLayer('https://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors',
});
tiles.addTo(map);

addressPoints = addressPoints.map(function (p) { return [p[0], p[1]]; });

var heat = L.heatLayer(
    addressPoints,
    {
        LatLng: 0.8,
        radius: 30,
        blur: 3,
        gradient: {1: 'red', 1: 'red', 1: 'red'}
    }
);
heat.addTo(map);

// Instantiate KMZ layer (async)
var kmz = L.kmzLayer().addTo(map);

kmz.on('load', function(e) {
  control.addOverlay(e.layer, e.name);
  // e.layer.addTo(map);
});

kmz.load('kmz/2623.kmz');

var control = L.control.layers(null, null, { collapsed:false }).addTo(map);
