<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
          echo calculate();
}
function calculate(){
    $num1 = (int) $_POST['num1'];
    $num2 = (int) $_POST['num2'];
    switch($_POST['op']){
        case 'Sum':
            return $num1 + $num2;
            break;  
        case 'Sub':
            return $num1 - $num2;
            break;
        case 'Mult':
            return $num1 * $num2;
            break;
        case 'Div':
            return $num1 / $num2;
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
        <input type="number" name="num1" placeholder="First Number">
        <input type="number" name="num2" placeholder="Second Number">
        <br>
        <select name="op" id="">
            <option value="Sum">Add</option>
            <option value="Sub">Subtract</option>
            <option value="Mult">Multiply</option>
            <option value="Div">Divide</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
</body>
</html>