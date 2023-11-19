<?php
$servername = "localhost";
$username = "localhost";
$dbname="garbagedb";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $dbname, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
