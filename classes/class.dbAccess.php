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
	
}
?>