<!DOCTYPE html>
<html>
<head>
  <title>Temperature Converter</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #121212;
      color: #eee;
      text-align: center;
      margin-top: 100px;
    }
    form {
      background: #1e1e1e;
      padding: 20px;
      display: inline-block;
      border-radius: 10px;
      box-shadow: 0 0 10px #00bcd4;
    }
    input, select {
      margin: 10px;
      padding: 8px;
      border-radius: 5px;
      border: none;
      outline: none;
    }
    button {
      background-color: #00bcd4;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0097a7;
    }
  </style>
</head>
<body>

<h2>🌡️ Temperature Converter</h2>

<form method="post">
  <input type="number" step="any" name="temp" placeholder="Enter temperature" required>
  <select name="from">
    <option value="C">Celsius (°C)</option>
    <option value="F">Fahrenheit (°F)</option>
   
  </select>
  <select name="to">
    <option value="C">Celsius (°C)</option>
    <option value="F">Fahrenheit (°F)</option>
  
  </select>
  <br>
  <button type="submit">Convert</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $temp = $_POST["temp"];
  $from = $_POST["from"];
  $to = $_POST["to"];
  $result = $temp;

  // Convert input to Celsius first
  if ($from == "F") {
    $tempC = ($temp - 32) * 5 / 9;
  } elseif ($from == "K") {
    $tempC = $temp - 273.15;
  } else {
    $tempC = $temp;
  }

  // Convert Celsius to target unit
  if ($to == "F") {
    $result = ($tempC * 9 / 5) + 32;
  } elseif ($to == "K") {
    $result = $tempC + 273.15;
  } else {
    $result = $tempC;
  }

  echo "<h3>Result: " . round($result, 2) . " °$to</h3>";
}
?>

</body>
</html>

