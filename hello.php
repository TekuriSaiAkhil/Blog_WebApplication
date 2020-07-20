<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
  function add($a, $b) {
    return $a+$b;
  }
  function multiply($a, $b) {
    return $a*$b;
  }
  if($_GET['action'] == "add") {
    echo add($_GET['a'], $_GET['b']);
    
  } else if($_GET['action'] == "multiply") {
    echo multiply($_GET['a'], $_GET['b']);
  }


 ?>
</body>
</html>