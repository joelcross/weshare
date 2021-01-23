/** Javascript file */ 

let map, infoWindow;
const COORDINATES = { lat: 44.2429939, lng: -76.5188061 }
var markers = [];

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
      center: COORDINATES,
      zoom: 13,
    });

    var request = {
      location: COORDINATES,
      radius: '8000',
      query: "homeless shelter"
    };
  
    var service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);

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
    var marker = new google.maps.Marker({
      map: map,
      position: positions[i]
    });

    // this function doesn't currently work - needa way to fetch name of each marker
    google.maps.event.addListener(marker, 'click', function() {
      infoWindow.setContent(names[i]);
      infoWindow.open(map,this);
    });
  }
}