<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи</title>
    <link rel="stylesheet" href="assets/styles/slide25.css">
</head>
<body>
<?php
include('header.php')
?>
<h1>Слайд №25</h1>
<b>1.Выведите столбец чисел от 1 до 13.</b>
<br>
<br>
<?php
        $a = 1;
        while ($a <= 13) {
            echo $a . '<br>';
            $a++;
    }
?>
<br>
<b>2. Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится?<br>
Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.</b>
<br>
<br>
<div class="forwhile">
    <div>
        <b>через цикл while</b>
        <br>
        <?php
	    $num = 1000;
	    $i = 0;
	    while ($num > 50){
		       $num /= 2;
		       $i++;
	    }
	    echo $num.'<br>';
	    echo $i.'<br>';
        ?>
    </div>
    <div>
        <b>через цикл for</b>
        <br>
        <?php
        for ($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);
        echo $num.'<br>';
        echo $i.'<br>';
        ?>
    </div>
</div>
<br>
<b>Задание 3</b>
<br>
<br>
<?php
$i = 0;
switch ($i) {
    case 0:
        echo '0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10' . "<br>";
    case 1:
        echo '0, 1, 2, 3, 4, 5, 6, 7, 8, 9' . "<br>";
    case 2:
        echo '0, 1, 2, 3, 4, 5, 6, 7, 8' . "<br>";
    case 3:
        echo '0, 1, 2, 3, 4, 5, 6, 7' . "<br>";
    case 4:
        echo '0, 1, 2, 3, 4, 5, 6' . "<br>";
    case 5:
        echo '0, 1, 2, 3, 4, 5' . "<br>";
    case 6:
        echo '0, 1, 2, 3, 4' . "<br>";
    case 7:
        echo '0, 1, 2, 3' . "<br>";
    case 8:
        echo '0, 1, 2' . "<br>";
    case 9:
        echo '0, 1' . "<br>";
    case 10:
        echo '0' . "<br>";
}
?>
<?php
include('footer.php')
?>
</body>
</html>