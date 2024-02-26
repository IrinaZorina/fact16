<?php
function stroka($str){
    echo 'Строка: ', $str, '<br>';
    $str = strlen($str);
    return $str;
}
$str=stroka($str="HTML, CSS, PHP, BITRIX");
echo 'Ответ (кдлина строки): ', $str;
// $str="HTML, CSS, PHP, BITRIX";
// echo 'Ответ: ', strlen($str);
?> 