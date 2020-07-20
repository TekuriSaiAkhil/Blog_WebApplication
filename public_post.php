<!DOCTYPE html>
<html>
<head>
	<title>Public Post</title>
</head>
<body>

<h1>What's going on :)</h1><br>
<?php
echo $_GET['user'];
$name = $_GET['user'];
?>
<div id="test"></div>

<script type="text/javascript">
	var temp_i=0;
	var canvas_width = window.innerWidth/3-20;
	var s1 = ' <canvas id="myCanvas_';
	var s2 = '" width="';
	var s3 = '" height="200" onclick="onclick_canvas(myCanvas_'; 
	var s4 = ',event)"style="border:1px solid #000000;">';
	var s5 ='</canvas>';
	var s6 ='<button >Look</button><button >Edit</button>';
	var temp_canvas_subject =[];
	var temp_canvas_content =[];
	var temp_canvas_author=[];
	var colors = ["aqua","AntiqueWhite","DarkGoldenRod","DarkViolet","Khaki","OrangeRed","Pink","Sienna","Yellow","YellowGreen","SpringGreen","Red","PeachPuff","Magenta","LightPink","Indigo","GhostWhite","Bisque"];
			function random(mn, mx) {  
			            return Math.random() * (mx - mn) + mn;  
			}
			function see_post(active_canvas){
				var user = "<?php echo $name ?>";
				window.location.href = "look_post.php?canvas=" + active_canvas+"&user="+user;
			}		

			function onclick_canvas(canvasid,event) {
				//canvas_data[(canvas_id.id).substring(9)]="Hello World";	
				//update_canvas();
				let rect = canvasid.getBoundingClientRect(); 
				var active_canvas = canvas_id[(canvasid.id).substring(9)];
				var x = event.clientX-rect.left;
				var y = event.clientY-rect.top;
				
					console.log("clicked on look");
					see_post(active_canvas);
					document.getElementById('id01').style.display='block';
				
			

			}
			function write_in_canvas() {
				for(var j=0;j<temp_i;j=j+1){
					var canvas = document.getElementById("myCanvas_"+j.toString());
					var ctx = canvas.getContext("2d");
					ctx.font = "30px Arial";
					ctx.color = "red";
					ctx.textAlign = "start";
					ctx.fillStyle = colors[(Math.floor(random(1, colors.length))-1+j) % colors.length];
					ctx.fillRect(0, 0, canvas.width, canvas.height);
					if(temp_canvas_content[j]==""){
						ctx.strokeText(temp_canvas_subject[j], 8, 30);
						ctx.strokeText(temp_canvas_content[j], 10, 80);
						
					}else{
						ctx.strokeText("Subject: "+temp_canvas_subject[j], 8, 30);
						ctx.strokeText("Content: "+temp_canvas_content[j], 8, 80);
						ctx.font = "15px Arial";
						ctx.strokeText("Author: "+temp_canvas_author[j],10,190);
					}
					
					ctx.strokeText("Look",canvas_width-40,190);
			
				}

			}



			function update_canvas(a,b,c,d){
				
			temp_i = a;
			console.log(temp_i);
			document.getElementById('test').innerHTML='';
			for(var k=0;k<temp_i;k++){
				document.getElementById('test').innerHTML=document.getElementById('test').innerHTML+s1+k.toString()+s2+canvas_width+s3+k.toString()+s4+s5;
			}
			temp_canvas_author =b;
			temp_canvas_subject = c;
			temp_canvas_content = d;
			write_in_canvas(); 
		}
</script>




<?php
	$num_of_canvas = 0;
	$canvas_id_php=array();
	$canvas_author_php=array();
	$canvas_subject_php=array(); 
	$canvas_content_php=array();

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


		$sql = "SELECT * FROM Canvas_DataBase WHERE type='on'";
		$result = $conn->query($sql);

   		if ($result->num_rows > 0) {
				$num_of_canvas = $result->num_rows;

				while($row = $result->fetch_assoc()) {
					array_push($canvas_id_php, $row['id']); 
					array_push($canvas_author_php, $row['name']); 
					array_push($canvas_subject_php, $row['subject']); 
					array_push($canvas_content_php, $row['content']); 
				}
		}else {
		  echo "Nothing to show <br>";
		}


$conn->close();
?>


<script type="text/javascript">
	var i = "<?php echo $num_of_canvas ?>";
	var canvas_id = [<?php echo '"'.implode('","', $canvas_id_php).'"' ?>];
	var canvas_author = [<?php echo '"'.implode('","', $canvas_author_php).'"' ?>];
	var canvas_subject = [<?php echo '"'.implode('","', $canvas_subject_php).'"' ?>];
	var canvas_content = [<?php echo '"'.implode('","', $canvas_content_php).'"' ?>];
	update_canvas(i,canvas_author,canvas_subject,canvas_content);
</script>
</body>
</html>