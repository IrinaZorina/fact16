<?php
$str="abc abc cba";
$result=str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str);
echo $str, "<br>";
print_r($result);
?>