<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divisible_5</title>
</head>
<body>
<form method="post">
    Enter a number: <input type="number" name="number">
    <input type="submit">
</form>

<?php

   
    $a = $_POST['number'];
    $b = (string)$a;

    $firstDigit = $b[0];
    $lastDigit = $b[strlen($b) - 1];
    
    echo "First digit: $firstDigit\n";
    echo "Last digit: $lastDigit\n";

?>
</body>
</html>