<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greatest</title>
</head>
<body>
<form method="post">
    Enter First number: <input type="number" name="number"><br><br>
    Enter second number: <input type="number" name="number1"> <br><br>
    Enter Third number: <input type="number" name="number2"><br><br>
    <input type="submit">
</form>

<?php

   
    $a = $_POST['number'];
    $b = $_POST['number1'];
    $c = $_POST['number2'];

    if ($a > $b && $a > $c) {
        echo "$a is the greatest.";
    } elseif ($b > $a && $b> $c) {
        echo "$b is the greatest.";
    } else {
        echo "$c is the greatest.";
    }
?>
</body>
</html>

