<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vote_eligibility</title>
</head>
<body>
<form method="post">
    Enter a number: <input type="number" name="number">
    <input type="submit">
</form>

<?php

   
    $age = $_POST['number'];
    if ($age >= 18) {
        echo "You are eligible to vote";
    } else {
        echo " you are not eligible to vote ";
    }
?>
</body>
</html>