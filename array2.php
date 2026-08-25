<?php
$text = "Learning PHP is fun.";
$search = "PHP";
$position = strpos($text, $search);

echo "The word '" . $search . "' starts at position " . $position . ".";
?>