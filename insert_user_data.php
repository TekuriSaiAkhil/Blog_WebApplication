<!DOCTYPE html>
<html>
<head>
	<title>insert_user_data</title>
</head>
<body>


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

$sql = "INSERT INTO User_DataBase (name,email,phonenumber,password)
VALUES ('".$_POST["name"]."','".$_POST["email"]."',".$_POST["phonenumber"].",'".$_POST["password"]."')";

echo $sql . "<br>";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
header("Location: /login.php");
exit();
?>



</body>
</html>
