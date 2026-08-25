<?php

echo "=== Using For Loop ===<br>";
echo "Numbers from 5 to 10:<br>";

for ($i = 5; $i <= 10; $i++) {
    echo $i . "<br>";
}

echo "=== Using Foreach Loop ===<br>";
echo "Numbers from 5 to 10:<br>";

$numbers = range(5, 10);

foreach ($numbers as $num) {
    echo $num . "<br>";
}
?>