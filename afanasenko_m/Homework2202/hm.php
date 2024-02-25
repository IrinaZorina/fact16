<?php
//1
// Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами. 
function fm($arr1)
{
for ($i = 0; $i < 10; $i++) {
   $arr1[$i] = mt_rand(0, 1000);
   
}
return $arr1;
};

$arr1=[];
$tr=fm($arr1);
print_r ($tr);
echo '<br>';

//2
// Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.
function a($str1){
   $count = str_word_count($str1); 
   return $count;
}

$str1="HTML, CSS, PHP, BITRIX";
$cw = a($str1);
echo  "Задача2.Количество слов в строке равняется :$cw";

//3
// Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).
function b($str2){
   $e =  strrev($str2);
   return $e;   
}
$str2= "HTML, CSS, PHP, BITRIX";
$r=b($str2);
echo '<br>';
echo "Задача3. Перевёрнутая строка $r"  ;

//4
// Дана строка «HTML, CSS, PHP, BITRIX». 
// Написать функцию, которая выводит на экран длину строки.

function dlinastr($str3)
{
   $z=strlen($str3);
   return $z;
}
$str3="HTML, CSS, PHP, BITRIX";
$q=dlinastr($str3);
echo '<br>';
echo "Задача 4.Длина строки равна $q";
