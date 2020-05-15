<?php

$HOST = 'localhost';
$USER = 'admin';
$PASS = 'P@ssw0rd';
$DB   = 'nicolasayusobernal';

$con = new mysqli($HOST,$USER, $PASS, $DB);
// Check connection
if ($this->con->connect_error)
{
	die('Conection failed: '. $this->con->connect_error);
}

$sql = "SELECT * datos ORDER BY date DESC LIMIT 1";
$result = $con->query($sql);
if(!$result)
{
	$result = NULL;
}else{
	if (isset($result->num_rows) && $result->num_rows > 0){
		while($row = $result->fetch_assoc())
		{
			$result[] = $row;
		}
		$result = $result;
	}else
	{
		$result = NULL;
	}
}
$con->close();

?>

