<?php

// single dimensional array
// index Arrays

$array_one = array("one","two","three");
$array_two = array("four","five",6,7,8);


// Extracting values from array
// Traversing an array using for loop

foreach($array_one as $key => $one) {
    echo $key . " => " . $one;
    echo "<br>";
}


echo "<pre>";
print_r($array_one);
print_r($array_two);
print_r("HELLO");

echo "HELLO";

print "HELLO";
echo "</pre>";


// array functions (push)

echo "<pre>";
print_r(array_push($array_one,"krishna"));
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";


// array functions (pop)

echo "<pre>";
print_r(array_pop($array_one));
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";


// array functions (merge)

echo "<pre>";
print_r(array_merge($array_one, $array_two));
echo "</pre>";


// array functions (flip)

echo "<pre>";
print_r(array_flip($array_one));
echo "</pre>";

// array functions (flip)

echo "<pre>";
print_r(array_flip($array_one));
echo "</pre>";








?>