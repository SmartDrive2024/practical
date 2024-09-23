<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>greatest</title>
</head>
<body>
<form method="post">
    Enter First subject Number: <input type="number" name="number"><br><br>
    Enter second subject Number: <input type="number" name="number1"> <br><br>
    Enter Third subject Number : <input type="number" name="number2"><br><br>
    <input type="submit">
</form>

<?php

   
    $a = $_POST['number'];
    $b = $_POST['number1'];
    $c = $_POST['number2'];
$average=($a+$b+$c)/3;
if ($average < 40) {
    echo "Average: $average (Poor)";
} elseif ($average < 80) {
    echo "Average: $average (Fair)";
} elseif ($average < 90) {
    echo "Average: $average (Good)";
} else {
    echo "Average: $average (Excellent)";
}
?>
</body>
</html>

