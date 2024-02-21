<?php
// error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
// $username = "u835838996_webdurga";
// $password = "Durga@7248";

// Create connection
$dbconn = new mysqli($servername, $username, $password);
// Check connection
if ($dbconn->connect_error) {
  die("Connection failed: " . $dbconn->connect_error);
}

// Create database
// $dbname = "u835838996_webdurga";
$dbname = "webdurga_database";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $conn->close();
?>