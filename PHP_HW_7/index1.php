<?php
$str2 = file_get_contents('hello.txt');
echo $str2;
echo "<br>";
$str2 .= "Hello there! I'm Igor";
$str2 = file_put_contents('hello.txt', $str2);