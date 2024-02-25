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
<h1>Слайд 23. Строки</h1>
<b>1. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, <br> 
добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.</b>
<br>
<br>
<?php
$str = 'История - это не только память о прошлом';
if (strlen($str) > 5)
	$str2 = substr($str, 10, 67).'...';
else
	$str2 = $str;
echo $str2;
?>
<br>
<br>
<b>2. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, <br> 
буквы 'b' - на 2, а буквы 'c' - на 3.</b>
<br>
<br>
<?php
$str = 'Believe you can and you are halfway there.';
echo $str . '<br>';
echo str_replace(['a', 'B', 'c'], [1, 2, 3], $str);
?>
<br>
<br>
<b>3. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'</b>
<br>
<br>
<?php
$str = 'abc abc abc';
echo strrpos($str, 'b');
?>
<br>
<br>
<b>4. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</b>
<br>
<br>
<?php
$str = 'html css php';
$arr = explode(' ', $str);
var_dump($arr);
?>
<h1>Слайд №17. Функции</h1>
<b>1. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами. </b>
<br>
<br>
<?php
function massive() {
    $numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[$i] = mt_rand(0, 1000);
}
echo '<pre>';
print_r ($numbers);
echo '</pre>'; 
}
massive();
?>
<b>2. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов в строке.</b>
<br>
<br>
<?php
function line() {
    echo str_word_count('HTML, CSS, PHP, BITRIX');
}
line();
?>
<br>
<br>
<b>3. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).</b>
<br>
<br>
<?php
function string() {
    $str = "HTML, CSS, PHP, BITRIX";
    echo strrev($str);
}
string();
?>
<br>
<br>
<b>4. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.</b>
<br>
<br>
<?php
function m_func() {
    $str = "HTML, CSS, PHP, BITRIX";
    echo strlen($str);
}
m_func();
?>
<br>
<br>
<b>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку.</b>
<br>
<br>
<?php
function newstr() {
    $str = "HTML, CSS, PHP, BITRIX";
    $arr = str_split ($str);
    echo '<pre>';
    print_r ($arr);
    echo '</pre>';
}
newstr();
?>
<?php
include('footer.php')
?>
</body>
</html>