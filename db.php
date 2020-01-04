<?php
$servername="localhost";
$username="root";
$password="";
$db="user";

$connection = mysqli_connect($servername, $username, $password, $db);

if(!$connection){
	
	die("Connection failed: " .mysqli_connect_error()); 
}
?>
