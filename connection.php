<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dhan";
// Create connection
$connection = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($connection->connect_error) {
   die("Connection failed: " . $connection->connect_error);
}
//echo "Connected successfully";
?>