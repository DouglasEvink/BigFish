<?php
include ("simpleHtmlDom/simple_html_dom.php");
$html =  file_get_html('http://uglos.mtu.edu/station_page.php?station=45029')->plaintext;
$posHtml = strpos($html, "DDD MM SS");
$html = substr($html, 0, $posHtml+10); 


$posStationId = strpos($html, "STN");
$stationId = substr($html, $posStationId-38, 5);

$posDateStamp = strpos($html, "STN");
$dateStamp = substr($html, $posDateStamp-20, 19);
$dateStamp = strtotime($dateStamp);

$posAirTemp = strpos($html, "ATMP1");
$airTemp = substr($html, $posAirTemp+7, 5);
$airTemp = preg_replace('/[^0-9.]*/','',$airTemp);

$posDewPoint = strpos($html, "DEWPT1");
$dewPoint = substr($html, $posDewPoint+8, 4);
$dewPoint = preg_replace('/[^0-9.]*/','',$dewPoint);

$posHumidity = strpos($html, "RRH");
$humidity = substr($html, $posHumidity+5, 7);
$humidity = preg_replace('/[^0-9.]*/','',$humidity);

$posWindDir = strpos($html, "WDIR1");
$windDir = substr($html, $posWindDir+10, 10);
$windDir = preg_replace('/[^0-9.]*/','',$windDir);

$posWindSpeed = strpos($html, "WSPD1");
$windSpeed = substr($html, $posWindSpeed+7, 5);
$windSpeed = preg_replace('/[^0-9.]*/','',$windSpeed);

$posWindGust = strpos($html, "GUST1");
$windGust = substr($html, $posWindGust+7, 5);
$windGust = preg_replace('/[^0-9.]*/','',$windGust);

$posWaveHeight = strpos($html, "WVHGT");
$waveHeight = substr($html, $posWaveHeight+7, 5);
$waveHeight = preg_replace('/[^0-9.]*/','',$waveHeight);

$posWavePeriod = strpos($html, "DOMPD");
$wavePeriod = substr($html, $posWavePeriod+7, 5);
$wavePeriod = preg_replace('/[^0-9.]*/','',$wavePeriod);

$posWaveDir = strpos($html, "MWDIR");
$waveDir = substr($html, $posWaveDir+7, 5);
$waveDir = preg_replace('/[^0-9.]*/','',$waveDir);

$posWaterTempSurface = strpos($html, "WTMP1");
$waterTempSurface = substr($html, $posWaterTempSurface+7, 5);
$waterTempSurface = preg_replace('/[^0-9.]*/','',$waterTempSurface);

$posWaterTemp01 = strpos($html, "TP001");
$waterTemp01 = substr($html, $posWaterTemp01+6, 5);
$waterTemp01 = preg_replace('/[^0-9.]*/','',$waterTemp01);

$posWaterTempDepth01 = strpos($html, "TP001");
$waterTempDepth01 = substr($html, $posWaterTempDepth01-12, 6);
$waterTempDepth01 = preg_replace('/[^0-9.]*/','',$waterTempDepth01);

$posWaterTemp02 = strpos($html, "TP002");
$waterTemp02 = substr($html, $posWaterTemp02+6, 5);
$waterTemp02 = preg_replace('/[^0-9.]*/','',$waterTemp02);

$posWaterTempDepth02 = strpos($html, "TP002");
$waterTempDepth02 = substr($html, $posWaterTempDepth02-12, 6);
$waterTempDepth02 = preg_replace('/[^0-9.]*/','',$waterTempDepth02);

$posWaterTemp03 = strpos($html, "TP003");
$waterTemp03 = substr($html, $posWaterTemp03+6, 5);
$waterTemp03 = preg_replace('/[^0-9.]*/','',$waterTemp03);

$posWaterTempDepth03 = strpos($html, "TP003");
$waterTempDepth03 = substr($html, $posWaterTempDepth03-12, 6);
$waterTempDepth03 = preg_replace('/[^0-9.]*/','',$waterTempDepth03);

$posWaterTemp04 = strpos($html, "TP004");
$waterTemp04 = substr($html, $posWaterTemp04+6, 5);
$waterTemp04 = preg_replace('/[^0-9.]*/','',$waterTemp04);

$posWaterTempDepth04 = strpos($html, "TP004");
$waterTempDepth04 = substr($html, $posWaterTempDepth04-12, 6);
$waterTempDepth04 = preg_replace('/[^0-9.]*/','',$waterTempDepth04);

$posWaterTemp05 = strpos($html, "TP005");
$waterTemp05 = substr($html, $posWaterTemp05+6, 5);
$waterTemp05 = preg_replace('/[^0-9.]*/','',$waterTemp05);

$posWaterTempDepth05 = strpos($html, "TP005");
$waterTempDepth05 = substr($html, $posWaterTempDepth05-12, 6);
$waterTempDepth05 = preg_replace('/[^0-9.]*/','',$waterTempDepth05);

$posWaterTemp06 = strpos($html, "TP006");
$waterTemp06 = substr($html, $posWaterTemp06+6, 5);
$waterTemp06 = preg_replace('/[^0-9.]*/','',$waterTemp06);

$posWaterTempDepth06 = strpos($html, "TP006");
$waterTempDepth06 = substr($html, $posWaterTempDepth06-12, 6);
$waterTempDepth06 = preg_replace('/[^0-9.]*/','',$waterTempDepth06);

$posWaterTemp07 = strpos($html, "TP007");
$waterTemp07 = substr($html, $posWaterTemp07+6, 5);
$waterTemp07 = preg_replace('/[^0-9.]*/','',$waterTemp07);

$posWaterTempDepth07 = strpos($html, "TP007");
$waterTempDepth07 = substr($html, $posWaterTempDepth07-12, 6);
$waterTempDepth07 = preg_replace('/[^0-9.]*/','',$waterTempDepth07);

$posWaterTemp08 = strpos($html, "TP008");
$waterTemp08 = substr($html, $posWaterTemp08+6, 5);
$waterTemp08 = preg_replace('/[^0-9.]*/','',$waterTemp08);

$posWaterTempDepth08 = strpos($html, "TP008");
$waterTempDepth08 = substr($html, $posWaterTempDepth08-12, 6);
$waterTempDepth08 = preg_replace('/[^0-9.]*/','',$waterTempDepth08);

$posWaterTemp09 = strpos($html, "TP009");
$waterTemp09 = substr($html, $posWaterTemp09+6, 5);
$waterTemp09 = preg_replace('/[^0-9.]*/','',$waterTemp09);

$posWaterTempDepth09 = strpos($html, "TP009");
$waterTempDepth09 = substr($html, $posWaterTempDepth09-12, 6);
$waterTempDepth09 = preg_replace('/[^0-9.]*/','',$waterTempDepth09);

$posWaterTemp10 = strpos($html, "TP0010");
$waterTemp10 = substr($html, $posWaterTemp10+6, 5);
$waterTemp10 = preg_replace('/[^0-9.]*/','',$waterTemp10);

$posWaterTempDepth10 = strpos($html, "TP0010");
$waterTempDepth10 = substr($html, $posWaterTempDepth10-12, 6);
$waterTempDepth10 = preg_replace('/[^0-9.]*/','',$waterTempDepth10);

$posWaterTemp11 = strpos($html, "TP0011");
$waterTemp11 = substr($html, $posWaterTemp11+6, 5);
$waterTemp11 = preg_replace('/[^0-9.]*/','',$waterTemp11);

$posWaterTempDepth11 = strpos($html, "TP0011");
$waterTempDepth11 = substr($html, $posWaterTempDepth11-12, 6);
$waterTempDepth11 = preg_replace('/[^0-9.]*/','',$waterTempDepth11);

$posWaterTemp12 = strpos($html, "TP0012");
$waterTemp12 = substr($html, $posWaterTemp12+6, 5);
$waterTemp12 = preg_replace('/[^0-9.]*/','',$waterTemp12);

$posWaterTempDepth12 = strpos($html, "TP0012");
$waterTempDepth12 = substr($html, $posWaterTempDepth12-12, 6);
$waterTempDepth12 = preg_replace('/[^0-9.]*/','',$waterTempDepth12);

$posWaterTemp13 = strpos($html, "TP0013");
$waterTemp13 = substr($html, $posWaterTemp13+6, 5);
$waterTemp13 = preg_replace('/[^0-9.]*/','',$waterTemp13);

$posWaterTempDepth13 = strpos($html, "TP0013");
$waterTempDepth13 = substr($html, $posWaterTempDepth13-12, 6);
$waterTempDepth13 = preg_replace('/[^0-9.]*/','',$waterTempDepth13);

$posWaterTemp14 = strpos($html, "TP0014");
$waterTemp14 = substr($html, $posWaterTemp14+6, 5);
$waterTemp14 = preg_replace('/[^0-9.]*/','',$waterTemp14);

$posWaterTempDepth14 = strpos($html, "TP0014");
$waterTempDepth14 = substr($html, $posWaterTempDepth14-12, 6);
$waterTempDepth14 = preg_replace('/[^0-9.]*/','',$waterTempDepth14);

$posWaterTemp15 = strpos($html, "TP0015");
$waterTemp15 = substr($html, $posWaterTemp15+6, 5);
$waterTemp15 = preg_replace('/[^0-9.]*/','',$waterTemp15);

$posWaterTempDepth15 = strpos($html, "TP0015");
$waterTempDepth15 = substr($html, $posWaterTempDepth15-12, 6);
$waterTempDepth15 = preg_replace('/[^0-9.]*/','',$waterTempDepth15);

$posWaterTemp16 = strpos($html, "TP0016");
$waterTemp16 = substr($html, $posWaterTemp16+6, 5);
$waterTemp16 = preg_replace('/[^0-9.]*/','',$waterTemp16);

$posWaterTempDepth16 = strpos($html, "TP0016");
$waterTempDepth16 = substr($html, $posWaterTempDepth16-12, 6);
$waterTempDepth16 = preg_replace('/[^0-9.]*/','',$waterTempDepth16);

$posWaterTemp17 = strpos($html, "TP0017");
$waterTemp17 = substr($html, $posWaterTemp17+6, 5);
$waterTemp17 = preg_replace('/[^0-9.]*/','',$waterTemp17);

$posWaterTempDepth17 = strpos($html, "TP0017");
$waterTempDepth17 = substr($html, $posWaterTempDepth17-12, 6);
$waterTempDepth17 = preg_replace('/[^0-9.]*/','',$waterTempDepth17);

$posWaterTemp18 = strpos($html, "TP0018");
$waterTemp18 = substr($html, $posWaterTemp18+6, 5);
$waterTemp18 = preg_replace('/[^0-9.]*/','',$waterTemp18);

$posWaterTempDepth18 = strpos($html, "TP0018");
$waterTempDepth18 = substr($html, $posWaterTempDepth18-12, 6);
$waterTempDepth18 = preg_replace('/[^0-9.]*/','',$waterTempDepth18);

$posWaterTemp19 = strpos($html, "TP0019");
$waterTemp19 = substr($html, $posWaterTemp19+6, 5);
$waterTemp19 = preg_replace('/[^0-9.]*/','',$waterTemp19);

$posWaterTempDepth19 = strpos($html, "TP0019");
$waterTempDepth19 = substr($html, $posWaterTempDepth19-12, 6);
$waterTempDepth19 = preg_replace('/[^0-9.]*/','',$waterTempDepth19);

$posWaterTemp20 = strpos($html, "TP0020");
$waterTemp20 = substr($html, $posWaterTemp20+6, 5);
$waterTemp20 = preg_replace('/[^0-9.]*/','',$waterTemp20);

$posWaterTempDepth20 = strpos($html, "TP0020");
$waterTempDepth20 = substr($html, $posWaterTempDepth20-12, 6);
$waterTempDepth20 = preg_replace('/[^0-9.]*/','',$waterTempDepth20);

$con=mysqli_connect("192.168.6.74","root","scs0scsi","BigFish");

if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"INSERT INTO weather (stationId, dateStamp, airTemp, dewPoint, humidity, windDir, windSpeed, windGust, waveHeight, wavePeriod, waveDir, waterTempSurface, waterTemp01, waterTempDepth01, waterTemp02, waterTempDepth02, waterTemp03, waterTempDepth03, waterTemp04, waterTempDepth04, waterTemp05, waterTempDepth05, waterTemp06, waterTempDepth06, waterTemp07, waterTempDepth07, waterTemp08, waterTempDepth08, waterTemp09, waterTempDepth09, waterTemp10, waterTempDepth10, waterTemp11, waterTempDepth11, waterTemp12, waterTempDepth12, waterTemp13, waterTempDepth13, waterTemp14, waterTempDepth14, waterTemp15, waterTempDepth15, waterTemp16, waterTempDepth16, waterTemp17, waterTempDepth17, waterTemp18, waterTempDepth18, waterTemp19, waterTempDepth19, waterTemp20, waterTempDepth20) VALUES ('$stationId','$dateStamp','$airTemp','$dewPoint','$humidity','$windDir','$windSpeed','$windGust','$waveHeight','$wavePeriod','$waveDir','$waterTempSurface','$waterTemp01','$waterTempDepth01','$waterTemp02','$waterTempDepth02','$waterTemp03','$waterTempDepth03','$waterTemp04','$waterTempDepth04','$waterTemp05','$waterTempDepth05','$waterTemp06','$waterTempDepth06','$waterTemp07','$waterTempDepth07','$waterTemp08','$waterTempDepth08','$waterTemp09','$waterTempDepth09','$waterTemp10','$waterTempDepth10','$waterTemp11','$waterTempDepth11','$waterTemp12','$waterTempDepth12','$waterTemp13','$waterTempDepth13','$waterTemp14','$waterTempDepth14','$waterTemp15','$waterTempDepth15','$waterTemp16','$waterTempDepth16','$waterTemp17','$waterTempDepth17','$waterTemp18','$waterTempDepth18','$waterTemp19','$waterTempDepth19','$waterTemp20','$waterTempDepth20')");

mysqli_close($con);

?>
