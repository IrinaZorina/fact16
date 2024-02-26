<?php
$N=10; //количество чисел
echo "Количество чисел: $N", '<br>';
$buf1=0;
$buf2=1;
echo "Ответ(последовательность чисел Фибоначчи): $buf1, $buf2, ";
for($i=3;$i<=$N;$i++){
    $buf3=$buf2;
    $buf2=$buf1+$buf2;
    $buf1=$buf3;
    if($i!=$N)
    {
        echo "$buf2, ";
    }
    else{
        echo "$buf2;";
    }

}
?>