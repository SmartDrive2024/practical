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
    if($a%5==0){
        echo " $a  is divisible by 5 ";
    }else{
        echo " $a is not divisible by 5";
    }
?>
</body>
</html>