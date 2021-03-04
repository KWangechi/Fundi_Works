var map;
var myLatLng;


$(document).ready(function(){

 geoLocationInit(); 

  function geoLocationInit(){
if(navigator.geolocation){
  navigator.geolocation.getCurrentPosition(success, fail);
}
else{
  alert("Browser you are using is not supprted");
}

  }

//WHEN THE RESULTS ARE SUCCESSFULL
  function success(position){
console.log(position);

var lat = position.coords.latitude;
var long = position.coords.longitude;

var myLatLng = new google.maps.LatLng(lat, long);

createMap(myLatLng);
nearbySource(myLatLng, 'restaurant');
  }

//INCASE OF A FAILURE
  function fail(){
    alert("Oops. Something went wrong");
  }



  //CREATING A MAP
  function createMap(myLatLng){
        map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 14
        });
        
        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          
        });

        }

//CREATIMG A MARKER ON THE MAP
        function  createMarker(latlng, image, name){
        var marker = new google.maps.Marker({
          position: latlng,
          icon: image,
          map: map,
          title: name
        });
      }


      //MAKES A NEARBY SOURCES
      function nearbySource(myLatLng, type){
        var request = {
            location: myLatLng,
            radius: '2500',
            type: [type]
          };

       service = new google.maps.places.PlacesService(map);
       service.nearbySearch(request, callback);

      
       //console.log(results)
       
       
       function callback(results, status){
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            var place = results[i];

latlng = place.geometry.location;
image = "https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png";
name = place.name;
            createMarker(latlng, image, name);
          }
         
        } 
      }
    }
    });
   