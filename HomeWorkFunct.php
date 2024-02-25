<?php

echo"<h1> Task1 Slide 17</h1>". "<br>";

$arr1 = array(null, null, null , null, null);
function createArr($arr){
    for ($i = 0; $i <= count($arr) - 1; $i++){
        $arr[$i] = mt_rand(1,25);
    }
    return $arr;
}
print_r(createArr($arr1));
echo"<br>";

echo"<h1> Task2 Slide 17</h1>". "<br>";

$strWord = "HTML, CSS, PHP, BITRIX";
function wordCount($text){
    $num = explode(", ", $text);
    return count($num);
}

print_r("Количество слов в строке составило: ". wordCount($strWord));
echo"<br>";

echo"<h1> Task3 Slide 17</h1>". "<br>";

function Revers($text){           // Первый способ
    $arr2 = str_split($text);
    $newArr = array_reverse($arr2);
    $revText = implode($newArr);
    return $revText;
}

function Revers2($text){          // Второй способ
    $arr2 = str_split($text);
    $j = 0;
    $i = count($arr2);
    while($j < count($arr2)){
        $j++;
        $i--;
        $newArr2[$j] = $arr2[$i]; 
    }
    $revText2 = implode($newArr2);
    return $revText2;
}
print_r(Revers($strWord));
echo "<br>";
print_r(Revers2($strWord));

echo"<h1> Task4 Slide 17</h1>". "<br>";

function strLenght($text){
    $len = strlen($text);
    return $len;
}
echo"Длина строки составляет: ". strLenght($strWord) ."<br>";

echo"<h1> Task5 Slide 17</h1>". "<br>";

function printSimbol($OrigText){
    $text = str_replace(", ", "", $OrigText);
    $arr = str_split($text);
    for ($i = 0; $i < count($arr); $i++) {
        echo "$arr[$i]" . "<br>";
    }
}
printSimbol($strWord);