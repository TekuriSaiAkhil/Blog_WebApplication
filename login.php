<?php session_start();
      //Put session start at the beginning of the file
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  
  <head>
  
  <style>
* {
  box-sizing: border-box;
  align-content: center;
}

input[type=text],input[type=password], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;
  margin: auto;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
body {
    text-align: center;
}

</style>
</head>
</head>
<body>

<?php
// define variables and set to empty values
$name = $pass = "";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";


/*$servername = "sql301.epizy.com";
$username = "epiz_26065905";
$password = "Uta0hiL7dD";
$dbname = "epiz_26065905_myDB";*/
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $pass = test_input($_POST["pass"]);
  $sql = "SELECT * FROM User_DataBase WHERE name='".$name."'";
  $result = $conn->query($sql);
   if ($result->num_rows > 0) {
   		$_SESSION['user'] = $result->fetch_assoc();
   		if(($_SESSION['user'])['password'] == $pass){
	  		echo "User Found <br>";
	  		 
	  		header("Location: /welcome.php");   			
   		}else{
   			echo "password incorrect<br>";
   		}

	}else {
	  echo "User Not Found <br>";
	}
}

$conn->close();
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<h1>Login Form</h1>
<div class="container">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="row">
    <div class="col-25">
      <label for="fname">Name</label>
    </div>
    <div class="col-75">
     <input type="text" name="name"><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Password</label>
    </div>
    <div class="col-75">
      <input type="password" name="pass"><br>
    </div>
  </div>
  <div class="row">
   <input type="submit">
  </div>
  
<!-- 	Name: <input type="text" name="name"><br>
	<br>
	Password: <input type="password" name="pass"><br>
	<br>
	<input type="submit"> -->
</form>
</div>
</body>
</html>