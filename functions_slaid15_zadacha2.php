<?php
function gipot($x, $y){
  echo "длина катета a=$x, длина катета b=$y", '<br>';
    $result = sqrt(pow($x,2)+pow($y,2));
   return $result;
}
 $result=gipot(4,6);
echo "Гипотинуза равна $result";

?>
