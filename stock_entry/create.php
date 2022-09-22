<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

/* Create connection */
$conn = new mysqli($servername, $username, $password, $dbname);
/* Check connection*/
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* sql to create table */
$sql = "CREATE TABLE Student
(
ID int NOT NULL AUTO_INCREMENT,
product varchar(50),
seller varchar(50),
price int(50),
quantity int(50),
gst int(50),
total int(50),
address varchar(50),
email varchar(50),
PRIMARY KEY (ID)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table test created successfully";
}
else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>


