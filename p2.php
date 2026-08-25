<?php

$numbers = array(12, 45, 67, 23, 89, 34, 56, 78, 90, 11);

$max = max($numbers);
$min = min($numbers);

echo "Array: " . implode(", ", $numbers) . "<br>";
echo "Maximum number: " . $max . "<br>";
echo "Minimum number: " . $min . "<br>";
?>