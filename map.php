<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple Polygon</title>
   <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #coords {
        background-color: black;
        color: white;
        padding: 5px;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
	<div id="coords"></div>
    <script>

   function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 24.886, lng: -70.268},
          mapTypeId: 'terrain'
        });
 // Show the lat and lng under the mouse cursor.
        var coordsDiv = document.getElementById('coords');
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(coordsDiv);
      /*  map.addListener('mousemove', function(event) {
          coordsDiv.textContent =
              'lat: ' + event.latLng.lat() + ', ' +
              'lng: ' + event.latLng.lng();
        });*/
		//var redCoords= [];
     /* var redCoords = [
		  {lat: 25.774, lng: -80.190},
		  {lat: 27.605, lng: -76.285},
		  {lat: 25.818, lng: -75.757}
		]; */

		// Construct a draggable red triangle with geodesic set to true.
		/*var camDisplay=new google.maps.Polygon({
		  map: map,
		  paths: redCoords,
		  strokeColor: '#FF0000',
		  strokeOpacity: 0.8,
		  strokeWeight: 2,
		  fillColor: '#FF0000',
		  fillOpacity: 0.35,
		  draggable: true,
		  geodesic: true,
		  round:true
		}); 


google.maps.event.addListener(camDisplay, 'click', function rotate () {
	alert('dddd');
   var coordsDiv = document.getElementById('coords');
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(coordsDiv);
        map.addListener('mousemove', function(event) {
          coordsDiv.textContent =
              'lat: ' + event.latLng.lat() + ', ' +
              'lng: ' + event.latLng.lng();
        });
		redCoords = [
		  {lat: 25.774, lng: -80.190},
		  {lat: 18.466, lng: -66.118},
		  {lat: event.latLng.lat(), lng: event.latLng.lng()}
		];
		alert(redCoords)
	
  });*/
  
	///////
	 var labels = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20'];
      var labelIndex = 0;

	map.addListener('click', function(e) {
		placeMarkerAndPanTo(e.latLng, map);
	});

	function placeMarkerAndPanTo(latLng, map) {
        var marker = new google.maps.Marker({
          position: latLng,
          map: map,
			animation: google.maps.Animation.BOUNCE,
			label: labels[labelIndex++ % labels[labelIndex]],
		//  icon: "http://localhost/icon.png",
        });
        map.panTo(latLng);
		//alert(latLng)
		map.addListener('mousemove', function(event) {
          coordsDiv.textContent =
              'lat: ' + event.latLng.lat() + ', ' +
              'lng: ' + event.latLng.lng();
       
		var less = parseInt(event.latLng.lat());
		var lang = parseInt(event.latLng.lng());
		//alert(less)
		var camposition = [
		  {lat: latLng.lat(), lng: latLng.lng()},
		  {lat: less, lng: lang}
		  //{lat: less+6, lng: lang-6}
		];
		
		var setCam=new google.maps.Polygon({
		 map: map,
		 paths: camposition,
		 //icon: "http://localhost/icon.png",
		

		  strokeColor: '#FF0000',
		  strokeOpacity: 0.8,
		  strokeWeight: 2,
		  fillColor: '#FF0000',
		  fillOpacity: 0.35

		}); 



	   });
		//map.addListener('dragend', function() { alert('map dragged'); } );
		// Remove all click listeners from marker instance.
		//google.maps.event.clearListeners(marker, 'click');
		
	}
 
 /*
 map.addListener('click', function(event) {
	 
      alert(event.latLng.lat()+"," +event.latLng.lng());
          //var cposition = map.setCenter(marker.getPosition());
		  var redCoords1 = [
		  {lat: event.latLng.lat(), lng: event.latLng.lng()},
		  {lat: event.latLng.lat(), lng: event.latLng.lng()},
		  {lat: event.latLng.lat(), lng: event.latLng.lng()}
		];
		
		var camDisplay1=new google.maps.Polygon({
		  map: map,
		  paths: redCoords1,
		  strokeColor: '#FF0000',
		  strokeOpacity: 0.8,
		  strokeWeight: 2,
		  fillColor: '#FF0000',
		  fillOpacity: 0.35
		 //draggable: true,
//geodesic: true,
		 // round:true
		});
		//var cposition = map.setCenter(camDisplay1.getPosition());
		alert(cposition)
map.addListener('mousemove', function(event) {
          coordsDiv.textContent =
              'lat: ' + event.latLng.lat() + ', ' +
              'lng: ' + event.latLng.lng();
        });
		
		
        }); */
  
  
  
  
      } 
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaH4ozbBC3HhSU71hi6-OOJyWgN2gNgiU&callback=initMap">
    </script>
  </body>
</html>