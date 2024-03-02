<?php
$sum=0;
$arr1=['50', '45', '40', '35','30'];
foreach($arr1 as $val){
    $sum+=$val;
}
$sum1=0;
echo "ответ задания №1 foreach: $sum <br>";
for($i=0; $i <=count($arr1)-1;  $i++){
    $sum1 += $arr1[$i];
}
echo "ответ задания №1 for: $sum1 <br>";
echo "======================= <br>";
echo "задание №2: <br>";

$arr2=[];
$eArr=mt_rand(1, 10);
echo "при $eArr <br>";
for($e=0; $e<=$eArr-1; $e++){
    $arr2[$e]= mt_rand(1, 10);
}
print_r($arr2);
echo '<pre>';
print_r($arr2);
echo '</pre>';

echo "массив наоборот: <br>";
for($i1=count($arr2)-1; $i1>=0; $i1--){
    echo " $arr2[$i1] <n>";
}

echo " <br>";
echo "======================= <br>";
echo "задание №3: <br>";

$arrImg2=[ 'png/1.jpg','png/2.png', 'png/3.jpg', 'png/4.png'];
$r_img=$arrImg2[mt_rand(0, 3)];
echo "<img src='$r_img'>";

echo " <br>";
echo "======================= <br>";
echo "задание №4: <br>";

$minZ= 101;
$maxZ = -101;
$arr3=[];
$eArr=mt_rand(1, 30);
echo "при $eArr <br>";
for($e3=0; $e3<=$eArr-1; $e3++){
    $arr3[$e3]= mt_rand(-100, 100);
}
print_r($arr3);
echo '<br>';
foreach($arr3 as $val3){
    if($val3<$minZ and $val3>0){
        $minZ=$val3;
    }
    elseif($val3>$maxZ and $val3<0){
        $maxZ=$val3;
    }else{

    }
}

echo "минимальное положительное число: $minZ <br>";
echo "максимальное отрицательное число: $maxZ<br>";
echo " <br>";
echo "======================= <br>";
