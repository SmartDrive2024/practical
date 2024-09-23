<?php
$Two_digit = 43; 
$s = (string)$Two_digit;

if ($Two_digit % 2 === 0) {
    echo " Even....First digit: {$s[0]}\n";
} else {
    echo " Odd.....Second digit: {$s[1]}\n";
}
?>
