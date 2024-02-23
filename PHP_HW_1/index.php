<?php
//Задача 1

$a = 4;
while ($a++ < 13) {
    echo $a . "</br>";
}

//Задача 2

$a = 1000;
$i = 0;
while ($a > 50) {
  $a /= 2;
  $i++;
}
echo (int)$a . "</br>";

for ($a = 1000, $i = 0; $a > 50; $a /= 2, $i++);
echo (int)$a . "</br>";

//Задача 3

$i = rand(0, 10);

switch ($i) {
    case 0:
    echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10";
    break;
    
    case 1:
    echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9";
    break;
    
    case 2:
    echo "0, 1, 2, 3, 4, 5, 6, 7, 8";
    break;
    
    case 3:
    echo "0, 1, 2, 3, 4, 5, 6, 7";
    break;
    
    case 4:
    echo "0, 1, 2, 3, 4, 5, 6";
    break;
    
    case 5:
    echo "0, 1, 2, 3, 4, 5";
    break;
    
    case 6:
    echo "0, 1, 2, 3, 4";
    break;
    
    case 7:
    echo "0, 1, 2, 3";
    break;
    
    case 8:
    echo "0, 1, 2";
    break;
    
    case 9:
    echo "0, 1";
    break;
    
    case 10:
    echo "0";
    break;
}