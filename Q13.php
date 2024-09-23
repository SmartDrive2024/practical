<?php
$a = 101456; 
$b = (string)$a;

$middleIndex = floor(strlen($b) / 2);
$middleDigit = $b[$middleIndex];

echo "Middle digit: $middleDigit\n";

if ($middleDigit % 2 === 0) {
    echo "Middle digit is even. Cube: " . pow($middleDigit, 3) . "\n";
} else {
    echo "Middle digit is odd. Square: " . pow($middleDigit, 2) . "\n";
}
?>
