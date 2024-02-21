<?php
// Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран.
//  Если же в этой строке 5 и менее символов -
//   необходимо вывести эту строку на экран.
$str ='Maksim Afanasenko';
if (strlen($str) > 5)
	$Str2 = (substr($str, 0, 5).'...');
else
	$Str2 = $str;
echo $Str2;

// Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.


$str4 = 'abc abc abc';
$str5   = 'b';

$str6 = strripos($str4, $str5);

if ($str6 === false) {
    echo "($str5) не найдена в ($str4)";} 
    else {
    echo '<br>';
    echo "Позиция буквы ($str5)  в строке ($str4) равна: $str6";
};


// Дана строка $str. Замените в ней все буквы 'a' на цифру 1,
//  буквы 'b' - на 2, а буквы 'c' - на 3.

$varToReplace = 'aaaaaaaaaaaAAAAAAAAAAAAAbbbbbbbbbbbBBBBBBBBBBBBBccccccccCCCCCCCCCCCCC';
 
$varToReplace = str_replace('a','1',$varToReplace);
$varToReplace = str_replace('b','2',$varToReplace);
$varToReplace = str_replace('c','3',$varToReplace);
echo '<br>';
echo $varToReplace;

// Дана строка 'html css php'.
//  С помощью функции explode запишите каждое 
//  слово этой строки в отдельный элемент массива.
$str7='html css php';

$arr = explode(' ', $str7);
echo '<br>';
print_r ($arr);

