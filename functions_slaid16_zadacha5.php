<?php
function massiv($N){
$sum=0;
echo "Случайный массив из $N элементов: ";
   for ($i=0; $i<=$N-1; $i++){
        $arr[$i]=mt_rand(1,9);
         echo "$arr[$i] ";
        $sum+=$arr[$i];
     }
      $result = $sum/$N;
    return $result;
  }
 $result =massiv(10);
echo "Среднеарифмитическое значений массива равна $result";
?>