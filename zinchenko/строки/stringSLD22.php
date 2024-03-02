<?php
echo 'слайд 22 упр 1.<br>';
$str1= "fact";
echo str_replace('f', 'F', $str1);
echo "<br>";
// ------------------------
echo '---------------<br>';
echo 'слайд 22 упр 2.<br>';

$str2 = "Иванов Иван Иванович";
$arr1= explode(" ", $str2 );
$str3= $arr1[1]." ".$arr1[0];
echo $str3;
echo "<br>";
// ------------------------
echo '---------------<br>';
echo 'слайд 22 упр 3.<br>';

$str4='Привет мир';
echo substr_count($str4, "и");
echo "<br>";
// ------------------------
echo '---------------<br>';
echo 'слайд 22 упр 4.<br>';

$str5= "html css php";
$arr5= explode(" ",$str5);
foreach($arr5 as $val){
    echo $val. "<br>" ;
}
echo "<br>";
// ------------------------
echo '---------------<br>';
echo 'слайд 22 упр 5.<br>';

$str6="houm.png";
if(substr($str6, -4) ===".png"){
    echo 'да';
}else{
    echo 'нет';
}