<?php
function stroka($str){
        $arr=str_split($str);
        print_r($arr);
        echo "<br>";
        $N =count($arr);
    for ($i=0;$i<=$N;$i++){
        echo "$arr[$i] <br>";
    }
}
$str=stroka($str="HTML, CSS, PHP, BITRIX");
?>