
<?php

include_once './info.php';
include_once './index.php';

$first =$_POST['username'];
$email =$_POST['email'];
$addres =$_POST['addres'];

$sql = "INSERT INTO clients (username, email, addres) VALUES ($first, $email, $addres );";
mysqli_query($conn, $sql);

header('location: ./index.php?signup=success');


