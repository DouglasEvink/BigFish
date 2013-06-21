<?php include ('template/allPagesCode.php')?>
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
	  <?php include ('template/head.php'); ?>
	  
	  <script>
	  function myFunction()
	  {
	  window.location = "gpsStop.php";
	  }
	  </script>
</head>
<body>
<?php include ('template/header.php'); ?>	
<?php
// var_dump($_GET);
/*
echo $_GET["lat"];
echo "<br />";
echo $_GET["long"];
*/
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

include ('classes/class.logic.php');
$logic = new logic();
$varSession = $logic->isActiveSession();
//var_dump($varSession);
//echo "<br />";

if (!isset($_GET['lat']))
{
//exit(header("Location: /finished.html"));
	echo("<script>location.href = 'gps.php';</script>");
	die();
}

if ($varSession == 0)
{
	$varSession = $logic->newActiveSession($_SESSION['idusers']);
	$idsession = $varSession['LAST_INSERT_ID()'];
	$_SESSION['idsession'] = $idsession;
	echo $idsession;
	echo "<br />";
}
else
{
	$idsession = $varSession;
}

//$idsession = 1;
$lat = floatval($_GET["lat"]);
$long = floatval($_GET["long"]);
$time = time();

echo $idsession;
echo "<br />";
echo $lat;
echo "<br />";
echo $long;
echo "<br />";
echo $time;


$con=mysqli_connect("127.0.0.1","root","scs0scsi","BigFish");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO location (idsession, latitude, longitude, locationTime) VALUES ($idsession,'$lat','$long','$time')");

mysqli_close($con);


?>
<button onclick="myFunction()">STOP</button>
<?php include('template/footer.php'); ?>
</body>
</html>


