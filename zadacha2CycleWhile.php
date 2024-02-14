<?php
$num=1000;
$i=0;
while($num>=50){
    $num=$num/2;
    $i++;
    echo " $num";
}
echo "<br/>";
echo "Результат: $num<br/>Количество итераций: $i";
?>