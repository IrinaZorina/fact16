<?php
function stroka($str){
    echo "Изначальная строка: $str <br>";
    $str=strrev($str);
    return $str;
}
$str=stroka($str="HTML, CSS, PHP, BITRIX");
echo "Ответ: $str";
?>