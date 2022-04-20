<?php

session_start();

$db_host = "127.0.0.1";
$db_name = "astoncv";
$username = "u-210156416";
$password = "TrNLBVMoENmmV4x";

try {
	$db = new PDO("mysql:dbname=$db_name;host=$db_host", $username, $password); 
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
	echo("Failed to connect to the database.<br>");
	echo($ex->getMessage());
	exit;
}

$con= mysqli_connect($db_host, $username, $password, $db_name );

if(!$con){
	die("Connection failed: " . mysqli_connect_error());
}

?>



