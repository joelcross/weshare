/** Javascript file */ 

let map, infoWindow, marker;
const COORDINATES = { lat: 44.2429939, lng: -76.5188061 }
var markers = [];

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
      center: COORDINATES,
      zoom: 13,
    });

    infoWindow = new google.maps.InfoWindow();

    var request = {
      location: COORDINATES,
      radius: '8000',
      query: "shelter"
    };
    // var request = {
    //   query: 'Kingston Youth Shelter',
    //   fields: ['name', 'geometry'],
    // };
  
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);
    // service.findPlaceFromQuery(request, function(results, status) {
    //   if (status === google.maps.places.PlacesServiceStatus.OK) {
    //     for (var i = 0; i < results.length; i++) {
    //       createMarker(results[i]);
    //     }
    //     map.setCenter(results[0].geometry.location);
    //   }
    // });

}

function callback(results, status) {
    if (status == google.maps.places.PlacesServiceStatus.OK) {
      createMarkers();
    }
}
function createMarkers() {
    // put names into database so we can fetch
    var names = ["Kingston Youth Shelter", "Ryndale Transitional Housing", "Kingston Interval House", "Rufina's Bridal", "Dawn House", "St. Vincent de Paul", "Elizabeth Fry"];
    var positions = [{ lat: 44.231320, lng:-76.488060},{lat:44.240490,lng:-76.503150},{lat:44.249060, lng:-76.461210},{lat:44.235880,lng:-76.498390},{lat:44.252610,lng:-76.589130},{lat:44.24253475,lng:-76.49120845},{lat:44.23972,lng:-76.48811}];

    for (var i = 0; i < names.length; i++) {
        marker = new google.maps.Marker({
        map: map,
        position: positions[i]
      });

      // can't make infowindows
      // google.maps.event.addListener(marker, 'click', function() {
      //   infoWindow.setContent("h");
      //   infoWindow.open(map,this);
      // });
    }
}