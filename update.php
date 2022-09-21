<?php  
$dbServername ='localhost';
$dbUsername ='root';
$dbPassword = '';
$dbName = 'store';

// $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// Create connection
$conn = new mysqli($dbServername, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE clients SET username='mmm' WHERE id=113";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
