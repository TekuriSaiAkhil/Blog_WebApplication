<!DOCTYPE html>
<html>
<head>
	<title>insert_user_data</title>
</head>
<body>
<?php session_start();
      //Put session start at the beginning of the file
?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Canvas_DataBase (name,subject,content)
			VALUES ('name','sub','con')";

echo $sql . "<br>";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





</body>
</html>
