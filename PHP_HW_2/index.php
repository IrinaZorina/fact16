<?php
//Задача 4

$arr4 = [];
$maxNeg = null;
$minPos = null;

for ($i = 0; $i < 10; $i++) {
  $arr4[$i] = mt_rand(-100, 100);
  echo $arr4[$i]  . "\t - i" . count($arr4) . "<br>";
  if($arr4[$i] > 0){
   $numPos = $arr4[$i]; 
    if($numPos < $minPos or $minPos === null){
      $minPos = $numPos;
    }
  }
  elseif($arr4[$i] < 0){
    $numNeg = $arr4[$i];
    if ($numNeg > $maxNeg or $maxNeg === null) {
      $maxNeg = $numNeg;
    }
  }
}
echo "Наибольшее отрицательное: $maxNeg . <br>";
echo "Наименьшее положительное: $minPos . <br>";