<?php
session_start();
$servername = "localhost";
$username	= "badrichowdary_o2life";
$password = "badriO23456";
$db       =  "badrichowdary_o2life";

$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
?>
