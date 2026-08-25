<?php

echo "=== Combined Month Program ===<br><br>";

$monthNum = date("n");
$monthName = date("F");
$fullDate = date("jS F, Y");

echo "Today's Date: $fullDate<br>";
echo "Month Number: $monthNum<br><br>";

echo "--- Using If-Else ---\n <br>";

if ($monthNum == 1) {
    $monthIfElse = "January";
} elseif ($monthNum == 2) {
    $monthIfElse = "February";
} elseif ($monthNum == 3) {
    $monthIfElse = "March";
} elseif ($monthNum == 4) {
    $monthIfElse = "April";
} elseif ($monthNum == 5) {
    $monthIfElse = "May";
} elseif ($monthNum == 6) {
    $monthIfElse = "June";
} elseif ($monthNum == 7) {
    $monthIfElse = "July";
} elseif ($monthNum == 8) {
    $monthIfElse = "August";
} elseif ($monthNum == 9) {
    $monthIfElse = "September";
} elseif ($monthNum == 10) {
    $monthIfElse = "October";
} elseif ($monthNum == 11) {
    $monthIfElse = "November";
} elseif ($monthNum == 12) {
    $monthIfElse = "December";
}

echo "Month (if-else): $monthIfElse<br><br>";

echo "--- Using Switch Case --- \n <br>";

switch ($monthNum) {
    case 1:
        $monthSwitch = "January";
        break;
    case 2:
        $monthSwitch = "February";
        break;
    case 3:
        $monthSwitch = "March";
        break;
    case 4:
        $monthSwitch = "April";
        break;
    case 5:
        $monthSwitch = "May";
        break;
    case 6:
        $monthSwitch = "June";
        break;
    case 7:
        $monthSwitch = "July";
        break;
    case 8:
        $monthSwitch = "August";
        break;
    case 9:
        $monthSwitch = "September";
        break;
    case 10:
        $monthSwitch = "October";
        break;
    case 11:
        $monthSwitch = "November";
        break;
    case 12:
        $monthSwitch = "December";
        break;
    default:
        $monthSwitch = "Invalid";
}

echo "Month (switch): $monthSwitch<br><br>";

echo "--- Result ---\n <br>" ;
echo "Build-in date(): $monthName<br>";
echo "if-else result: $monthIfElse<br>";
echo "switch result: $monthSwitch<br>";
?>