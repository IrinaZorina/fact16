<?php
function srav($x, $y){
  if($x>$y){
       $result = $x;
   }
   else{
       $result = $y;
     }
    return $result;
}
$result = srav(3,5);
echo $result;
?>