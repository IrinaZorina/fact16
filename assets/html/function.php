<?php

$b = [];
function accident($v){
for($i=0; $i<=mt_rand(20,35);$i++){
    $v[$i] = mt_rand(0,150);
   }
   return $v;
}
print_r($b = accident($b));

function br(){
echo "<br>.....................................................................<br>" ;   
}
br();


$str = "HTML, CSS, PHP, BITRIX";
function couterWords($q){
  $counter = 1;
for($i = 0; $i<strlen($q); $i++){
 if($q[$i] == " "){
    $counter+= 1;
 } 
}
return $counter;
}
echo (couterWords($str));

br();


function wordsInReverse($b){
    for($i=strlen($b);$i>=0; $i--){
    echo $b[$i];
    }       
}
echo wordsInReverse($str);
br();



function couterLengthWords($q){
$i = 0;
$counter = 0;
while($q[$i++]){
$counter +=1;
}
echo $counter;
}
echo couterLengthWords($str);

br();


function newLetter($q){
for($i=0;$i<=strlen($q); $i++){
    
    if($q[$i] == " "|| $q[$i] == ","){
        continue;
    } 
    echo "<br>$q[$i]";
  }
  }
 echo newLetter($str);  
















 