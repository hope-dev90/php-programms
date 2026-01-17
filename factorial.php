<html>
<body>
    <form method="post">
    <input type="number" name="number">
</form>
<?php
if (isset($_POST['number'])) {
 $result =1;
$number = $_POST['number'];
for($i=0;$i<$number;$i++){
   
    $result =$result*$number;
  
}
  echo $result; 
}
?>
</body>
</html>
