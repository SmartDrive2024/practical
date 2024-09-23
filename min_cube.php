<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>min_cube</title>
</head>
<body>
<form method="post">
    Enter First  number: <input type="number" name="number"><br><br>
    Enter second number: <input type="nuber" name="vs" ><br><br>
    <input type="submit">
</form>

<?php

   
    $a = $_POST['number'];
    $b = $_POST['vs'];
    $min=min($a,$b);
    $cube=$min*$min*$min;
    echo "$min the minimum number cube $cube";
   
?>
</body>
</html>