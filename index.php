<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }
        input, select, button {
            width: 100%;
            padding: 10px 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        button {
            background: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #45a049;
        }
        h2 {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body>

    <form method="POST">
        <input type="number" name="deg" placeholder="enter the degrees" required>
        
        <select name="from">
            <option value="celcious">celcious</option>
            <option value="fahrenheit">fahrenheit</option>
        </select>

        <select name="to">
            <option value="celcious">celcious</option>
            <option value="fahrenheit">fahrenheit</option>
        </select>

        <button type="submit" name="result">submit</button>
    </form>

    <?php
    
    if($_POST["REQUEST_METHOD"]==$_POST){
        $deg=$_POST["deg"];
        $from=$_POST["from"];
        $to=$_POST["to"];
    }
    if($)
    ?>

</body>
</html>
