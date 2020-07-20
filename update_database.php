<!DOCTYPE html>
<html>
<head>
	<title>update</title>
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
$sql = "DELETE FROM Canvas_DataBase WHERE id=".$_GET['id'];
					#echo $_POST['active_canvas']."<br>";
					if ($conn->query($sql) === TRUE) {
						  #echo "Record deleted successfully";
					} else {
						  #echo "Error deleting record: " . $conn->error;
					}

header("Location: /welcome.php");

?>
</body>
</html>