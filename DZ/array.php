<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/styleBackground.css">
    <title>Array</title>
</head>
<?php
include_once "getTime.php";
GetClassBody($hours);
include_once "header.php";
?>
<main>
<?php 
    //на уроке
    echo "<h1 $colorClassText>Урок 5 - 6</h1>";
    echo "<p $colorClassText>";
    echo "1. Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива.
     Запишите ее в переменную result<br>";
    $arr = [50,45,40,35,30];
    $result = 0;
    for ($index = 0; $index < count($arr); $index++)
    {
        $result += $arr[$index];
    }
    echo "result = $result<br>";

    echo "<br>2. Дан массив, заполненный случайными числами.
     Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке<br>";
    $arr1;
    $count = 10;
    for ($index = 0; $index < $count; $index++)
    {
        $arr1[]= mt_rand(0,50);
        echo "{$arr1[$index]} ";
    }
    echo "<br>";
    for ($index = $count-1; $index >= 0; $index--)
    {
        echo "{$arr1[$index]} ";
    }
    echo "<br>";

    echo "<br>3. Создать массив, заполненный названиями картинок, например, 1.png. 
    Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.<br>";
    $arr2 = ['1.jpg','2.jpg','3.jpg'];
    $index = mt_rand(0,2);
    echo "<img src = \"assets\\picture\\{$arr2[$index]}\" height = 200px><br>";

    echo "<br>4. Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число<br>";
    $n = 10;
    $arr3;
    for ($index = 0; $index < $n; $index++)
    {
        $arr3[]= mt_rand(-100,100);
        echo "{$arr3[$index]} ";
    }
    $min = 100;
    $max = -100;
    for ($index = 0; $index < $n; $index++)
    {
        if ($arr3[$index]<0 && $arr3[$index] > $max)
        {
            $max = $arr3[$index];
        }
        if ($arr3[$index]>0 && $arr3[$index] < $min)
        {
            $min = $arr3[$index];
        }
    }
    echo "<br>min = $min; max = $max<br>";

    echo "<br>5. Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. 
    Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету<br>";
    //данные
    $arr5;
    $countUsers = 5;
    //формирование массива
    for($user = 0; $user < $countUsers; $user++)
    {
        $arr5Add = [
           'mathematics'=> mt_rand(1,5),
           'physics'=> mt_rand(1,5),
           'chemistry'=> mt_rand(1,5),
           'informatics'=> mt_rand(1,5),
        ];
        $arr5[] = [
            "user" => "user$user",
            "grade" =>$arr5Add
        ];
    }
    //вывод массива
    echo "Оценки:<br>";
    for($user = 0; $user < $countUsers; $user++)
    {
        echo "{$arr5[$user]["user"]}: ";
        foreach($arr5[$user]["grade"] as $key => $value)
        {
            echo "$value ";
        }
        echo "<br>";
    }
    //задание
    $sumMathematics=0;
    $sumPhysics=0;
    $sumChemistry=0;
    $sumInformatics=0;
    for($user = 0; $user < $countUsers; $user++)
    {
        $sumMathematics+=$arr5[$user]["grade"]["mathematics"];
        $sumPhysics+=$arr5[$user]["grade"]["physics"];
        $sumChemistry+=$arr5[$user]["grade"]["chemistry"];
        $sumInformatics+=$arr5[$user]["grade"]["informatics"];
    }
    $srM = $sumMathematics/$countUsers;
    $srP = $sumPhysics/$countUsers;
    $srC = $sumChemistry/$countUsers;
    $srI = $sumInformatics/$countUsers;
    echo "Среднее значение по математике = $srM <br>";
    echo "Среднее значение по физике = $srP<br>";
    echo "Среднее значение по химии = $srC<br>";
    echo "Среднее значение по информатике = $srI <br>";

    echo "<br>6. Известна среднемесячная температура воздуха на следующих островах Карибского моря: 
    Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов<br>";
    //данные
    $arrK; 
    $arrT; 
    $arrYa; 
    $arrG; 
    for ($index = 0; $index < 12; $index++)
    {
        $arrK[] = mt_rand(-10, 20);
        $arrT[] = mt_rand(-10, 20);
        $arrYa[] = mt_rand(-10, 20);
        $arrG[] = mt_rand(-10, 20);
    }
    //вывод
    echo "Куба: ";
    for ($index = 0; $index < 12; $index++)
    {
        echo "{$arrK[$index]} ";
    }
    echo "<br>Тринидад: ";
    for ($index = 0; $index < 12; $index++)
    {
        echo "{$arrT[$index]} ";
    }
    echo "<br>Ямайка: ";
    for ($index = 0; $index < 12; $index++)
    {
        echo "{$arrYa[$index]} ";
    }
    echo "<br>Гаити: ";
    for ($index = 0; $index < 12; $index++)
    {
        echo "{$arrG[$index]} ";
    }
    //задание
    $newArr;
    for($index = 0; $index < 12; $index++)
    {
        $max = $arrK[$index];
        if ($arrT[$index] > $max)$max = $arrT[$index];
        if ($arrYa[$index] > $max)$max = $arrYa[$index];
        if ($arrG[$index] > $max)$max = $arrG[$index];
        $newArr[] = [
            'month' =>$index,
            'degree' => $max
        ];
    }
    echo "<br>Максимальные температуры:<br>";
    //результат
    foreach ($newArr as $key => $value)
    {
        echo "Месяц: {$value['month']} температура {$value['degree']}<br>";
    }

    echo "<br>7. Дан двумерный массив из 5 строк и 6 столбцов. 
    Определить для каждого четного столбца максимальный элемент. Найти произведение этих элементов<br>";
    //данные
    $arr4;
    $countX = 6;
    $countY = 5;
    //формирование массива
    for($indexY = 0; $indexY < $countY; $indexY++)
    {
        $arr4Add = array();
        for($indexX = 0; $indexX < $countX; $indexX++)
        {
            $arr4Add[] = mt_rand(0,9);
        }
        $arr4[] = $arr4Add;
    }
    //вывод массива
    echo "массив:<br>";
    foreach ($arr4 as $key => $value)
    {
        foreach ($value as $key1 => $value1)
        {
            echo "$value1 ";
        }
        echo "<br>";
    }

    $p = 1;
    //задание
    for($indexX = 0; $indexX < $countX; $indexX+=2)
    {
        $max =$arr4[0][$indexX];
        for($indexY = 1; $indexY < $countY; $indexY++)
        {
            if ($arr4[$indexY][$indexX] > $max)
            {
                $max = $arr4[$indexY][$indexX];
            }
        }
        echo "max ($indexX) = $max <br>";
        $p*=$max;
    }
    echo "Произведение = $p<br>";

    echo "<br>8. Создать двумерный массив произвольной длины,
     содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А<br>";
    //данные
    $arr6 = [
        ["cat","dog","pig","anaconda","ant","turtle"],
        ["apple","orange","graits","apricot","banana"],
        ["account","air","three","play","light","animal"]
    ];
    //вывод
    foreach ($arr6 as $key => $value)
    {
        foreach ($value as $key1 => $value1)
        {
            echo "$value1 ";
        }
        echo "<br>";
    }
    //задание
    foreach ($arr6 as $key => $value)
    {
        foreach ($value as $key1 => $value1)
        {
            if ($value1[0] =='a')
            {
                echo "$value1 ";
            }
        }
    }
    echo "<br>";

    echo "<br>9. Создать двумерный массив, состоящий из чисел. 
    Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения<br>";
    $arr7=[
        [1,2,3,4,5],
        [1,2,3,4,5,6],
        [1,2,3,4,5,6,7]
    ];
    $count = 0;
    foreach ($arr7 as $key => $value) {
        $countIzm = 0;
        foreach ($value as $key1 => $value1) {
            $count++;
            $countIzm++;
        }
        echo "[$countIzm] ";
    }
    echo "<br>Количество элементов массива = $count<br>";
    echo "</p>";
    
    //Файл example
    echo "<h1 $colorClassText>Задания из файла example</h1>";
    echo "<h2 $colorClassText>Блок 1. Циклы</h2>";
    echo "<p $colorClassText>";
    
    echo "<br>13. Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от -6 до 4.
     Найти произведение элементов участка массива, между последним нулевым и предпоследним нулевым элементом.<br>";
    $min = -6;
    $max = 4;
    $count = 1000;
    $p = 1;
    include_once "workWithArray.php";
    $arr = GetRandArr($min, $max, $count);
    $indexStart = -1;
    $indexFinish = -1;
    for($index = $count-1; $index >= 0; $index--)
    {
        echo "{$arr[$index]} ";
        if ($arr[$index] == 0 && $indexStart > -1)
        {
            $indexFinish = $index;
            break;
        }
        if ($indexStart > -1)
        {
            $p *= $arr[$index];        
        }
        if ($arr[$index] == 0)
        {
            $indexStart = $index;
        }
    }
    echo "<br>Произведение элементов участка массива, между последним нулевым ($indexStart) и предпоследним нулевым элементом ($indexFinish) = $p<br>";

    echo "<br>14. Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от -15 до 14.
     Найти сумму элементов участка массива, начиная с последнего отрицательного и кончая предпоследним отрицательным элементом<br>";
    $min = -15;
    $max = 14;
    $count = 1000;
    $arr = GetRandArr($min, $max, $count);
    $indexStart = -1;
    $indexFinish = -1;
    $sum = 0;
    for($index = $count-1; $index >= 0; $index--)
    {
        echo "{$arr[$index]} ";
        if ($arr[$index] < 0 && $indexStart > -1)
        {
            $indexFinish = $index;
            break;
        }
        if ($indexStart > -1)
        {
            $sum += $arr[$index];        
        }
        if ($arr[$index] < 0)
        {
            $indexStart = $index;
        }
    }
    echo "<br>Сумма элементов участка массива, начиная с последнего отрицательного ($indexStart) и кончая предпоследним отрицательным элементом ($indexFinish) = $sum<br>";

    echo "<br>15. Дан одномерный массив из 1000 элементов, состоящий из случайных целых чисел в диапазоне от -5 до 2. 
     Найти произведение элементов массива, с начала массива до первого неотрицательного элемента.<br>";
    $min = -5;
    $max = 2;
    $count = 1000;
    $arr = GetRandArr($min, $max, $count);
    $p = 1;
    $indexElement = 0;
    for($index = 0; $index < $count; $index++)
    {
        echo "{$arr[$index]} ";
        if ($arr[$index] > 0)
        {
            $indexElement = $index;
            break;
        }
        $p *= $arr[$index];        
    }
    echo "<br>Произведение элементов массива, с начала массива до первого неотрицательного элемента ($indexElement) = $p<br>";

    echo "<br>16. Дано произвольное целое положительное число K (). Вывести цифры этого числа в порядке неубывания (например, 546085 =>045568).
     Процедуры и функции работы со строками не использовать.<br>";
    $k = mt_rand(10000,100000); 
    echo "<strong>k = $k </strong><br>";
    $arr = array();
    //формирование массива
    while($k > 0)
    {
        $arr[] = $k % 10;
        $k =(int)($k / 10);
    }
    $arr = array_reverse($arr); //чтобы массив был в обычном порядке, как число,  а не с хвоста (сделано для задачи 18)
    //список вариантов сортировки
    enum Order{
        case increases;
        case decrease;
    }   

    $arr1 = SortArray($arr, Order::increases);
    //вывод масива по возрастанию на экран
    foreach($arr1 as $key => $value)
    {
        echo "$value ";
    }
    echo "<br>";

    echo "<br>17. Вывести цифры этого числа в порядке невозрастания (например, 546085=>865540).<br>";
    $arr2 = SortArray($arr, Order::decrease);
    //вывод масива по убыванию на экран
    foreach($arr2 as $key => $value)
    {
        echo "$value ";
    }
    echo "<br>";

    echo "<br>18. Вывести цифры этого числа в обратном порядке (например, 5485 =>5845).<br>";
    for ($index = count($arr)-1; $index >= 0; $index--)
    {
        echo "{$arr[$index]}";
    }
    echo "<br>";

    echo "<br>19. Вывести это число без первой и последней цифры (например, 234653=> 3465).<br>";
    for ($index = 1; $index < count($arr)-1; $index++)
    {
        echo "{$arr[$index]}";
    }
    echo "<br>";

    echo "<br>20. Вывести новое число, полученное из K вычеркиванием всех четных цифр (например, 234653=>353).<br>";
    $newArr = array();
    for ($index = 0; $index < count($arr); $index++)
    {
        if ($arr[$index] % 2 == 1)
        {
            $newArr[] = $arr[$index];
        }
    }
    foreach($newArr as $key => $value)
    {
        echo "{$newArr[$key]} ";
    }
    echo "<br>";

    echo "<br>21. Найти сумму всех четных цифр этого числа.<br>";
    $sum = 0;
    for ($index = 0; $index < count($arr); $index++)
    {
        if ($arr[$index] % 2 == 0)
        {
            $sum += $arr[$index];
        }
    }
    echo "<br>Сумма четных цифр = $sum<br>";

    echo "<br>22. Найти произведение всех нечетных цифр этого числа.<br>";
    $p = 1;
    for ($index = 0; $index < count($arr); $index++)
    {
        if ($arr[$index] % 2 == 1)
        {
            $p *= $arr[$index];
        }
    }
    echo "<br>Произведение нечетных цифр = $p<br>";

    echo "<br>23. Найти произведение всех цифр этого числа, больших заданного T. <br>";
    $p = 1;
    $t = mt_rand(0,8);
    for ($index = 0; $index < count($arr); $index++)
    {
        if ($arr[$index] > $t)
        {
            $p *= $arr[$index];
        }
    }
    echo "<br>Произведение всех цифр, больших $t = $p<br>";
    echo "</p>"; 
    echo "<h2 $colorClassText>Блок 2. Одномерные массивы</h2>";
    echo "<p $colorClassText>";

    echo "<br>1.  Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.";
    echo "Было сделано выше (см. задачу 4 со слайдов)<br>";

    echo "<br>2.  Дано N целых случайных чисел в диапазоне от 1 до 100.  Найти сумму четных и количество нечетных чисел.<br>";
    $min = 1;
    $max = 100;
    $count = mt_rand(10,20);
    $arr = GetRandArr($min, $max, $count);
    $sum = 0;
    $count = 0;
    //вывод на экрам + задача
    foreach($arr as $value) 
    {
        echo "$value ";
        if ($value % 2 == 0)
        {
            $sum +=$value;
        }
        else
        {
            $count++;
        }
    }
    echo "<br> Сумма четных чисел = $sum Количество нечетных чисел = $count<br>";

    echo "<br>3.  Дано N действительных случайных чисел в диапазоне от 1 до 10. Все элементы последовательности, значение которых меньше двух, 
    заменить на ноль, кроме того, получить сумму элементов, находящихся в диапазоне от 3 до 6, а также подсчитать их количество.<br>";
    $min = 1;
    $max = 10;
    $count = mt_rand(10,20);
    $arr = GetRandArr($min, $max, $count);
    $sum = 0;
    $count = 0;
    //вывод + задача
    echo "Массив: <br>";
    foreach ($arr as $key => $value) 
    {
        echo "$value ";
        if ($value < 2)
        {
            $arr[$key] = 0;
        }
        if ($value > 3 && $value < 6)
        {
            $count++;
            $sum += $value;
        }
    }
    //вывод результата
    echo "<br>Новый массив: <br>";
    foreach($arr as $value)
    {
        echo "$value ";
    }
    echo "<br>Сумма элементов, находящихся в диапазоне от 3 до 6 = $sum, количество = $count<br>";

    echo "<br>4.  Дан одномерный массив из N действительных случайных чисел в диапазоне от 1 до 50. 
    Найти минимальный элемент среди элементов с нечетным индексом и максимальный среди элементов с четным.<br>";
    $min = 1;
    $max = 50;
    $count = mt_rand(10,20);
    $arr = GetRandArr($min, $max, $count);
    $minElement = $max;
    $maxElement = $min;
    //вывод + задача
    foreach($arr as $key => $value)
    {
        echo "$key => $value; ";
        if ($key % 2 == 0 && $value > $maxElement)
        {
            $maxElement = $value;
        }
        if ($key % 2 == 1 && $value < $minElement)
        {
            $minElement = $value;
        }
    }    
    echo "<br>Минимальный элемент среди элементов с нечетным индексом = $minElement и максимальный среди элементов с четным = $maxElement<br>";

    echo "<br>5.  Дан одномерный массив из N случайных действительных чисел в диапазоне от -4 до 8 . 
    Вывести в порядке невозрастания (убывания) элементы, модуль которых больше 2.<br>"; 
    $min = -4;
    $max = 8;
    $count = mt_rand(10,20);
    $arr = GetRandArr($min, $max, $count);
    $newArr;
    //вывод + выбор элементов по модулю > 2
    foreach($arr as $value)
    {
        echo "$value ";
        if (abs($value) > 2)
        {
            $newArr[] = $value;
        }
    }
    echo "<br>Итоговый массив<br>";
    $newArr = SortArray($newArr, Order::decrease);
    foreach($newArr as $value)
    {
        echo "$value ";
    }
    echo "<br>";
    echo "</p>";
?>
</main>
    <?php
        include_once "footer.php";
    ?>
</body>
</html>