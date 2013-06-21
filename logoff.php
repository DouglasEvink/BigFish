<?php
include ('template/allPagesCode.php');
if (isset($_SESSION['idusers']))
{
	unset($_SESSION['idusers']);
	unset($_SESSION['nickname']);
	header("location: index.php");
	
}
else
{
	echo $_SESSION['idusers'];
}
?>