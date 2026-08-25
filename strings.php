<?php
// strings functions are Built-in functions in PHP that are used to manipulate and work with strings. Here are some commonly used string functions in PHP:
// Investing in string 
// Manupulation: String 

$str1 = "Krishna";
$str2 = "Ramanuj";

echo $str1 . " " . $str2;  
echo "<br>";
print ($str1 . " " . $str2 );

echo "<br>";
echo strlen($str1);


echo "<br>";
$trimString = trim($str1);

echo "<br>";
echo strlen($str1);

echo "<br>";
echo strrev($str1);

echo "<br>";
echo strtolower ($str1);

echo "<br>";
echo strtoupper($str1);

echo "<br>";
echo strcmp($str1,$str2);

echo "<br>";
echo strstr($str1,"h");

echo "<br>";
echo stristr($str2,"a");

echo "<br>";
echo ucfirst("i am student in MU");

echo "<br>";
echo ucwords("i am student in MU");
?>