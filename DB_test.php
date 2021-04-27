<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connection successfully established!" . "<br/>";

//create database
$sql = "CREATE DATABASE DB_test";
if(mysqli_query($conn, $sql)){
	echo "Database was successfully created.";
} else {
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$conn -> close();
?>
