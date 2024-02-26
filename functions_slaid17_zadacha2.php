<?php
function stroka($str){
    $num = 0;
    $arr=explode(' ', $str);
    print_r($arr);
    echo "<br>";
    return count($arr);
}
$str="HTML, CSS, PHP, BITRIX";
$result = stroka($str);
echo "Количество слов в строке: $result";
?>