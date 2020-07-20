<!DOCTYPE html>
<html>
<head>
	<title>Comments</title>
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
$sql = "CREATE TABLE Comments_DataBase (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
canvas_id VARCHAR(200) NOT NULL,
user VARCHAR(200),
comment VARCHAR(20000) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Canvas_DataBase  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

?>



</body>
</html>