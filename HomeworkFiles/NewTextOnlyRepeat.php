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
echo '<pre>';
print_r($Arr1);
echo '</pre>';
$Arr2 = explode('.', $Stxt);
echo '<pre>';
print_r($Arr2);
echo '</pre>';
$Arr3 = array();
$j = 0;
for ($i = 0; $i < count($Arr1); $i++){
    if ($Arr1[$i] == $Arr2[$j]){
            $Arr3[] = $Arr1[$i];
    }
    $j++;
}

$Fstr = implode('. ',$Arr3);
$textFile3 = fopen('../assets/Text/Text4.txt', 'w');
fwrite($textFile3, $Fstr);
fclose($textFile3);
