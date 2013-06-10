<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>GPS Tracker</title>
  <meta name="description" content="BigFish">
  <meta name="author" content="ME">
  <meta http-equiv="refresh" content="30; gps.php">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

<?php
// var_dump($_GET);
/*
echo $_GET["lat"];
echo "<br />";
echo $_GET["long"];
*/

$idUser = 1;
$lat = floatval($_GET["lat"]);
$long = floatval($_GET["long"]);
$time = time();

echo $idUser;
echo "<br />";
var_dump($lat);
echo "<br />";
echo $long;
echo "<br />";
echo $time;


$con=mysqli_connect("192.168.6.74","root","scs0scsi","BigFish");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO location (idUser, latitude, longitude, locationTime) VALUES ($idUser,'$lat','$long','$time')");

mysqli_close($con);


?>


</body>
</html>


