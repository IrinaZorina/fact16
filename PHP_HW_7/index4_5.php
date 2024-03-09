<?php
$fn1 = 'file1.txt';
$fn2 = 'file2.txt';

$fd1 = fopen($fn1, "r");
$fd2 = fopen($fn2, "r");

$set1 = array_slice(array_unique(explode("\n", fread($fd1, filesize($fn1)))), 0, -1);
$set2 = array_slice(array_unique(explode("\n", fread($fd2, filesize($fn2)))), 0, -1);

fclose($fd1);
fclose($fd2);

$fd = fopen('file3.txt', "w");

$difference = implode("\n", !empty(array_diff($set1, $set2)) ? array_diff($set1, $set2) : array_diff($set2, $set1));
$intersection = implode("\n", array_intersect($set1, $set2));

fwrite($fd, "--Разность множеств--" . PHP_EOL . $difference . PHP_EOL .
            "--Объединение множеств--" . PHP_EOL . $intersection);

fclose($fd);









