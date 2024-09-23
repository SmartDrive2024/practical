<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>palindrome</title>
</head>
<body>
<form method="post">
    Enter a number: <input type="number" name="number">
    <input type="submit">
</form>

<?php

   
    $a = $_POST['number'];
    if (strlen((string)$a) == 4) {
        echo "$a is a four-digit number.";
    } else {
        echo "$a is not a four-digit number.";
    }
?>
</body>
</html>