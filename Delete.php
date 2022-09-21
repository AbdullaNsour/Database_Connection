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

// sql to delete a record
$sql = "DELETE FROM clients WHERE id=113";

if ($conn->query($sql) === TRUE) {
  echo "Deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>