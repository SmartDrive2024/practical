<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>positive_negative</title>
</head>
<body>
<form method="post">
    Enter a number: <input type="number" name="number">
    <input type="submit">
</form>

<?php

   
    $a = $_POST['number'];
    if ($a > 0) {
        echo "$a is positive.";
    } elseif ($a < 0) {
        echo "$a is negative.";
    } else {
        echo "$a is zero.";
    }
?>
</body>
</html>