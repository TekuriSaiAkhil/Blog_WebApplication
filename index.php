<!DOCTYPE html>
<html>
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
<body>




<h1>Registration Form</h1>
<div class="container">
<form method="post" action="insert_user_data.php">
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
      <label for="fname">E-Mail</label>
    </div>
    <div class="col-75">
     <input type="text" name="email"><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Phone Number</label>
    </div>
    <div class="col-75">
      <input type="text" name="phonenumber"><br>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Password</label>
    </div>
    <div class="col-75">
      <input type="password" name="password"><br>
    </div>
  </div>
    
<!-- 	Name: <input type="text" name="name"><br>
	<br>
	E-mail: <input type="text" name="email"><br>
	<br>
	Phone Number: <input type="text" name="phonenumber"><br>
	<br>
	Password: <input type="password" name="password"><br>
	<br>
	<input type="submit"> -->
  <div class="row">
   <input type="submit">
  </div>
	
</form>

</div>
<br>
<br>


<h3>Already have account?</h3>
<a href='login.php'>Login</a>

</body>
</html>