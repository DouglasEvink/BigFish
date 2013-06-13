<?php
//include ('library/database/dbConnect.php');
include ('classes/class.dbAccess.php');

//$data = $conn->query('CALL selectAllLocations');

$dbAccess = new dbAccess();
$location = $dbAccess->selectLocationAll();
foreach($location as $row) {
	echo $row['locationTime'];
	echo "<br />";

}
//$foo = $location->test();
//echo $foo;
echo 'yea';

//$conn = null;
?>