<?php

// Create connection to DB
$servername = "";
$username = "";
$dbpassword = "";
$dbname = "";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
