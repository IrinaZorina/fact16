<?php
//Задача 1
$str1 = "Дана строка. Если в этой строке более 5-ти символов";
if (mb_strlen($str1) > 5) {
    $str1 = mb_substr($str1,0,-5);
    $str1 .= "...";
    echo $str1; 
} echo "<br>";


//Задача 2
$str2 = 'I have lived my life as best I could, not knowing its purpose, but drawn forward like a moth to a distant moon; and here at last, I discover a strange truth. That I am only a conduit, for a message that eludes my understanding.';
echo $str2;
echo "<br>";
$arr2 = mb_str_split($str2, 1);
for ($i = 0; $i < count($arr2); $i++) {
  $arr2[$i] = match($arr2[$i]) {
    'a' => 1,
    'b' => 2,
    'c' => 3,
    default => $arr2[$i]
  };
}
$str2 = implode('', $arr2);
echo $str2;
echo "<br>";


//Задача 3
$str3 = 'abc abc abc';
$matchIndex = 0;
$target = 'b';
$arr3 = mb_str_split($str3);
for ($i = count($arr3) - 1; $i >= 0; $i--) {
  if($arr3[$i] == $target) {
    $matchIndex = $i;
    break;
  }
}
$matchIndex = strrpos($str3, $target);
echo "Индекс последнего вхождения символа '$target' в строку '$str3' = $matchIndex";
echo "<br>";


//Задача 4
$str4 = "html css php";
$arr4 = explode(' ', $str4);
print_r($arr4[0]);
echo "<br>";
print_r($arr4[1]);
echo "<br>";
print_r($arr4[2]);
echo "<br>";