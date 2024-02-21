<?php
/* Задание 4. Дано N действительных случайных чисел в диапазоне от -100 до 100.
   Найти минимальное положительное число и максимальное отрицательное число. */

$n = 10;
$arr3;
for ($index = 0; $index < $n; $index++) {
    $arr3[] = mt_rand(-100, 100);
    echo "{arr3[$index]}";
}

$min = 100;
$max = -100;
for ($index = 0; $index < $n; $index++) {
    if ($arr3[$index] < 0 && $arr3[$index] > $max) {
        $max = $arr3[$index];
    }
    if ($arr3[$index] > 0 && $arr3[$index] < $min) {
        $min = $arr3[$index];
    }
}
echo "<br>min = $min; max = $max<br>";
?>