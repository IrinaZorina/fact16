<?php
$str="Hello World!";
$arr=str_split($str);
print_r($arr);
echo "<br>";
$num=0;
for($i=0;$i<count($arr);$i++){
    $num++;
}
if($num<=5)
{
    echo $str;
}else  
{
    $str=substr($str,6).'...';
    echo $str;
}
?>