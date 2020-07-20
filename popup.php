<!DOCTYPE html> 
<html> 
      
<head> 

</head> 
  
<body> 
<?php
function add($a,$b){
  $c=$a+$b;
  return $c;
}
?>
<script>
function phpadd() {
  var phpadd = <?php echo add(1,2);?> //call the php add function
  alert(phpadd);
}
</script>

<button onclick='phpadd()'>add</button>
</body> 
  
</html> 