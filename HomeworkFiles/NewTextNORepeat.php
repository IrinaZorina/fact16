<?php

$textFile1 = fopen('../assets/Text/Text1.txt', 'r');
$textFile2 = fopen('../assets/Text/Text2.txt', 'r');
$TextFromF1 = "";
$TextFromF2 = "";
function Readtxt($file, $StrF){
    $textfrom = fread($file, 1);
    while ($textfrom != ''){
        $StrF .= $textfrom;
        $textfrom = fread($file, 1);
    }
    return $StrF;
}

$Ftxt = Readtxt($textFile1, $TextFromF1);
$Stxt = Readtxt($textFile2, $TextFromF2);

$Arr1 = explode('.', $Ftxt);
$Arr2 = explode('.', $Stxt);
$Arr3 = array();

function makeNewAr($array1,$array2){
    for ($i = 0; $i < count($array1); $i++)
    {
        if (!in_array($array1[$i], $array2)){
            $array2[] = $array1[$i]; 
        } 
    }
    return $array2;
    }

$Farr = (makeNewAr($Arr1, $Arr2));
$Fstr = implode('. ',$Farr);
$textFile3 = fopen('../assets/Text/Text3.txt', 'w');
fwrite($textFile3, $Fstr);
fclose($textFile3);


