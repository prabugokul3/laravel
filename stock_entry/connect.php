<?php
$servername='localhost';
$username='root';
$password='';

$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();
?>