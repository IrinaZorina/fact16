<?php
echo "Функции, упр: 1 <br>";
$arr1=[];
function multiArr($arrT)
{
    // $arr1=[];
    $d= rand(0, 10);
    for($i=0; $i<=$d; $i++){
            $arr1[$i]= rand(1, 100);
        }
    print_r($arr1);
    echo '<br>';  
    foreach($arr1 as $key=>$val){
        echo $val.'<br>';
    }
}

multiArr($arr1);
echo "************************** <br>";

echo "Функции, упр: 2 <br>";

$stroc= "HTML, CSS, PHP, BITRIX";

function counStr($str){
    $arSnr=explode(" ", $str);
    $cnt=0;
    foreach($arSnr as $val){
        $cnt++;
    }
    echo "длина строки(HTML, CSS, PHP, BITRIX): $cnt слова .<br>";
}
counStr($stroc);


echo "************************** <br>";

echo "Функции, упр: 3 <br>";

function revStr2($str)
{
    $arSnr=str_split($str);
    for($i=count($arSnr); $i>=0; $i--){
        echo $arSnr[$i];
    }
echo " <br>";

}
revStr2($stroc);
echo "************************** <br>";

echo "Функции, упр: 4 <br>";

$stroc3= "HTML, CSS, PHP, BITRIX";

function counStr3($str){
    $arSnr3=str_split($str);
    // print_r($arSnr3);
    $cnt3=0;
    foreach($arSnr3 as $val){
        $cnt3++;
    }
    echo "длина строки(HTML, CSS, PHP, BITRIX): $cnt3 символа .<br>";
}
counStr3($stroc3);

echo "************************** <br>";

echo "Функции, упр: 5 <br>";

function counStr4($str){
    $arSnr=str_split($str);
    foreach($arSnr as $val){
        echo $val.'<br>';
    }
}
counStr4($stroc3);
echo "************************** <br>";
