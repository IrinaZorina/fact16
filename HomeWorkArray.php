<?php

echo"<h1> Task1 Slade 15</h1>". "<br>";

$result = 0;
$arr = array(50, 45, 40, 35, 30);
for ($i = 0; $i < count($arr); $i++){
    $result += $arr[$i];
}
echo"Result = $result". "<br>";

echo"<h1> Task2 Slade 15</h1>". "<br>";

$len = 10;
for ($i = 0; $i < $len; $i++){
    $arr[$i] = mt_rand(-100,100);
}
print_r($arr);
echo "<br>";
for ($j = 0; $j < $len; $j++){
    $arr2[$j] = $arr[--$i];
} 
print_r($arr2);
echo "<br>";

echo"<h1> Task3 Slade 15</h1>". "<br>";

$arrPIC = array("1.png","2.png","3.png");  // Создаем массив
$randPIC = $arrPIC[mt_rand($i, count($arrPIC) - 1)];  // Задаем генерацию случайного значения от i = 0 до длинны массива -1 что будет соответствовать i = 2
echo "<img src = 'assets/img/$randPIC' alt = 'Loading'> " . "<br>"; // Задаем адрес хранения изображений

echo"<h1> Task4 Slade 15</h1>". "<br>";

$maxOTR = -100;
$minPOL = 100;
$lenarr = 10;
for ($l = 0; $l < $lenarr; $l++){
    $arr3[$l] = mt_rand(-100,100);
}
print_r($arr3);
for ($l = 0; $l < $lenarr; $l++){
    if ($arr3[$l] >= 0 && $arr3[$l] <= $minPOL){
        $minPOL = $arr3[$l];
    }
    if ($arr3[$l] <= 0 && $arr3[$l] >= $maxOTR){
        $maxOTR = $arr3[$l];
    }
}
echo "<br>";

echo "Максимальным отрицательным числом в массиве является <strong>$maxOTR</strong>" . "<br>";

echo "Минимальным положительным числом в массиве является <strong>$minPOL</strong>" . "<br>";

echo "<br>";

echo"<h1> Task7 Slade 16</h1>". "<br>";

$lenStr = 5;
$lenCol = 6;
for ($h = 0; $h < $lenCol; $h++){
        $arr4[$h] = mt_rand(-100,100);
        for ($c = 0; $c < $lenStr; $c++){
            $arr4[$c] = mt_rand(-100,100);
        }
}
print_r($arr4);
echo"<br>";
