<?php
//функция "massiv" принимает массив $arr и заменяет их случайными числами от 0 до 9
function massiv($arr){
    echo "Изначальный массив: ";
    print_r($arr);
    echo "<br>";
    $N=count($arr);
    echo "<br>Количество элементов в массиве: $N <br>";
    for ($i=0;$i<$N;$i++){
        $arr[$i]=mt_rand(0,9);
    }
    echo "<br>";
    return $arr;
}
$arr=massiv($arr=['1','2','3']);
print_r($arr);



?>
