<?php
class logic
{
	public function isActiveSession() 
	{
		if ($_SESSION['idsession'] == NULL)
		{
			return 0;
		}
		else
		{
			return $_SESSION['idsession'];
		}
	}
	
	public function newActiveSession($userId) 
	{
		include ('classes/class.dbAccess.php');
		$dbAccess = new dbAccess();
		$idsession = $dbAccess->insertSession($userId);
		return $idsession;
		
	}
}