<?
$arr = [];
$maxNeg = null;
$minPos = null;

for ($i = 0; $i < 10; $i++) {
  $arr[$i] = mt_rand(-100, 100);
  echo $arr[$i]  . "\t - i" . count($arr) . "<br>";
  if($arr[$i] > 0){
   $numPos = $arr[$i]; 
    if($numPos < $minPos or $minPos === null){
      $minPos = $numPos;
    }
  }
  elseif($arr[$i] < 0){
    $numNeg = $arr[$i];
    if ($numNeg > $maxNeg or $maxNeg === null) {
      $maxNeg = $numNeg;
    }
  }
}
echo "<hr>";
echo "Наибольшее отрицательное: $maxNeg <br>";
echo "Наименьшее положительное: $minPos . <br>";
?>