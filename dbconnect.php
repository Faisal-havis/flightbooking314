<?php

$servername = "eu-cdbr-west-03.cleardb.net";
$username = "ba0024583dcfbd";
$password = "60719ae6";
$dbname = "airlines2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
