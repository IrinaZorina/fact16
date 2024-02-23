<?php
//Задача 1
function arr($a) {
  $b = mt_rand(1,8);
      for($i = 0; $i < $b; $i++){
      $a[] =+ mt_rand(1,10);
      }
      return $a;
}
$array = [];
print_r(arr($array));
echo "<br>";


//Задача 2
$str = 'HTML, CSS, PHP, BITRIX';
function f($a) {
  $arr = explode(' ', $a);
  $count = 0;
  for($i = 0; $i < count($arr); $i++){
    $count++;
  }
  return $count;
}
echo f($str);
echo "<br>";


//Задача 3
$str = 'HTML, CSS, PHP, BITRIX';
function reverse($x) {
  for($i = mb_strlen($x); $i >= 0; $i--){
    echo substr($x, $i, 1);
  }
}
echo reverse($str);
echo "<br>";


//Задача 4
$str = 'HTML, CSS, PHP, BITRIX';
function length($a){
  echo mb_strlen($a);
}
echo length($str);
echo "<br>";


//Задача 5
function br($a){
  for($i = 0; $i < mb_strlen($a); $i++){
      echo substr($a, $i, 1) . '<br>';
  }
}
echo br($str);
echo "<br>";