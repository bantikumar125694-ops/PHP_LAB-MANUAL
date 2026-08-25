<?php
$date1 = date("d-m-y");
$date2 = date("d-m-y");


$date_1 = new dateTime('2026-7-7');
$date_2 = new dateTime('2023-7-7');
$final_date = date_diff($date_1, $date_2);

echo $final_date->format('%y');


?>