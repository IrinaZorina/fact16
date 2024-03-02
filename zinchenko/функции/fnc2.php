<?php
echo 'урок 9-10 <br>';
echo '**************************<br> ';

echo 'слайд 15 задача 1 <br> ';


function big($x, $y)
{
    if($x>$y){
        return $x;
    }elseif($x<$y){
        return $y;
    }else{
        return $x.'='.$y;
    }
}
echo big(8, 4) .'<br>';

echo '**************************<br> ';

echo 'слайд 15 задача 2 <br> ';

function gptnz($a, $b)
{
    // $c2= $a*$a + $b*$b;
    // $c= sqrt($c2);
    $c= sqrt($a**2 + $b**2);
    return $c;
}
echo gptnz(3, 5).'<br>';
echo '**************************<br> ';

echo 'слайд 15 задача 3 <br> ';
function mlon($n)
{
    for($i=$n; $i <=1000000; $i*=10){
        echo $i.'<br>';
    }
    echo 'вы достигли предела <br>';
}
mlon(10);
echo '**************************<br> ';

echo 'слайд 15 задача 4 <br> ';

function arrd()
{
    $arr1=[];
    $d= rand(0, 10);
    for($i=0; $i<=$d; $i++){
        $arr1[$i]= rand(1, 100);
    }
    print_r($arr1);
}
arrd();
echo '**************************<br> ';

echo 'слайд 15 задача 5 <br> ';


function arrd1()
{
    $arr1=[];
    $d= rand(0, 10);
    for($i=0; $i<=$d; $i++){
        $arr1[$i]= rand(1, 100);
    }
    print_r($arr1);
echo '<br> ';

    $sum=0;
    $coun=0;
    foreach($arr1 as $val){
        $sum +=$val;
        $coun++;
    }
    echo " среднеарефметическое значение массива: ". $sum/ $coun."<br>" ;
}
arrd1();
echo '**************************<br> ';

echo 'слайд 15 задача 5 <br> ';

function linStr($stroca)
{
    $counS = str_word_count($stroca);
    $counS1 = strlen($stroca);

    echo $counS .' слов <br> ';
    echo $counS1 .' букв <br> ';

}

linStr('Lorem ipsum dolor sit amet consectetur adipisicing elit.
Quidem fuga accusamus ullam nobis aut temporibus
 earum cupiditate explicabo, incidunt minima, iste pariatur? Corrupti,
  ipsa non aspernatur fuga nostrum magnam? Impedit!');

echo '**************************<br> ';
?>
