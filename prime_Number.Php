<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime_Number</title>
</head>
<body>
<form method="post">
    Enter a number: <input type="number" name="number">
    <input type="submit">
</form>
<?php
      $a = $_POST['number'];
      $f=0;
    
for($i=2;$i<=$a;$i++){ 
    if($a % 2==0){

   $f=1;
   break;
}
}
if($f==0){
    echo " Prime Number: ";
}else{
    echo " Not Prime Number: ";
}

  ?>
</body>
</html>
