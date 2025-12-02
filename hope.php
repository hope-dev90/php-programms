<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quadratic Solver</title>
</head>
<body>

  <form action="" method="POST">
    <input type="text" name="a" placeholder="enter a">
    <input type="text" name="b" placeholder="enter b">
    <input type="text" name="c" placeholder="enter c">  
    <button type="submit">solve</button>
  </form>

  <?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){

      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];

      $disc = $b**2 - 4*$a*$c;

      if($disc < 0){
          echo "No real solutions (discriminant is negative)";
      } else {
          $x1 = (-$b + sqrt($disc)) / (2 * $a);
          $x2 = (-$b - sqrt($disc)) / (2 * $a);

          echo "x1 = $x1<br>";
          echo "x2 = $x2<br>";
      }
  }
  ?>
</body>
</html>
