<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

session_start();
if (empty($_SESSION['idusers']) && $_SERVER['PHP_SELF'] != "/BigFish/index.php")
{
	header("location: index.php");
	
}
?>