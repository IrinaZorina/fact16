<?php

$str = "Дана строка. Если в этой строке более 5-ти символов";
if (mb_strlen($str) > 5)
{
    $str = mb_substr($str,0,-5);
    $str .= "...";
    echo $str; 
}

$str2 = "glavrybac";
for($i=0; $i<mb_strlen($str2);$i++){
if ($str2[$i] =="a"){
    $str2[$i] =1;
  }
 elseif ($str2[$i] =="b"){
    $str2[$i] =2;
}
elseif ($str2[$i] =="c"){
    $str2[$i] =3;
}
}
echo "<br> $str2";

echo "<br> Позиция последней буквы \"b\" = ";
$str3 = "abc abc abc";
echo strrpos($str3, "b");


$str4 = "html css php";
$str5 = explode(" ",$str4);
echo "<br>";
print_r($str5);



