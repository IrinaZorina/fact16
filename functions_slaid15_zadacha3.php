<?php
function ten($i){
     while ($i<1000000)
     {
         $i=$i*10;
         echo $i . '<br>';
     }
     echo "Вы достигли предела";
 }
ten(10);
?>