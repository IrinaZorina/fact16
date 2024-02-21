<?php
$str="abc abc abc";
$arr=str_split($str);
$num=0;
for ($i=0; $i<count($arr);$i++)
{
    if($arr[$i]=="b")
    {
     $num=$i;
    }
}
echo $str, "<br>", "Ответ: ", $num, "<br>";
print_r($arr);
?>