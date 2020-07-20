<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// sql to create table
$sql = "CREATE TABLE User_DataBase (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(200) NOT NULL,
email VARCHAR(200) NOT NULL,
phonenumber BIGINT(200) NOT NULL,
password VARCHAR(200) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table User_DataBase  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

?>

</body>
</html>