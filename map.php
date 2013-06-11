<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Map</title>
  <meta name="description" content="Map">
  <meta name="author" content="Me">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
    <style>
      html, body, #map-canvas {
        margin: 0;
        padding: 0;
        height: 100%;
      }
    </style>
<!--    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(43.0137, -85.6861),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

var flightPlanCoordinates = [
      new google.maps.LatLng(43.0137, -85.6861),
      new google.maps.LatLng(42.5467, -83.2113),
  ];
  var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
  });

  flightPath.setMap(map);

}

google.maps.event.addDomListener(window, 'load', initialize);

    </script> -->
</head>
<body>

<?php
$con=mysqli_connect("192.168.6.74","root","scs0scsi","BigFish");
$sql = <<<SQL
    SELECT * FROM `location` ORDER BY locationTime
SQL;
if(!$result = $con->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()){

    $rows[]=$row;
//    $to_encode[] = $row;
//echo $row['locationTime'] . '<br />';
}
/*foreach ($rows as $key=>$data) {
    echo $data['locationTime'] . "<br />";
    echo $key . "  " . $data . "<br />";
}
var_dump($rows);*/
?>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var locations = <?php echo json_encode($rows); ?>;
var locationX = locations[0];
var index;
var coordinates = [];


console.log(locations);

var map;
function initialize() {
  var mapOptions = {
    zoom: 8,
    center: new google.maps.LatLng(43.0137, -85.6861),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

      for (index = 0; index < locations.length; ++index) {
            locationX = locations[index];
            coordinates[index] = new google.maps.LatLng(locationX['latitude'], locationX['longitude']);
      };
var flightPlanCoordinates = [];
flightPlanCoordinates = coordinates;

  var flightPath = new google.maps.Polyline({
    path: flightPlanCoordinates,
    strokeColor: '#FF0000',
    strokeOpacity: 1.0,
    strokeWeight: 2
  });

  flightPath.setMap(map);

}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>


<div id="map-canvas"></div> 

</body>
</html>
