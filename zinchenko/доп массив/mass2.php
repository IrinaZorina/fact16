<?php
$marks=[
    ['math'=>5, 'phiz'=>4, 'chim'=> 3, 'inform'=>5],
    ['math'=>4, 'phiz'=>4, 'chim'=> 4, 'inform'=>5],
    ['math'=>3, 'phiz'=>4, 'chim'=> 3, 'inform'=>5],
    ['math'=>5, 'phiz'=>4, 'chim'=> 4, 'inform'=>5],

];

// $marks = [
//     ['math'=>5, 'phisics'=>4, 'chem'=> 3, 'informatics'=>5],
//     ['math'=>4, 'phisics'=>3, 'chem'=> 5, 'informatics'=>4],
//     ['math'=>3, 'phisics'=>4, 'chem'=> 3, 'informatics'=>5],
//     ['math'=>5, 'phisics'=>5, 'chem'=> 4],
// ];
// $sums = ['math'=>0, 'phisics'=>0, 'chem'=> 0, 'informatics'=>0];
// $count = ['math'=>0, 'phisics'=>0, 'chem'=> 0, 'informatics'=>0];

// foreach ($marks as $mark){
//     foreach ($mark as $subject => $value){
//         $sums[$subject] += $value;
//         $count[$subject] ++;
//     }
// }
// $average = [];
// foreach ($sums as $subject => $sum){
//     $average[$subject] = $sum / $count[$subject];
// }

// foreach ($average as $subject => $avg){
//     echo "$subject : $avg <br>";

$pogod=[
    'cuba'=>['янв'=>13, 'февр'=>35, 'март'=>23, 'апр'=>44],
    'тайланд'=>['янв'=>13, 'февр'=>35, 'март'=>23, 'апр'=>44],
    'ямайка'=>['янв'=>13, 'февр'=>35, 'март'=>23, 'апр'=>44],
    'гаити'=>['янв'=>13, 'февр'=>35, 'март'=>23, 'апр'=>44],

];
$maxTem=[
    'cuba'=>'month',
    'тайланд'=>'month',
    'ямайка'=>'month',
    'гаити'=>'month',

];
$maxTem=[];
// echo '<pre>';
// print_r($island);
// echo '</pre>';

// echo '<pre>';
// print_r($maxTem);
// echo '</pre>';
foreach($pogod as $island){
   
    foreach($island as $month=>$temp){
        // echo $month.'<br>';
        echo $mT=MAX($temp);
    }
}