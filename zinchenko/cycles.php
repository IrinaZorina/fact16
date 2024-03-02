<p>слайд 25, упр 1</p>
<?php
#сл 25 упр 1
for($x=5; $x<=13; $x++) {
    echo "$x <br>";
}
?>
<br>
************************
<p>слайд 25, упр 2</p>
<!-- komm 23-->
<?php
$num = 1000;
$count=0;

while ($num>= 50) {
    $count++;
    $num=$num/2;
}
echo "цикл while: $count <br>";
$cnt=0;
for($num1=1000; $num1>=50; $num1 =$num1/2){
    $cnt++;
}
echo "цикл for: $cnt";
?>
<br>
************************
<p>слайд 25, упр 3</p>
<?php
$i=mt_rand(1,10);
echo "при i=$i строка: <n>";
for($q=1; $q<=(10-$i);$q++) {
    echo "$q <n>";
}
?>
<br>
************************