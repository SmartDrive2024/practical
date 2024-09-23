<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divisible_3 and 7</title>
</head>
<body>
<form method="post">
    Enter a number: <input type="number" name="number">
    <input type="submit">
</form>

<?php

   
    $a = $_POST['number'];
    if($a%3==0 && $a%7==0){
        echo " $a  is divisible by 3 and 7";
    }else{
        echo " $a is not divisible 5 and 7";
    }
?>
</body>
</html>