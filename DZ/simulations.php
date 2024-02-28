<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulations</title>
    <link rel="stylesheet" href = "assets/styles/styleBackground.css">
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
    echo "<h1 $colorClassText>Блок 4. Моелирование</h1>";
    echo "<p $colorClassText>";
    echo "1. На заводе собирают прибор из трех блоков. Известно, что среди блоков первого типа встречаются 2%
     со скрытыми дефектами, среди блоков второго и третьего типа — соответственно 3% и 5% дефектных. 
     С использованием генератора случайных чисел  промоделировать сборку 1000 деталей и определить, 
     сколько будет собрано приборов без брака.<br>";
    $n = 3;
    $m = 1000;
    $valueMin = 0;
    $valueMax = 100;
    //формирование массива со случайными значениями
    $arr = GetRandDoubleArr($n,$m,$valueMin, $valueMax);
    //вывод на экран количества бракованных блоков
    foreach($arr as $key => $value)
    {
        $count = 0;
        foreach($value as $key1 => $value1)
        {
            //проверка блоков на дефекты
            switch($key)
            {
                case 0:
                    {
                        if ($value1 < 2)
                        {
                            $count++;
                        }
                        break;
                    }
                case 1:
                    {
                        if ($value1 < 3)
                        {
                            $count++;
                        }
                        break;
                    }
                case 2:
                default:
                    {
                        if ($value1 < 5)
                        {
                            $count++;
                        }
                        break;
                    }
            }
        }
        echo "$key: $count бракованных блоков из $m<br>";
    }
    //определение дефектного прибора
    $count = 0;
    for ($index = 0; $index < $m; $index++)
    {
        if ($arr[0][$index] >= 2 && $arr[1][$index] >= 3 && $arr[2][$index] >= 5)
        {
            $count++;
        }
    }
    echo "Приборов без дефекта $count из $m<br>";

    echo "<br>2. Шахматист A в среднем на каждые 100 партий выигрывает у шахматиста B на 6 партий больше, 
    чем проигрывает, а доля ничьих равна 80%. С использованием генератора случайных чисел промоделировать матч из 24 партий. 
    С каким результатом он закончится?<br>";
    $draw = 80;
    $loss = 7;
    $prize = 13;
    $n = 24;
    //формирование массива
    $arr = GetRandArr($valueMin, $valueMax, $n);
    $lossCount = 0;
    $prizeCount = 0;
    //вывод результатов партий и подсчет побед и поражений
    foreach ($arr as $key => $value)
    {
        //подсчет проигрышей
        if ($value <= $loss)
        {
            $lossCount++;
            echo "<font color = \"red\">партия $key => $value</font><br>";
            continue;
        }
        //подсчет выигрышей
        if ($value >= $draw+$prize)
        {
            $prizeCount++;
            echo "<font color = \"green\">партия $key => $value</font><br>";
            continue;
        }
        echo "партия $key => $value<br>";
    }
    //анализ результата выигрышей и проигрышей   
    if ($lossCount == $prizeCount)
    {
        echo "Матч прошел в ничью (побед и поражений по $lossCount)<br>";
    }
    if ($lossCount > $prizeCount)
    {
        echo "Шахматист А проиграл (поражений - $lossCount, побед - $prizeCount)<br>";
    }
    if ($lossCount < $prizeCount)
    {
        echo "Шахматист А выиграл (поражений - $lossCount, побед - $prizeCount)<br>";
    }

    echo "<br>3. Составить программу, позволяющую промоделировать опрос 100 человек и на его основании выяснить: 
    переименовать село Папинск в село Маминск или оставить за ним прежнее название. 
    Примечание: программа должна генерировать ответы самостоятельно с использованием генератора случайных чисел.<br>";
    $n = 100;
    $valueMax = 1;
    $valueMin = 0;
    //формирование массива
    $arr = GetRandArr($valueMin, $valueMax, $n);
    //анализ результата опроса
    $countYes = 0;
    $countNo = 0;
    foreach($arr as $key => $value)
    {
        if ($value == 1)
        {
            $countYes++;
        }
        else
        {
            $countNo++;
        }
    }
    $result = ($countNo>$countYes) ? "не переименовывать":"переименовать";
    echo "Голосов за - $countYes, голосов против - $countNo. Результат голосования: $result<br>";

    echo "<br>4. Имеется две спичечные коробки, в каждой из которых находится по 10 спичек. 
    Случайным образом выбирается коробка и из нее достается одна спичка. Процесс продолжается до тех пор, 
    пока одна из коробок не опустеет. С использованием генератора случайных чисел промоделировать этот процесс, 
    и ответить на вопрос: сколько спичек будет всего сожжено?<br>";
    $m = 10;
    //количество спичек в коробке
    $countOne = $m;
    $countTwo = $m;
    //выбор коробки и доставание спички
    while ($countOne > 0 && $countTwo > 0)
    {
        $box = mt_rand(0,1);
        if ($box == 0)
        {
            $countOne--;
        }
        else
        {
            $countTwo--;
        }
        echo "Первая коробка - $countOne, вторая коробка - $countTwo<br>";
    }
    $count = 2*$m - $countOne - $countTwo;
    echo "Спичек сожжено $count<br>";
    
    echo "<br>5. В детском саду имеется группа детей из 20 человек. Каждому ребенку на утреннике Дед Мороз 
    случайным образом дарит одну из следующих игрушек: зайца, мяч или куклу. 
    С использованием генератора случайных чисел промоделировать этот процесс, и ответить на вопрос: сколько игрушек 
    каждого вида было подарено.<br>";
    $n = 20;
    $countRabbit = 0;
    $countBall = 0;
    $countDoll = 0;
    //выбор игрушки
    for($index = 0; $index < $n; $index++)
    {
        $value = mt_rand(0,2);
        echo "$index => ";
        //определение типа игрушки и ее подсчет
        switch($value)
        {
            case 0:
                {
                    $countRabbit++;
                    echo "<font color = \"grey\">кролик</font><br>";
                    break;
                }
            case 1:
                {
                    $countBall++;
                    echo "<font color = \"red\">мяч</font><br>";
                    break;
                }
            case 2:
            default:
                {
                    $countDoll++;
                    echo "<font color = \"green\">кукла</font><br>";
                    break;
                }
        }
    }
    echo "Подарено <font color = \"grey\">$countRabbit кроликов</font>, 
    <font color = \"red\">$countBall мячей</font>, <font color = \"green\">$countDoll кукол</font><br>";

    echo "<br>6. Робот находится в центре окружности радиусом 3.5 метра и в каждый момент времени делает шаг (длиной 1 м)
     в случайном направлении: на север, на юг, на восток или на запад. 
     С использованием генератора случайных чисел промоделировать этот процесс, и ответить на вопрос: хватит ли 12 шагов, 
     чтобы выйти за пределы окружности?<br>";
    $r = 3.5;
    $step = 1;
    $n = 12;
    $positionX = 0;
    $positionY = 0;
    $isStop = false;
    //шагание робота
    for ($index = 0; $index < $n; $index++)
    {
        $direction = mt_rand(0,3); //0 - север, 1 - восток, 2 - юг, 3 - запад
        switch($direction)
        {
            case 0:
                {
                    $positionY--;
                    break;
                }
            case 1:
                {
                    $positionX++;
                    break;
                }
            case 2:
                {
                    $positionY++;
                    break;
                }
            case 3:
            default:
                {
                    $positionX--;
                    break;
                }
        }
        echo "Позиция робота: $positionX, $positionY<br>";
        //проверка выхода за окружность
        if ($positionX < -$r || $positionX > $r || $positionY < -$r || $positionY > $r)
        {
            echo "Хватит $index шагов, чтобы выйти из окружности<br>";
            $isStop = true;
            break;
        }
    }
    //при не хватании шагов - вывод текста
    if (!$isStop)
    {
        echo "12 шагов не хватит<br>";
    }

    echo "<br>7. Известно, что в среднем из 100 выстрелов солдат A поражает мишень 75 раз, 
    а солдат B — 80 раз. С использованием генератора случайных чисел промоделировать соревнование между ними, 
    в котором каждому нужно попасть в цель по 10 раз. Кто быстрее поразит все мишени?<br>";
    $countA = 75;
    $countB = 80;
    $valueMin = 0;
    $valueMax = 100;
    $countHitsA = 0;
    $countHitsB = 0;
    //проведение выстрелов
    while ($countHitsA < 10 && $countHitsB < 10)
    {
        //значение в % попадания
        $valueA = mt_rand($valueMin, $valueMax);
        $valueB = mt_rand($valueMin, $valueMax);
        //подсчет значений при значении больше значения не попадания
        if ($valueA > $valueMax-$countA)
        {
            $countHitsA++;
        }
        if ($valueB > $valueMax-$countB)
        {
            $countHitsB++;
        }
        echo "попадания солдата A - $countHitsA, попадания солдата B - $countHitsB<br>";
    }
    $result = ($countHitsA == $countHitsB) ? "солдаты А и В поразят одновременно" : 
    (($countHitsA == 10) ? "солдат A поразит мишени быстрее" : "солдат B поразит мишени быстрее");
    echo "$result<br>";

    echo "<br>8. В среднем из 128 компьютеров в течение месяца на одном выходит из строя дисплей. 
    За тот же период времени на одной из 67 ЭВМ происходит поломка дисковода и на двух из 53 машин происходит 
    крах системы из-за заражения вирусом. С использованием генератора случайных чисел смоделировать работу 
    дисплейного класса из 13 компьютеров за один месяц, и ответить на вопрос: каково общее количество поломок за этот период?<br>";
    $disp = 128;
    $disk = 67;
    $virus = 53;
    $countComp = 13;
    $count = 0;
    //пиребор компов
    for ($index = 0; $index < $countComp; $index++)
    {
        //формиролвание поломок
        $collapseDisp = mt_rand(1, 128);
        $collapseDisk = mt_rand(1, 67);
        $collapseVirus = mt_rand(1, 53);
        //вывод поломок на экран
        $collapseDispResult = ($collapseDisp == 1)? "+":"-";
        $collapseDiskResult = ($collapseDisk == 1)? "+":"-";
        $collapseVirusResult = ($collapseVirus <= 2)? "+":"-";
        echo "Комп 1 поломки: дисплей $collapseDispResult дисковод $collapseDiskResult вирус $collapseVirusResult<br>";
        //при наличии поломок - плюсуем
        if ($collapseDisp == 1 || $collapseDisk == 1 || $collapseVirus <=2)
        {
            $count++;
        }
    }
    echo "Общее количество поломок $count<br>";
    echo "</p>";
    ?>
</main>
<?php
    include_once "footer.php";
?>
</body>
</html>