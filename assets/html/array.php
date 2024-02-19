<?php

$sum = 0;
$arr1 = [50,45,40,35,30];
for ($i =0; $i < count($arr1); $i++){
$sum +=$arr1[$i];  
}  
echo "$sum <br>";


$counter =10;
$arr2 = [];
for($i=0; $i<$counter;$i++){
    $arr2[$i] = mt_rand(25,45);
   echo "$arr2[$i]<br>";
  }
  echo "<br>";

 for($i = count($arr2)-1;$i>=0;$i--){
echo "$arr2[$i] </br>";

}

$arr3 = ['cat1.jpg', 'cat2.jpg','cat2.jpeg'];
$cats = $arr3[mt_rand(0,2)];
echo "<img src =../image/$cats width=\"350\" height=\"300\"> <br>";


$minNumber= null;
$maxNumber = null;
$arr4 = [];

for($i=0; $i<=30;$i++){
    $arr4[$i] = mt_rand(-100,100);
}

foreach($arr4 as $key){
echo "$key <br>";
if($key>0 && $key>$maxNumber ){
    $maxNumber = $key;
}
 elseif($key<0 && $key>$minNumber ){
    $minNumber =$key;
}
}


echo "Максимальное минимальное число)) = $minNumber <br>";
echo "Максимальное максимальное число = $maxNumber";




