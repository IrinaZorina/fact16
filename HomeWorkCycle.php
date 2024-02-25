<?php
echo"<h1> Task1 Slade 25</h1>". "<br>";

for ($i = 5; $i <= 13; $i++) {
    echo "$i". "<br>";
}
echo "<br>";

echo"<h1> Task2 Slade 25</h1>". "<br>";
$num = 1000;
// $count = 0;
// while (50 < $num) {
//     $num /= 2;
//     $count++;  
// }
// echo "Количество итераций составило: $count";

for ($l = 0; $num > 50; $l++)
    $num /= 2;
echo "Количество итераций составило: $l";


echo"<h1> Task3 Slade 25</h1>". "<br>";

$i = mt_rand(0,10);
$j = 0;
echo "Значение 'i' равно $i: ". "<br>";

if ($i == 0) {
    while ($j <= 10){
        echo "$j".", ";  
        ++$j;
    }
}
elseif ($i == 1) {
    while ($j <= 9){
        echo "$j".", "; 
        ++$j;
    }
}
elseif ($i == 2) {
    while ($j <= 8){
        echo "$j".", ";
        ++$j;
    }
}
elseif ($i == 3) {
    while ($j <= 7){
        echo "$j".", ";
        ++$j;
    }
}
elseif ($i == 4) {
    while ($j <= 6){
        echo "$j".", ";
        ++$j;
    }
}
elseif ($i == 5) {
    while ($j <= 5){
        echo "$j".", ";
        ++$j;
    }
}
elseif ($i == 6) {
    while ($j <= 4){
        echo "$j".", ";
        ++$j;
    }
}
elseif ($i == 7) {
    while ($j <= 3){
        echo "$j".", ";
        ++$j;
    }
}
elseif ($i == 8) {
    while ($j <= 2){
        echo "$j".", ";
        ++$j;
    }
}
elseif ($i == 9) {
    while ($j <= 1){
        echo "$j".", ";
        ++$j;
    }
}
elseif ($i == 10) {
    while ($j == 0){
        echo "$j";
        ++$j;
    }
}