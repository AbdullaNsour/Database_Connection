<?php
$dbServername ='localhost';
$dbUsername ='root';
$dbPassword = '';
$dbName = 'store';

// Create connection
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO clients (username, email, addres )
VALUES ('hala','hala@example.com', 'Aqaba' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>