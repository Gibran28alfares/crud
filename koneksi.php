<?php
$servername = "localhost";
$database = "arkademy";
$username = "root";
$password = "";

// Create connection

$mysqli = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$mysqli) {

    die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
mysqli_close($mysqli);
?>