<?php
//credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petsit";
$port = 3307;

date_default_timezone_set('Europe/Dublin');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>