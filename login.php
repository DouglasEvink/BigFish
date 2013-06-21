<?php

include ('template/allPagesCode.php');
include ('classes/class.dbAccess.php');

$myusername = $_POST['myUsername'];
$mypassword = $_POST['myPassword'];
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$dbAccess = new dbAccess();
$location = $dbAccess->verifyLogin($myusername, $mypassword);
//var_dump($location);
	/*echo $location['idusers'];
	echo "<br />";
	echo $location['nickname'];
	echo "<br />";
*/
	$_SESSION['idusers'] = $location['idusers'];
	$_SESSION['nickname'] = $location['nickname'];
	
	header("location: index.php");

?>