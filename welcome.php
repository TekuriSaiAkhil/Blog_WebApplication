<?php session_start();
      //Put session start at the beginning of the file
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>

	<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width :200px;

}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
.button5 {border-radius: 50%;}
</style>


<style >
	.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 0px;
  width: 30%;
  margin: right;
  float: right;
  position: sticky;
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

</style>

<style> 
    
    /*assign full width inputs*/ 
    #subject {
         width: 100%; 
        padding: 12px 20px; 
        margin: 8px 0; 
        display: inline-block; 
        border: 1px solid #ccc; 
        box-sizing: border-box;  	
    } 
    #content { 
        width: 100%; 
        padding: 12px 20px; 
        margin: 8px 0; 
        display: inline-block; 
        border: 1px solid #ccc; 
        box-sizing: border-box; 
        height: 300px;
        align-content: left;
        

    } 
    
    /*set a style for the buttons*/ 
    button { 
        background-color:lightblue; 
        color: white; 
        padding: 14px 20px; 
        margin: 8px 0; 
        border: none; 
        cursor: pointer; 
        width: 100%; 
    } 
    
    /* set a hover effect for the button*/ 
    button:hover { 
        opacity: 0.8; 
    } 
    
    /*set extra style for the cancel button*/ 
    .cancelbtn { 
        width: auto; 
        padding: 10px 18px; 
        background-color: #f44336; 
    } 
    
    /*centre the display image inside the container*/ 
    .imgcontainer { 
        text-align: center; 
        margin: 24px 0 12px 0; 
        position: relative; 
    } 
    
    /*set image properties*/ 
    img.avatar { 
        width: 40%; 
        border-radius: 50%; 
    } 
    
    /*set padding to the container*/ 
    .container { 
        padding: 16px; 
    } 
    
    /*set the forgot password text*/ 
    span.psw { 
        float: right; 
        padding-top: 16px; 
    } 
    
    /*set the Modal background*/ 
    .modal { 
        display: none; 
        position: fixed; 
        z-index: 1; 
        left: 0; 
        top: 0; 
        width: 100%; 
        height: 100%; 
        overflow: auto; 
        background-color: rgb(0, 0, 0); 
        background-color: rgba(0, 0, 0, 0.4); 
        padding-top: 60px; 
    } 
    
    /*style the model content box*/ 
    .modal-content { 
        background-color: #fefefe; 
        margin: 5% auto 15% auto; 
        border: 1px solid #888; 
        width: 80%; 
    } 
    
    /*style the close button*/ 
    .close { 
        position: absolute; 
        right: 25px; 
        top: 0; 
        color: #000; 
        font-size: 35px; 
        font-weight: bold; 
    } 
    
    .close:hover, 
    .close:focus { 
        color: red; 
        cursor: pointer; 
    } 
    
    /* add zoom animation*/ 
    .animate { 
        -webkit-animation: animatezoom 0.6s; 
        animation: animatezoom 0.6s 
    } 
    
    @-webkit-keyframes animatezoom { 
        from { 
            -webkit-transform: scale(0) 
        } 
        to { 
            -webkit-transform: scale(1) 
        } 
    } 
    
    @keyframes animatezoom { 
        from { 
            transform: scale(0) 
        } 
        to { 
            transform: scale(1) 
        } 
    } 
    
    @media screen and (max-width: 300px) { 
        span.psw { 
            display: block; 
            float: none; 
        } 
        .cancelbtn { 
            width: 100%; 
        } 
    } 

<style>
.btn-group button {
  background-color: red; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  width: 50%; /* Set a width if needed */
  display: block; /* Make the buttons appear below each other */
}

.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
</style> 




<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  margin: auto;

}
li {
  float: left;
}
li button {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li button:hover {
  background-color: #555;
  color: white;
}
</style>


</head>
<body style="background: lightblue;">

<?php
$name = $email = "";
/*$subject = $content ="";*/

$name = ($_SESSION['user'])['name'];
$email = ($_SESSION['user'])['email'];
 
echo "<h2>Welcome to your blog '".$name."'</h2>";
echo "<h2> Let the world know what's on your mind </h2>";


?>
<script type="text/javascript">
	function logout(){
		window.location="login.php";  
	}
	function public_post(){
		var user = "<?php echo $name ?>";
		window.location="public_post.php?user="+user;
	}
	function see_post(active_canvas){
		var user = "<?php echo $name ?>";
		console.log(user);
		window.location.href = "look_post.php?canvas=" + active_canvas+"&user="+user; 
	}

	function update_database(active_canvas){
		window.location="update_database.php?id="+active_canvas;

	}
</script>
<ul>
  <!-- <li><button onclick="Add_canvas()" >Add Post</button></li> -->
  <li><button onclick="public_post()">Public Posts</button></li>
  
</ul>

<button class="button button5" onclick="logout()" style="position: absolute; right: 0; top: 0">Logout</button><br>

<!-- <button class="button button1" onclick="Add_canvas()">Add_canvas</button>

<button class="button button2" style="float: right;" onclick="public_post()">Public Posts</button> -->

<br>

<div class="container" style="position: sticky; top: 10px;">
<form id = "postform" method="post" enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	            <input type="hidden" name="temp_i" id="temp_i">
            	<input type="hidden" name="i" id="i">
            	<input type="hidden" name="active_canvas" id="active_canvas">
  <div class="row">
    <div class="col-25">
      <label for="fname">Subject</label>
    </div>
    <div class="col-75">
      <input type="text" placeholder="Subject"  id="subject" name='subject'> 
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Content</label>
    </div>
    <div class="col-75">
     <textarea type="text" name="content" placeholder="What's in your mind ..?" id="content" style="width: 100%" style="height: 500px" required> </textarea>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Images</label>
    </div>
    <div class="col-75">
       <input type="file" name="image" id="image" />
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="fname">Make it public</label>
    </div>
    <div class="col-75">
      <input type="checkbox" id="public" name="public">
    </div>
  </div>


  <div class="row">
   <input type="submit" value="Post" onclick="send_values()">
  </div>
  </div>

</form>
</div>
<br>
<div id="test" style="margin: auto;"></div>

<?php
	$num_of_canvas = 0;
	$canvas_id_php=array();
	$canvas_images_php = array();
	$canvas_subject_php=array(); 
	$canvas_content_php=array();
	$canvas_type_php=array();
?>
<script type="text/javascript">
	var temp_i=0;
	var canvas_width = window.innerWidth/2;
	var s1 = ' <canvas id="myCanvas_';
	var s2 = '" width="';
	var s3 = '" height="200" onclick="onclick_canvas(myCanvas_'; 
	var s4 = ',event)"style="border:1px solid #000000;">';
	var s5 ='</canvas>';
	var s6 ='<button >Look</button><button >Edit</button>';
	var temp_canvas_subject =[];
	var temp_canvas_content =[];
	var temp_canvas_type=[];
	var temp_canvas_images=[];
	var active_canvas=-1;
	var i=0;
	var colors = ["aqua","AntiqueWhite","DarkGoldenRod","DarkViolet","Khaki","OrangeRed","Pink","Sienna","Yellow","YellowGreen","SpringGreen","Red","PeachPuff","Magenta","LightPink","Indigo","GhostWhite","Bisque"];

	function Add_canvas() {
		if(temp_i==i){
		temp_canvas_subject[temp_i]='';
		temp_canvas_content[temp_i]='';
		temp_canvas_type[temp_i]='';
        document.getElementById('test').innerHTML=document.getElementById('test').innerHTML+s1+temp_i.toString()+s2+canvas_width+s3+temp_i.toString()+s4+s5;
        temp_i=temp_i+1;
        update_canvas();			
		}

	}

	function onclick_canvas(canvasid,event) {
		//canvas_data[(canvas_id.id).substring(9)]="Hello World";	
		//update_canvas();
		let rect = canvasid.getBoundingClientRect(); 
		active_canvas = canvas_id[(canvasid.id).substring(9)];
		var x = event.clientX-rect.left;
		var y = event.clientY-rect.top;
		if(y<15 && x>=canvas_width-45){
			console.log("clicked on delete");
			console.log(active_canvas);
			update_database(active_canvas);
			//document.getElementById("postform").reset();
			//document.getElementById('id01').style.display='block';
		}else {
			console.log("clicked on look");
			see_post(active_canvas);
			document.getElementById('id02').style.display='block';
		}
	

	}

	function random(mn, mx) {  
		return Math.random() * (mx - mn) + mn;  
	}
				function make_base(j)
				{
				var canvas = document.getElementById("myCanvas_"+j.toString());
			    var ctx = canvas.getContext("2d");
				base_image = new Image();
  				base_image.src = "uploads/"+temp_canvas_images[j];
  				console.log("uploads/"+temp_canvas_images[j]);
				base_image.onload = function(){
					ctx.drawImage(base_image, 0, 0,20,20);
				}
				
				   
				  
				}

	function update_canvas() {
		for(var j=0;j<temp_i;j=j+1){
			var canvas = document.getElementById("myCanvas_"+j.toString());
			var ctx = canvas.getContext("2d");
			ctx.font = "30px Arial";
			ctx.color = "red";
			ctx.textAlign = "start";
			ctx.fillStyle = colors[Math.floor(random(1, colors.length))-1];
			ctx.fillRect(0, 0, canvas.width, canvas.height);
			
			if(temp_canvas_content[j]==""){
				ctx.strokeText(temp_canvas_subject[j], 8, 30);
				ctx.strokeText(temp_canvas_content[j], 10, 80);
				
			}else{
				ctx.strokeText("Subject: "+temp_canvas_subject[j], 8, 30);
				ctx.strokeText("Content: "+temp_canvas_content[j], 8, 80);
			}
			
			ctx.font = "15px Arial";
			if(temp_canvas_images[j]!=""){
				ctx.strokeText("Attachment",60,190);	
			}
			
			if(temp_canvas_type[j]=='on'){
				ctx.strokeText("public",10,190);
			}else{
				ctx.strokeText("private",10,190);
			}
			ctx.strokeText("delete",canvas_width-45,15)
			ctx.strokeText("Look",canvas_width-80,190);
			ctx.strokeText("Edit",canvas_width-40,190);
			
		}

	}
		function add_data() {
			var a=document.getElementById('subject').value;
			var b=document.getElementById('content').value;
			canvas_subject[active_canvas]=a;
			canvas_content[active_canvas]=b;
			document.cookie = "subject="+a;
			document.cookie = "content="+b;
			location.reload();
			update_canvas();
		}

		function update_canvas_with_database(a,b,c,d,e){
				
			temp_i = a;
			console.log(temp_i);
			document.getElementById('test').innerHTML='';
			for(var k=0;k<temp_i;k++){
				document.getElementById('test').innerHTML=document.getElementById('test').innerHTML+s1+k.toString()+s2+canvas_width+s3+k.toString()+s4+s5;
			}
			temp_canvas_subject = b;
			temp_canvas_content = c;
			temp_canvas_type =d;
			temp_canvas_images = e;
			update_canvas(); 
		}

</script>



<?php



		function add(){
				global $name;
				$msg="";
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

				#echo $_POST['temp_i']."<br>";
				#echo $_POST['i']."<br>";
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
			
				$target = "uploads/".basename($_FILES['image']['name']);

				

				$image = $_FILES['image']['name'];
				
				$content_posted = preg_replace( "/\r|\n/", "", $_POST['content'] );
				
/*				echo $_POST['temp_i1'];
				echo $_POST['i1']; 
				if($_POST['temp_i']==$_POST['i']){*/

					$sql = "INSERT INTO Canvas_DataBase (name,subject,content,type,image)
								VALUES ('".$name."','".$_POST['subject']."','".$content_posted."','".$_POST['public']."','$image')";

					#echo $sql . "<br>";
					if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
						$msg="image uploded"; 
					}else{
						$msg="there is a problem uploding";
					}

					if ($conn->query($sql) === TRUE) {

					  #echo "New record created successfully";
					} else {
					  #echo "Error: " . $sql . "<br>" . $conn->error;
					}	
/*				}else{
					$sql = "DELETE FROM Canvas_DataBase WHERE id=".$_POST['active_canvas'];
					#echo $_POST['active_canvas']."<br>";
					if ($conn->query($sql) === TRUE) {
						  #echo "Record deleted successfully";
					} else {
						  #echo "Error deleting record: " . $conn->error;
					}
					$sql = "INSERT INTO Canvas_DataBase (name,subject,content,type)
								VALUES ('".$name."','".$_POST['subject']."','".$_POST['content']."','".$_POST['public']."')";

					#echo $sql . "<br>";

					if ($conn->query($sql) === TRUE) {
					  #echo "New record created successfully";
					} else {
					  #echo "Error: " . $sql . "<br>" . $conn->error;
					}

				}*/
				

				$conn->close();

		}

		function update_canvas_php(){
			global $name,$canvas_subject_php,$canvas_content_php,$canvas_type_php,$num_of_canvas,$canvas_id_php,$canvas_images_php;

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

			$sql_get = "SELECT * FROM Canvas_DataBase WHERE name='".$name."'";
			$result = $conn->query($sql_get);

			if ($result->num_rows > 0) {
				$num_of_canvas = $result->num_rows;

				while($row = $result->fetch_assoc()) {
					array_push($canvas_id_php, $row['id']); 
					array_push($canvas_subject_php, $row['subject']); 
					array_push($canvas_content_php, $row['content']);
					array_push($canvas_type_php, $row['type']); 
					array_push($canvas_images_php, $row['image']);
				}
			}else {

			}
			$conn->close();
		}

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		add();	
		update_canvas_php();
		

	}else{
		update_canvas_php();
	}		
		
?>

<script type="text/javascript">
				
				i = "<?php echo $num_of_canvas ?>";
				var canvas_id = [<?php echo '"'.implode('","', $canvas_id_php).'"' ?>];
				var canvas_subject = [<?php echo '"'.implode('","', $canvas_subject_php).'"' ?>];
				var canvas_content = [<?php echo '"'.implode('","', $canvas_content_php).'"' ?>];
				var canvas_type = [<?php echo '"'.implode('","', $canvas_type_php).'"' ?>];
				var canvas_images = [<?php echo '"'.implode('","', $canvas_images_php).'"' ?>];
				//canvas_subject = "<?php echo $canvas_subject_php ?>";
				//canvas_content = "<?php echo $canvas_content_php ?>";
				update_canvas_with_database(i,canvas_subject,canvas_content,canvas_type,canvas_images);	

				function send_values(){
					document.getElementById('temp_i1').value=temp_i;
					document.getElementById('i1').value=i;
					document.getElementById('active_canvas1').value=active_canvas;
					
				}
</script>

  





 
</body> 
</html>