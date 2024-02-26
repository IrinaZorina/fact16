<?php
function massiv($N){
   echo "Случайный массив из $N элементов: ";
    for ($i=0; $i<=$N; $i++){
        $arr[$i]=mt_rand(0,9);
         echo "$arr[$i] ";
    }
 }
 $arr =massiv(10);
?>