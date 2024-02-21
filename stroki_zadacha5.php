<?php
$date1=date_create("10-02-2014");
$date2=date_create("10-02-2015");
$result=date_diff($date1,$date2);
echo "Количество дней: ". $result->days;
?>