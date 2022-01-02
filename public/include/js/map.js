let marker='';
mapboxgl.accessToken = 'pk.eyJ1IjoiYWxpaG1haWRpIiwiYSI6ImNreHAybTNlZDZxdzAzMW11NGticDNnYnoifQ.6YwanSEBY47k3Lhm4VxeQQ';
var map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v11'
}).addControl(new mapboxgl.AttributionControl({
  customAttribution: 'Map design by me'
}));

  map.on('click', (e) => {
    // console.log(e.lngLat.)
    if(marker!=''){

      marker.remove();
    }

    let url="https://api.mapbox.com/geocoding/v5/mapbox.places/"+e.lngLat.lng+","+e.lngLat.lat+".json?limit=1&access_token="+mapboxgl.accessToken;
    $.getJSON(url, function(data) {

      document.getElementById("address").value=data.features[0].place_name;

    });
     marker = new mapboxgl.Marker()
  .setLngLat(e.lngLat)
  .addTo(map);

  
});
// Set marker options.
