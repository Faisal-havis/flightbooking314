<?php

$servername = "eu-cdbr-west-03.cleardb.net";
$username = "ba0024583dcfbd";
$password = "60719ae6";
$dbname = "heroku_81c3ead9329502b";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} 
?>
