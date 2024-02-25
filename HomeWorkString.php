<?php

echo"<h1> Task1 Slade 23</h1>". "<br>";

$strT1 = "Hello world!";
if (strlen($strT1) > 5) {
    $strT1 = substr($strT1,0,5);
    echo "$strT1" . "..." . "<br>";
} else{
    echo "$strT1"."<br>";
}

echo"<h1> Task2 Slade 23</h1>". "<br>"; 

$strT2 = "abc abc abc";
$strT2R = str_replace(["a", "b", "c"], ["1","2","3"], $strT2);
echo"$strT2R"."<br>";

echo"<h1> Task3 Slade 15</h1>". "<br>";

$strT3 = $strT2;
$pos = strripos($strT3,"b");
echo"Последнее вхождение в стоку 'b' на позиции №$pos."."<br>";

echo"<h1> Task4 Slade 15</h1>". "<br>";

$strT4 = "html css php";
$arr = explode(" ", $strT4);
print_r($arr);

