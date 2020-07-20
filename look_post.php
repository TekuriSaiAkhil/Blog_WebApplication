<!DOCTYPE html>
<html>
<head>
	<title>Look post</title>

	<style type="text/css">
		img{
			width: 40%;
			height: 50%; 
			/*position: absolute;*/
			right: 10px;
			top: 10px;
		}
	</style>
</head>
<body>
<?php
$subject="";
$content="";
$author="";
?>

<?php

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


		$sql = "SELECT * FROM Canvas_DataBase WHERE id=".$_GET['canvas'];
		$result = $conn->query($sql);

   		if ($result->num_rows > 0) {
   			$row = $result->fetch_assoc();
   			$subject = $row['subject'];
   			$content = $row['content'];
   			$author = $row['name'];
   			$image = $row['image'];

		}else {
		  echo "Nothing to show <br>";
		}


$conn->close();
?>





<?php

$canvas_user_php =array();
$canvas_comments_php = array();

$user = $_GET['user'];
echo "<h1>Explore ".$_GET['user']."</h1>";
echo "Sub: ".$subject."<br>";
echo "<p>content: ".$content."</p>";
echo "author: ".$author."<br>";

if($image!=""){
echo "<div id='img_div'>"; 
	echo "<img src='uploads/".$image ."' >";

echo "</div>";
	
}

echo "<h2>Comment </h2>";

		function update_canvas_php(){
			global $canvas_user_php,$canvas_comments_php;

			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "myDB";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection

			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql_get = "SELECT * FROM Comments_DataBase WHERE canvas_id='".$_GET['canvas']."'";
			$result = $conn->query($sql_get);

			if ($result->num_rows > 0) {
				$num_of_canvas = $result->num_rows;

				while($row = $result->fetch_assoc()) {
					
					array_push($canvas_user_php, $row['user']); 
					array_push($canvas_comments_php, $row['comment']); 
				}
			}else {

			}
			$conn->close();
		}



	if($_SERVER["REQUEST_METHOD"] == "POST"){



		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "myDB";
		$conn = new mysqli($servername, $username, $password,$dbname);

		$sql = "INSERT INTO Comments_DataBase (canvas_id,user,comment)
										VALUES ('".$_GET['canvas']."','".$_GET['user']."','".$_POST['comment']."')";



		if ($conn->query($sql) === TRUE) {
		/*echo "New record created successfully";*/
		} else {
		/*echo "Error: " . $sql . "<br>" . $conn->error;*/
		}
		update_canvas_php();

	}else{
		update_canvas_php();
	}


?>

<div id="comments"></div>

<script type="text/javascript">
	function update_comments(a,b){
		for(var k=0;k<a.length;k++){
			console.log(a[k]);
			document.getElementById('comments').innerHTML=document.getElementById('comments').innerHTML+"<p>"+a[k]+": "+b[k]+"</p>";		
		}
	}
	
</script>

<script type="text/javascript">
	var canvas_user = [<?php echo '"'.implode('","', $canvas_user_php).'"' ?>];
	var canvas_comments = [<?php echo '"'.implode('","', $canvas_comments_php).'"' ?>];
	console.log(canvas_user);
	update_comments(canvas_user,canvas_comments);
</script>




<script type="text/javascript">
	var author = "<?php echo $author ?>";
	var user = "<?php echo $user ?>"
</script>


<form method="post">

	<textarea name="comment" id='comment' style="height: 50px; width: 60%"> </textarea><br>

	<input type="submit" value="comment">

</form>


</body>
</html>