<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="cricket";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{

	// echo "Connection ok";
}
else
{
	echo "Connectoin failed".mysql_connect_error();
}


?>