<?php
$servername = "107.180.20.90";
$username = "deviantOne";
$password = "kgD@XdowYDXTU4";

try {
	$conn = new PDO("mysql:host=$servername;dbname=DeviousTenants", $username, $password);
	//set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected successfully";
	}
catch(PDOException $e)
	{
	echo "Connection failed: " . $e->getMessage();
	}
?>