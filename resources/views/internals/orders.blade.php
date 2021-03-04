
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <h1 align="center">Fundi Works Website Google Maps</h1>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 500px;
        width: 600px;
        margin: 0 auto;
      }

      
    </style>
  </head>
  <body>
    <div id="map"></div>
    <!--
    <script crossorigin="anonymous" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" src="https://code.jquery.com/jquery-3.1.0.min.js">
        </script>
         -->
    
   
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWEsrVTTpn-yNuOdAnFJSXRAdq66CY7QE&libraries=places"
    
    async ="" defer= ""></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script src="{{asset('js/script.js')}}"></script>
    
  </body>
</html>