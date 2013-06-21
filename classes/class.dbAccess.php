<?php
class dbAccess
{
	
	public function selectLocationAll()
	{
		include ('library/database/dbConnect.php');
		$data = $conn->query('CALL selectAllLocations');
		$conn = null;
		return $data;
	}
	
	public function verifyLogin($userName, $password)
	{
		include ('library/database/dbConnect.php');
		//$data = "yea";
		$sth = $conn->prepare('CALL verifyUsername(?,?)');
		//$sth = $conn->prepare('SELECT idusers FROM users WHERE username = ? AND password = ?');

		$sth->execute(array($userName,$password));
		$row = $sth->fetch(PDO::FETCH_ASSOC);
		$conn = null;
		return $row;
		
	}
	
	public function selectWeatherAll()
	{
		include ('library/database/dbConnect.php');
		$sth = $conn->query('CALL selectAllWeather');
		$sth->setFetchMode(PDO::FETCH_ASSOC);  
		while($row = $sth->fetch()) {  
			$rows[] = $row;
		}  
		
		$conn = null;
		return $rows;
	}
	
	public function insertSession($userId)
	{
		include ('library/database/dbConnect.php');
		$sth = $conn->prepare('CALL insertSession(?)');
		$sth->execute(array($userId));
		$lastId = $sth->fetch(PDO::FETCH_ASSOC);
		$conn = null;
		return $lastId;
		
	}
	
	public function selectLocationBySession($idsession)
	{
		include ('library/database/dbConnect.php');
		$sth = $conn->prepare('CALL selectLocationBySession(?)');
		//$sth = $conn->prepare('SELECT * FROM location WHERE idsession = 1 order by locationTime');
		$sth->execute(array($idsession));
		$sth->setFetchMode(PDO::FETCH_ASSOC);  
		while($row = $sth->fetch()) {  
			$rows[] = $row;
		}
		
		$conn = null;
		return $rows;
		
	}
}
?>