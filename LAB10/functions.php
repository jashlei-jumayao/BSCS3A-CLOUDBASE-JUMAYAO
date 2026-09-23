<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $num1 = (int) $_POST['num1'];
    $num2 = (int) $_POST['num2'];
    
    switch(isset($_POST["op"])){
        case 'Sum':
            echo (int) $sum = $num1 + $num2;
            break;
        case 'Subtract':
            echo (int) $difference = $num1 - $num2;
            break;
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num1">
        <br>
        <input type="number" name="num2">
        <br>
        <select name="op" id="">
            <option value="Sum">Add</option>
            <option value="Subtract">Subtract</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>