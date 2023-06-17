<?php
//Create database connection
$db = new mysqli("localhost","root","","ebalafpv_dev");
if (!$db) {
	die("Connection error: " . mysqli_connect_error());
}
?>