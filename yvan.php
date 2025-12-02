<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form action="" method="POST">
        <label>enter number 1</label>
        <input type="text" name="number1">
        <input type="text" name="number2">
        <button type="submit">calculate</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]==$_POST){
$number1=$_POST['number1'];
$number2=$_POST['number2'];
if($number1%2==0 && $number2%2==0){

    $result=$number1+$number2;

}
elseif($number1%2!=0 && $number2%2!=0){
    $result=$number1*$number2;
}
else{
    $result="not supported";
}
echo"$result";
}
?>
</body>
</html>