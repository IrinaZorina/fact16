<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/styleBackground.css">
    <title>Cycles</title>
</head>
<?php
include_once "getTime.php";
if ($hours > 8 && $hours < 20)
{
    echo "<body class = \"bodyWhite\">";
}
else
{
    echo "<body class = \"bodyBlack\">";
}
include_once "header.php";
?>
    <main>
    <?php 
    //ДЗ
        echo "<h1 $colorClassText>Слайд № 25</h1>";
        echo "<p $colorClassText >";
        echo "1. Выведите столбец чисел от 5 до 13.<br>";
        for ($index = 5; $index <= 13; $index++)
        {
            echo "$index<br>";
        }

        echo "<br>2. Дано число num=1000. Делите его на 2 столько раз, пока результат деления 
        не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого 
        (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.<br>";

        echo "<br>while: <br>";
        $num = 1000;
        $count = 0;
        while ($num > 50)
        {
            $count++;
            $num /= 2;
        }
        echo "count = $count<br>";
        echo "<br>for: <br>";
        $num = 1000;
        $count = 0;
        for ($index = 0; $index < $num; $index++)
        {
            if ($num < 50)
            {
                break;
            }
            $count++;
            $num /= 2;
        }
        echo "count = $count <br>";

        echo "<br>3. Необходимо создать переменную (i) и передавать в нее значение. 
        Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». 
        Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». 
        Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8».
         Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10 <br>";
        $i = mt_rand(0,10);
        echo "i = $i <br>";
    
        for ($index = 0; $index <= 10-$i; $index++)
        {
            echo "$index";
            if($index < 10-$i)
            {
                echo ", ";
            }
        }
        echo "</p>";
        // Задания из файла example
        echo "<h1 $colorClassText>Задания из файла example</h1>";
        echo "<p $colorClassText >";
        echo "1. Даны положительные действительные числа A,X,E.
         В последовательности y(1), y(2),... , образованной по закону y(0)=A; y(i)=0.5 [y(i-1)+x/y(i-1)] , i=1,2,3,... , 
        найти первый член y(n), для которого выполнено неравенство yi2-yi-12<E<br>";
        $a = 15;
        $x = 0;
        $e = 5;
        $y0 = $a;
        $y1 = GetY($y0,$x);
        $count = 0;
        echo  "a = $a e = $e<br>";
        while ((abs($y1**2-$y0**2)) > $e)
        {
            $x++;
            $count++;
            $y0 = $y1;
            $y1 = GetY($y1,$x);
            if ($count > 5000) 
            {
                break;
            }
        }
        echo "Первый член y(n) = $count (y($count) = $y1)<br>";
        function GetY($y,$x):float
        {
            $newY = 0.5*($y+$x/$y);
            return $newY;
        }

        echo "<br>2, 3. Были сделаны ранее на уроке<br>";
        echo "<br>4. Дана последовательность, состоящая из дробей: 1/1, 4/2, 9/4, 16/8,...
         Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10? <br>";
        $a = 1;
        $b = 1;
        $count = 0;
        $sum = 0;
        while($sum <= 10)
        {
            if ($count > 5000)
            {
                break;
            }
            $sum += ($a**2)/$b;
            $a++;
            $b += $b;
            $count++;
            echo "$sum ";
        }
        echo "<br>Минимальное количество элементов последовательности, которое нужно сложить, чтобы сумма превысила заданное число S > 10 = $count<br>";

        echo "<br>5. Дана  последовательность,  состоящая из дробей: 1/1, 3/2, 5/3, 7/4, ... 
        Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10?
        <br>";
        $a = 1;
        $b = 1;
        $count = 0;
        $sum = 0;
        while($sum <= 10)
        {
            if ($count > 5000)
            {
                break;
            }
            $sum += $a/$b;
            $a+=2;
            $b++;
            $count++;
            echo "$sum ";
        }
        echo "<br>Минимальное количество элементов последовательности, которое нужно сложить, чтобы сумма превысила заданное число S > 10 = $count<br>";

        echo "<br>6. Дана  последовательность,  состоящая из дробей: 1/2, 3/4, 5/6, 7/8, ...
         Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10?<br>";
        $b = 2;
        $count = 0;
        $sum = 0;
        while($sum <= 10)
        {
            if ($count > 5000)
            {
                break;
            }
            $sum += ($b-1)/$b;
            $b+=2;
            $count++;
            echo "$sum ";
        }
        echo "<br>Минимальное количество элементов последовательности, которое нужно сложить, чтобы сумма превысила заданное число S > 10 = $count<br>";

        echo "<br>7. Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от 0 до 50. 
        Найти сумму элементов массива, с начала массива, до первого элемента равного нулю. <br>";
        function GetRandArr($min, $max, $count):array
        {
            $arr = array();
            for ($index = 0; $index < $count; $index++)
            {
                $arr[] = mt_rand($min, $max);
            }
            return $arr;
        }

        $min = 0;
        $max = 50;
        $count = 1000;
        $sum = 0;
        $arr = GetRandArr($min, $max, $count);
        for ($index = 0; $index < $count; $index++)
        {
            echo "$arr[$index] ";
            if ($arr[$index] == 0)
            {
                break;
            }
            $sum +=$arr[$index];
        }
        echo "<br>Сумма элементов массива, с начала массива, до первого элемента равного нулю (до элемента $index) = $sum<br>";

        echo "<br>8. Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от 0 до 9. 
        Найти произведение элементов массива, с конца массива до первого элемента, равного нулю <br>";
        $min = 0;
        $max = 9;
        $count = 1000;
        $p = 1;
        $arr = GetRandArr($min, $max, $count);
        for ($index = $count-1; $index >= 0; $index--)
        {
            echo "$arr[$index] ";
            if ($arr[$index] == 0)
            {
                break;
            }
            $p *=$arr[$index];
        }
        echo "<br>Произведение элементов массива, с конца массива, до первого элемента равного нулю (после элемента $index) = $p<br>";

        echo "<br>9. Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от -5 до 50. 
        Найти сумму элементов массива, с конца массива, до первого отрицательного элемента <br>";
        $min = -5;
        $max = 50;
        $count = 1000;
        $sum = 0;
        $arr = GetRandArr($min, $max, $count);
        for ($index = $count-1; $index >= 0; $index--)
        {
            echo "$arr[$index] ";
            if ($arr[$index] < 0)
            {
                break;
            }
            $sum +=$arr[$index];
        }
        echo "<br>Сумма элементов массива, с конца массива, до первого отрицательного элемента (после элемента $index) = $sum<br>";

        echo "<br>10. Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от 1 до 50. 
        Определить, сколько элементов с начала массива нужно сложить, чтобы сумма превысила заданное значение.<br>";
        $min = 1;
        $max = 50;
        $count = 1000;
        $sumMax = 100;
        $sum = 0;
        $countSum = 0;
        $arr = GetRandArr($min, $max, $count);
        for ($index = 0; $index < $count; $index++)
        {
            if ($sum > $sumMax)
            {
                break;
            }
            echo "$arr[$index] ";
            $sum +=$arr[$index];
            $countSum++;
        }
        echo "<br>Количество элементов с начала массива, которые нужно сложить, чтобы сумма ($sum) превысила значение $sumMax (до элемента $index) = $countSum<br>";

        echo "<br>11. Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от 1 до 10. 
        Определить, сколько элементов с конца массива нужно перемножить, чтобы произведение превысило заданное значение <br>";
        $min = 1;
        $max = 10;
        $count = 1000;
        $pMax = 100;
        $p = 1;
        $countP = 0;
        $arr = GetRandArr($min, $max, $count);
        for ($index = $count-1; $index >= 0; $index--)
        {
            if ($p > $pMax)
            {
                break;
            }
            echo "$arr[$index] ";
            $p *=$arr[$index];
            $countP++;
        }
        echo "<br>Количество элементов с конца массива, которые нужно перемножить, чтобы произведение ($p) превысило значение $pMax (после элемента $index) = $countP<br>";

        echo "<br>12. Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от -5 до 8.
         Найти сумму элементов участка массива, начиная с первого положительного и кончая вторым положительным элементом. <br>";
        $min = -5;
        $max = 8;
        $sum = 0;
        $indexStart = 0;
        $indexFinish = 0;
        $countSum = 0;
        $arr = GetRandArr($min, $max, $count);
        for ($index = 0; $index < $count; $index++)
        {
            if ($countSum  > 0)
            {
                $sum +=$arr[$index];  
                $countSum++;
            }
            if ($countSum > 0 && $arr[$index] > 0)
            {
                echo "$arr[$index])";
                $indexFinish = $index-1;
                break;
            }
            if (($arr[$index] > 0) && ($countSum == 0))
            {
                $sum +=$arr[$index];
                $indexStart  = $index;
                $countSum++;
                echo "(";
            }
            echo "$arr[$index] ";
        }
        echo "<br>Сумма элементов участка массива, начиная с первого положительного ($indexStart) и кончая вторым положительным элементом($indexFinish) = $sum<br>";

        echo "</p>";
        ?>
    </main>
    <?php
        include_once "footer.php";
    ?>
</body>
</html>