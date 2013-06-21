<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) 
{ 
   $theta = $lon1 - $lon2; 
   $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
   $dist = acos($dist); 
   $dist = rad2deg($dist); 
   $miles = $dist * 60 * 1.1515;
   $unit = strtoupper($unit);

   if ($unit == "K") 
   {
      return ($miles * 1.609344); 
   } 
   else 
   {
      return $miles;
   }
}




$con=mysqli_connect("127.0.0.1","root","scs0scsi","BigFish");
$sql = <<<SQL
    SELECT * FROM `location` WHERE idsession=75 ORDER BY locationTime
SQL;
if(!$result = $con->query($sql)){
    die('There was an error running the query [' . $db->error . ']');
}

while($row = $result->fetch_assoc()){
  $rows[]=$row;
//echo $row['locationTime'] . '<br />';
}
mysqli_close($con);

$minimum = 99999999999999;
$maximum = 0;

for ($i=0; $i<count($rows)-1; $i++)
{
    $data1 = $rows[$i];
    $data2 = $rows[$i+1];
    $length += distance($data1['latatude'], $data1['longitude'], $data2['latatude'], $data2['longitude'], "m");

    $minimum = min($minimum, $data1['locationTime'], $data2['locationTime']);
    $maximum = max($maximum, $data1['locationTime'], $data2['locationTime']);

}
$traveledTime = ($maximum - $minimum) / 60;
$averageSpeed = $length / ($traveledTime / 60);

echo "Total Miles Traveled:  " . round($length,2);
echo "<br />";
echo "Total Time Traveled:  " . round($traveledTime,2) . " Minutes";
echo "<br />";
echo "Average Speed:  " . round($averageSpeed,2) . " MPH";

?>

