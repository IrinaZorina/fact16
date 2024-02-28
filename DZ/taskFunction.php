<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <link rel = "stylesheet" href = "assets/styles/styleBackground.css">
</head>
<body>
<?php
    include_once "function.php";
    include_once "getTime.php";
    GetClassBody($hours);
    include_once "header.php";
?>
<main>
    <?php 
    echo "<h1 $colorClassText>Задания из файла example</h1>";
    echo "<h1 $colorClassText>Блок 5. Функции</h1>";
    echo "<p $colorClassText>";

    echo "3.	Дано N десятоков целых чисел. Определить, сколько из них могут составлять ряд Фибоначчи. 
    Первое число Фибоначчи равно 0, второе – 1. Каждое последующее равно сумме двух предыдущих. 
    Проверку оформить в виде функции.<br>";
    $n = 50;
    $valueMin = 0;
    $valueMax = 5;
    //формирование массива
    $arr = GetRandArr($valueMin, $valueMax, $n);
    foreach ($arr as $key => $value)
    {
        echo "$value ";
    }
    //проверка последовательности Фибоначчи
    function CheckedFib($arr)
    {
        $count = 0;
        $oldValue = 0;
        $newValue = 1;
        $isSertch = false;
        foreach($arr as $key => $value)
        {
            //проверка первого элемента (0)
            if ($value == 0 && !$isSertch)
            {
                $isSertch = true;
                continue;
            }
            //проверка 1 (если есть, то считаем, что найдена последовательность)
            if ($isSertch && $value == $newValue)
            {
                $count++;
                $isSertch = false;
                continue;
            }
            $isSertch = false;
        }
        echo "<br>Последовательность могут составить $count<br>";
    }
    CheckedFib($arr);

    echo "<br>4.	Дано N пар чисел, представляющих собой координаты точек на плоскости. 
    Найти R — радиус наименьшей окружности с центром в начале координат, в которую попадают все точки. 
    Определение расстояния от точки до начала координат оформить в виде функции.<br>";
    $n = 5;
    $arr = array();
    $valueMax = 10;
    for ($index = 0; $index < $n; $index++)
    {
        //формирование точек
        $valueX = mt_rand(0,$valueMax);
        $valueY = mt_rand(0,$valueMax);
        $arr[] = [$valueX, $valueY];
    }

    //определение расстояния до точки
    function GetRadius($arr):float
    {
        $maxLength = 0;
        foreach($arr as $key => $value)
        {
            $length = sqrt($value[0]**2+$value[1]**2);
            echo "({$value[0]};{$value[1]}) расстояние от (0;0) = $length<br>";
            if ($length > $maxLength)
            {
                $maxLength = $length;
            }
        }
        return $maxLength;
    }
    $r = GetRadius($arr);
    $r1 = sqrt($valueMax**2+$valueMax**2);
    echo "Минимальный радиус = $r, максимально возможный - $r1<br>";

    echo "5.	Известны оценки группы студентов за сессию. В группе 20 студентов, в сессии 4 экзамена. Определить суммарную стипендию. 
    Считать, что стипендия в размере R рублей начисляется студентам, сдавшим сессию без троек, а отличники получают стипендию, повышенную на 25% . 
    Подсчет стипендии студента оформить в виде функции.<br>";
    $n = 20;
    $m = 4;
    $valueMax = 5;
    $valueMin = 2;
    //формирование массива
    $arr = GetRandDoubleArr($n, $m,$valueMin,$valueMax);
    WriteDoubleArr($arr, true);
    //определение суммарной стипендии
    function GetStip($arr):float
    {
        $r = 1000;
        $count4 = 0;
        $count5 = 0;
        $otl = "";
        $ud = "";
        //подсчет количества ударнков и отличников
        foreach($arr as $key => $value)
        {
            $isOtl = true;
            $isUd = true;
            //определение ударников и отличников
            foreach($value as $value1)
            {
                if($value1 < 4)
                {
                    $isOtl = false;
                    $isUd = false;
                    break;
                }
                if ($value1 == 4)
                {
                    $isOtl = false;
                }
            }
            //подсчет ударников и отличников и запоминание их индексов
            if ($isOtl)
            {
                $count5++;
                $otl .= $key." ";
                continue;
            }
            if ($isUd) 
            {
                $count4++;
                $ud .= $key." ";
            }
        }
        echo "Отличников - $count5 ( $otl), ударников - $count4 ( $ud)";
        //вычисление суммы стипендий
        return $count4*$r+$count5*$r*1.25;
    }
    $value = GetStip($arr);
    echo "<br>Суммарная стипендия $value<br>";
    
    echo "<br>6.	Известен расход электроэнергии по всем квартирам 24-х квартирного дома. Определить суммарную плату за электричество. 
    При расходе до 100 кВт*ч на человека берется тариф R копеек за 1 кВт*ч, в случае превышения нормы тариф возрастает на 20%. 
    Подсчет платы для квартиры  оформить в виде функции.<br>";
    $n = 24;
    //формирование массива расходов электроэнергии по квартирам
    $valueMin = 0; 
    $valueMax = 150;
    $arr = GetRandArr($valueMin, $valueMax, $n);
    WriteArr($arr, true);
    function GetSum($arr): float
    {
        $sum = 0;
        $r = 5;
        $limit = 100;
        $rLimit = $r*1.2;
        //определение суммы оплаты по квартирам
        foreach($arr as $key => $value)
        {
            //определение тарифа
            if ($value < $limit)
            {
                $sum += $value*$r;
            }
            else 
            {
                $sum += $value*$rLimit;
            }
        }
        return $sum;
    }
    $value = GetSum($arr);
    echo "<br>Суммарная плата = $value<br>";

    echo "<br>7.	Известна ежемесячная заработная плата персонала предприятия в течение календарного года. Вывести фамилии тех сотрудников, 
    у которых годовая заработная плата выше средней. Считать, что штат предприятия составляет 7 человек. Подсчет годовой зарплаты работника оформить в виде функции.<br>";
    $n = 7;
    $m = 12;
    $valueMin = 30;
    $valueMax = 50;
    $fio = ["Иванов", "Петров","Сидоров","Тюленин","Совин","Кабанин","Моржов"];
    //формирование массива
    $arr= GetRandDoubleArr($n,$m,$valueMin, $valueMax, TypeArray::int, $fio);
    WriteDoubleArr($arr, true);

    //расчет зарплаты за год
    function GetZP($arr): float
    {      
        $sumP = 0;
        foreach($arr as $value1)
        {
            $sumP += $value1;
        }       
        return $sumP;
    }
    
    //определение средней зарплаты
    $sum = 0;
    $arrZ = array();
    foreach($arr as $key => $value)
    {
        $sumP = GetZP($value);
        $sum+=$sumP;      
        $arrZ[$key] = $sumP/$m;     
    }
    $srZP = $sum / ($n*$m);
    echo "Средняя зарплата = $srZP<br>";
    //поиск сотрудников, у которых зарплата выше средней
    foreach($arrZ as $key => $value)
    {
        if ($value > $srZP)
        {
            echo "$key ($value), ";
        }           
    }
    echo "<br>";

    echo "<br>8.	Известна ежемесячная заработная плата персонала предприятия в течение календарного года. Вывести фамилии сотрудников с минимальной 
    и максимальной годовой заработной платой. Считать, что штат предприятия составляет 8 человек. Подсчет годовой зарплаты работника оформить в виде функции.<br>";
    $n = 8;
    $m = 12;
    $valueMin = 30;
    $valueMax = 50;
    $fio = ["Иванов", "Петров","Сидоров","Тюленин","Совин","Кабанин","Моржов", "Федотов"];
    //формирование массива
    $arr= GetRandDoubleArr($n,$m,$valueMin, $valueMax, TypeArray::int, $fio);
    WriteDoubleArr($arr, true);
    //расчет минимальной и максимальной зарплаты
    function GetMinMaxZP($arr):array
    {
        $minMaxValue = array();
        $minMaxValue["min"] = min($arr);
        $minMaxValue["max"] = max($arr);
        return $minMaxValue;
    }
    //определенеие минимального и максимального значений
    $min = $valueMax;
    $nameMin = "";
    $max = $valueMin;
    $nameMax = "";
    foreach ($arr as $key => $value) 
    {
        $minMax = GetMinMaxZP($value);
        if ($minMax["min"] < $min)
        {
            $min = $minMax["min"];
            $nameMin = $key;
        }
        if ($minMax["min"] == $min)
        {
            $nameMin .= ", ".$key;
        }
        if ($minMax["max"] > $max)
        {
            $max = $minMax["max"];
            $nameMax = $key;
        }
        if ($minMax["max"] > $max)
        {
            $nameMax .= ", ".$key;
        }
    }
    echo "Минимальная зарплата у $nameMin ($min), максимальная - $nameMax ($max)<br>";

    echo "<br>9.	Дан одномерный массив из 100 случайных целых чисел в диапазоне от 5 до 25 включительно. Вывести все числа, которые максимально часто
     встречаются в массиве и количество их повторений. Подсчет количества повторений для числа оформить в виде функции.<br>";
    $n = 100;
    $valueMin = 5;
    $valueMax = 25;
    //формирование массива
    $arr = GetRandArr($valueMin, $valueMax, $n);
    WriteArr($arr);
    //подсчет количества повторений
    function GetCountNumeric($arr, $numeric):int
    {
        $count = 0;
        foreach($arr as $value)
        {
            if ($value == $numeric)
            {
                $count++;
            }
        }
        return $count;
    }
    $max = 0;
    $maxNumeric = "";
    //проверка каждого значение на количество вхождений в массив и сравнение с максимумом
    for ($index = $valueMin; $index <= $valueMax; $index++)
    {
        $value = GetCountNumeric($arr, $index);
        if ($value > $max)
        {
            $max = $value;
            $maxNumeric = $index;
            continue;
        }
        if ($max == $value)
        {
            $maxNumeric .= ", $index";
        }
    }
    echo "Максимальное количетсво цифр $max (значения $maxNumeric)<br>";

    echo "<br>10.	Дан одномерный массив из 150 случайных целых чисел в диапазоне от 14 до 37 включительно. Вывести те числа, которые наиболее редко 
    встречаются в массиве и количество их повторений. Подсчет количества повторений для числа оформить в виде функции.<br>";
    $n = 150;
    $valueMin = 14;
    $valueMax = 37;
    //формирование массива
    $arr = GetRandArr($valueMin, $valueMax, $n);
    WriteArr($arr);
    //перебор значений и определение минимального количества значений
    $min = $n; 
    $minNumeric = "";
    for ($index = $valueMin; $index <= $valueMax; $index++)
    {
        $value = GetCountNumeric($arr, $index);
        if ($value < $min)
        {
            $min = $value;
            $minNumeric = $index;
            continue;
        }
        if ($value == $min)
        {
            $minNumeric .= ", $index";
        }
    }
    echo "Минимальное количетсво цифр $min (значения $minNumeric)<br>";

    echo "<br>11.	Дан одномерный массив из 50 случайных целых чисел в диапазоне от 10 до 85 включительно. Вывести в порядке возрастания те числа из 
    данного диапазона, которые ни разу не встречаются в массиве. Создать функцию для поиска элемента в массиве.<br>";
    $n = 50;
    $valueMin = 10;
    $valueMax = 85;
    $arr = GetRandArr($valueMin, $valueMax, $n);
    WriteArr($arr);
    //перебор значений и определение количества значений
    $result = "";
    for ($index = $valueMin; $index <= $valueMax; $index++)
    {
        $value = GetCountNumeric($arr, $index);
        if ($value == 0)
        {
            $result .= "$index ";
        }
    }
    echo "<br>В массиве нет значений: $result<br>";

    echo "<br>12.	Дан одномерный массив из 40 случайных целых чисел в диапазоне от 16 до 89 включительно. Вывести минимальное и максимальное числа из
     данного диапазона, которые ни разу не встречаются в массиве. Создать функцию для поиска элемента в массиве.<br>";
    $n = 40;
    $valueMin = 16;
    $valueMax = 89;
    $arr = GetRandArr($valueMin, $valueMax, $n);
    WriteArr($arr);
    //перебор значений и поиск не встречающихся значений
    $result = "";
    $arrNew = array();
    for ($index = $valueMin; $index <= $valueMax; $index++)
    {
        $value = GetCountNumeric($arr, $index);
        if ($value == 0)
        {
            $result .= "$index ";
            $arrNew[] = $index;
        }
    }
    //поиск минимального и максимального значения
    $min = min($arrNew);
    $max = max($arrNew);
    echo "<br>Из значений, не встречающихся в массиве ( $result) минимальное - $min, максимальное - $max<br>";
    echo "</p>";
    ?>
</main>
<?php
    include_once "footer.php";
?>    
</body>
</html>