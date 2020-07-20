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
$sql = "CREATE TABLE Canvas_DataBase (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(200) NOT NULL,
subject VARCHAR(200),
content VARCHAR(20000) NOT NULL,
type VARCHAR(200),
image LONGBLOB NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
  echo "Table Canvas_DataBase  created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

?>

</body>
</html>