<?php
$fileName = "name.txt";
$fd = fopen($fileName, "w");
fwrite($fd, "Игорь;Усов;+7(919)125-87-78, brutalraynor@gmail.com");
fclose($fd);

$fd = fopen($fileName, "r");
echo implode(" ", array_slice(explode(";", fread($fd, filesize($fileName))), 0, -1));
fclose($fd);








