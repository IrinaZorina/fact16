<?php
echo 'слайд 23 упр 1.<br>';

$str1= 'hello world';
if(strlen($str1)>5){
    $str1= mb_substr($str1,5)."..." ;
    echo $str1;
}else{
    echo $str1;
}
// ---------------------------
echo "<br>";
echo '---------------<br>';
echo 'слайд 23 упр 2.<br>';

$str2= "Lorbem ipsum dolbor sit amet consectetur adipisicing elit";
$str2= str_replace("a","1", $str2);
$str2= str_replace("b","2", $str2);
$str2= str_replace("c","31", $str2);
echo $str2;
// ---------------------------
echo "<br>";
echo '---------------<br>';
echo 'слайд 23 упр 3.<br>';

$str3= "abc abc abc";
echo strrpos($str3, 'b');
// ---------------------------
echo "<br>";
echo '---------------<br>';
echo 'слайд 23 упр 4.<br>';

$str4='html css php';
$arr1= explode(' ', $str4);
print_r($arr1);
?>
<!-- <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. </div> -->