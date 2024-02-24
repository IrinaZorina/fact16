<?php 
    //Подсчет количества слов и гласных букв
     function GetCountWordAndVowel($str)
     {
        $arr_ch = mb_str_split($str);
        $arr = explode(" ", $str,);
        foreach ($arr as $value) 
        {
            if ($value != null)
            {
                $GLOBALS['countWord']++;
            }
        }
        foreach ($arr_ch as $single_char) 
        {
            if ($single_char == "у" || $single_char =="е" || $single_char =="а" || $single_char =="о"
            || $single_char =="я" || $single_char =="и")
            {
                $GLOBALS['countVowel']++;
            }
        }
    }

    //определение количества дней между датами
    function GetDifferenceDate($date):int
    {
        $nowDate = date("d.m.y");
        echo "Текущая дата: $nowDate<br>"; 
        return round((strtotime($nowDate)-strtotime($date))/60/60/24);
    }

    //определение времени суток
    function GetTime()
    {
    $GLOBALS['hours'] = getdate()["hours"]+2; //чтобы было не московское время
    if ($GLOBALS['hours'] > 8 && $GLOBALS['hours'] < 20)
        {
            $GLOBALS['classThime'] =  "whiteThime";
            $GLOBALS['colorClassText'] =  "class = \"blackText\"";
            $GLOBALS['colorText'] =  "blackText";
            $GLOBALS['color1'] = "<font color=\"#4c4c4c\">";
            $GLOBALS['color2'] = "<font color=\"black\">";
        }
        else
        {
            $GLOBALS['classThime'] =  "blackThime";
            $GLOBALS['colorClassText'] =   "class = \"whiteText\"";
            $GLOBALS['colorText'] =   "whiteText";
            $GLOBALS['color1'] = "<font color=\"#aabbaa\">";
            $GLOBALS['color2'] = "<font color=\"wheat\">";
        }
    }

    //тип сортировки
    enum TypeArray
    {
        case float;    
        case int;    
    }

    //Формирование массива
    function GetRandArr($min, $max, $count, $type = TypeArray::int):array
    {
        $arr = array();
        if ($type == TypeArray::int)
        {
            for ($index = 0; $index < $count; $index++)
            {
                $arr[] = mt_rand($min, $max);
            }
        }
        else
        {
            for ($index = 0; $index < $count; $index++)
            {
                $arr[] = mt_rand($min*1000, $max*1000)/1000;
            }
        }
        return $arr;
    } 

    //Формирование двумерного массива
    function GetRandDoubleArr($n, $m, $min, $max,  $type = TypeArray::int):array
    {
        $arr = array();
        if ($type == TypeArray::int)
        {
            for ($indexN = 0; $indexN < $n; $indexN++)
            {
                $subArr = array();
                for ($indexM = 0; $indexM < $m; $indexM++)
                {
                    $subArr[] = mt_rand($min, $max);
                }
                $arr[] = $subArr;
            }
        }
        else
        {
            for ($indexN = 0; $indexN < $n; $indexN++)
            {
                $subArr = array();
                for ($indexM = 0; $indexM < $m; $indexM++)
                {
                    $subArr[] = mt_rand($min*1000, $max*1000)/1000;
                }
                $arr[] = $subArr;
            }
        }
        return $arr;
    } 

    //список вариантов сортировки
    enum Order{
        case increases;
        case decrease;
    }

    //сортировка массива
    function SortArray($arr, $order):array
    {
        //базовый случай
        if (count($arr) < 2)
        {
            return $arr;
        }
        $newArr = array();
        //базовый случай с 2 зна
        if (count($arr) == 2)
        {
            //первый элемент меньше втого и сортировка по возрастанию или первый больше второго и сортировка по убыванию
            if ((($arr[0] < $arr[1]) && ($order == Order::increases)) || (($arr[0] > $arr[1]) && ($order == Order::decrease)))
            {
                $newArr[]= $arr[0];
                $newArr[]= $arr[1];
            }
            else
            {
                $newArr[]= $arr[1];
                $newArr[]= $arr[0];  
            }
            return $newArr;
        }
        $indexArr = mt_rand(0, count($arr)-1);
        $arrLeft = array();
        $arrRight = array();
        for ($index = 0; $index < count($arr); $index++)
        {
            if ($indexArr == $index) 
            {
                continue;
            }
            if ((($arr[$index] < $arr[$indexArr]) && ($order == Order::increases)) || (($arr[$index] > $arr[$indexArr]) && ($order == Order::decrease)))
            {
                $arrLeft[] = $arr[$index];
            }
            else
            {
                $arrRight[] = $arr[$index];
            }
        }
        $arrLeftAdd = SortArray($arrLeft, $order);
        for ($index = 0; $index < count($arrLeftAdd); $index++)
        {
            $newArr[] = $arrLeftAdd[$index];
        }
        $newArr[] = $arr[$indexArr];
        $arrRightAdd = SortArray($arrRight, $order);
        for ($index = 0; $index < count($arrRightAdd); $index++)
        {
            $newArr[] = $arrRightAdd[$index];
        }
        return $newArr;
    }

    //вывод массива на экран
    function WriteArr($arr, $isKey = false)
    {
        foreach ($arr as $key => $value)
        {
            if ($isKey)
            {
                echo $key." => ";
            }
            echo $value."; ";
        }
        echo "<br>";
    }
    //вывод двумерного массива на экран
    function WriteDoubleArr($arr, $isKey = false)
    {
        foreach ($arr as $key => $value)
        {
            echo "$key => {";
            foreach ($value as $key1 => $value1)
            {
                if ($isKey)
                {
                    echo $key1." => ";
                }
                echo $value1."; ";
            }
            echo "}<br>";
        }
        echo "<br>";
    }

    //получение списка отличников
    function GetCandidat($arr):array
    {
        $newArr = SumStr($arr);
        $arrOtl = array();
        foreach($newArr as $key => $value)
        {            
            if ($value == 20)
            {
                $arrOtl[]= $key;
            }
        }
        return $arrOtl;
    }

    //получение средней оценки по предмету
    function GetAverageValueGrade($arr):array
    {
        $newArr = array();
        //суммы оценок по предметам
        $value = SumStolb($arr);
        //расчет среднего значения по предметам
        $newArr["mathematics"] = $value["mathematics"]/count(($arr));
        $newArr["physics"] = $value["physics"]/count(($arr));
        $newArr["chemistry"] = $value["chemistry"]/count(($arr));
        $newArr["informatics"] = $value["informatics"]/count(($arr));
        return $newArr;
    }

    //получение средней оценки учащегося
    function GetAverageValueGradePupil($arr):array
    {
        $newArr = SumStr($arr);
        foreach($newArr as $key => $value)
        {
            $newArr[$key]  /= 4;
        }
        return $newArr;
    }

    //получение списка фирм с повышающимися акциями
    function GetFirm($arr):array
    {
        $newArr = array();
        foreach($arr as $key => $value)
        {
            $isIncrease = true; //флаг значений по возрастанию
            $oldValue = -1;
            foreach($value as $value1)
            {
                //проверка, меньше ли значение, чем предыдущее
                if ($value1 <= $oldValue)
                {
                    $isIncrease = false;
                    break;
                }
                $oldValue = $value1;
            }
            //добавление в список, если значения цифр по возрастанию
            if ($isIncrease)
            {
                $newArr[] = $key;
            }
        }
        return $newArr;
    }

    //расчет итоговой оценки спортсменов
    function GetGradeAthlete($arr):array
    {
        $newArr = array();
        foreach($arr as $value)
        {
            $max = 0;
            $min = 10;
            $sum = 0;
            //подсчет всех оценок и поиск максимальной/минимальной
            foreach($value as $value1)
            {
                if ($value1 < $min)
                {
                    $min = $value1;
                }
                if ($value1 > $max)
                {
                    $max = $value1;
                }
                $sum += $value1;
            }
            //вычитание максимального и минимального значений, нахождение среднего значения
            $sum -=$max+$min;
            $grade = $sum / (count($value)-2);
            $newArr[] = $grade;
        }
        return $newArr;
    }

    //получение пустого массива по столбикам
    function GetNullDoubleArrayStolb($arr, $number):array
    {
        $newArr = array();
        //формирование пустого массива
        foreach($arr as $key => $value)
        {
            foreach($value as $key1 => $value1)
            {
                $newArr[$key1] = $number;
            }
            break;
        }
        return $newArr;
    }

    //получение пустого массива по строчкам
    function GetNullDoubleArrayStr($arr, $number):array
    {
        $newArr = array();
        foreach($arr as $key => $value)
        {
            $newArr[$key] = $number;
        }
        return $newArr;
    }


    //сумма элементов массива построчно
    function SumStr($arr):array
    {
        $newArr = GetNullDoubleArrayStr($arr, 0);
        foreach($arr as $key => $value)
        {
            //определение суммы
            foreach ($value as $key1 => $value1)
            {
                $newArr[$key] += $value1;
            }
        }
        return $newArr;
    }

    //сумма элементов массива по столбцам
    function SumStolb($arr):array
    {
        $newArr = GetNullDoubleArrayStolb($arr, 0);
        foreach($arr as $key => $value)
        {
            //расчет суммы значений столбцов
            foreach($value as $key1 => $value1)
            {
                $newArr[$key1] += $value1;
            }
        }
        return $newArr;
    }

    //произведение элементов по строкам
    function MultiplicationStr($arr):array
    {
        $newArr = GetNullDoubleArrayStr($arr, 1);
        foreach($arr as $key => $value)
        {
            foreach($value as $key1 => $value1)
            {
                $newArr[$key] *= $value1;
            }
        }
        return $newArr;
    }

    //получение максимума по строкам
    function GetMaxWithStr($arr, $maxValue):array
    {
        $newArr = GetNullDoubleArrayStr($arr,0);
        foreach($arr as $key => $value)
        {
            $max = $maxValue;
            foreach($value as $value1)
            {
                if ($value1 > $max)
                {
                    $max = $value1;
                }
            }
            $newArr[$key] = $max;
        }
        return $newArr;
    }

    //максимальное значение по столбикам
    function GetMaxWithStolb($arr):array
    {
        $newArr = GetNullDoubleArrayStolb($arr,0);
        foreach($arr as $key => $value)
        {
            foreach($value as $key1 => $value1)
            {
                //сравнение элемента с максимальным на данный момент для соответствующего столбца
                if ($value1 > $newArr[$key1])
                {
                    $newArr[$key1] = $value1;
                }
            }
        }
        return $newArr;
    }

     //получение минимальногозначения по строкам
    function GetMinWithStr($arr,$minValue):array
    {
        $newArr = GetNullDoubleArrayStr($arr,0);
        foreach($arr as $key => $value)
        {
            $min = $minValue;
            //определение максимального значения
            foreach($value as $value1)
            {
                if ($value1 < $min)
                {
                    $min = $value1;
                }
            }
            $newArr[$key] = $min;
        }
        return $newArr;
    }

    //минимальное значение по столбикам
    function GetMinWithStolb($arr):array
    {
        $newArr = GetNullDoubleArrayStolb($arr,0);
        foreach($arr as $key => $value)
        {
            foreach($value as $key1 => $value1)
            {
                //проверка значения больше аналогичного в массиве 
                if ($value1 < $newArr[$key])
                {
                    $newArr[$key] = $value1;
                }
            }
        }
        return $newArr;
    }

    //максимальное и минимальное значения во всем массиве
    function GetMaxMinWith($arr):array
    {
        $newArr = ["min" =>0, "indexMin" => 0, "max" => 10, "indexMax" => 0];
        foreach($arr as $key => $value)
        {
            foreach($value as $value1)
            {
                if ($value1 < $newArr["min"])
                {
                    $newArr["min"] = $value1;
                    $newArr["indexMin"] = $key;
                }
                if ($value1 > $newArr["max"])
                {
                    $newArr["max"] = $value1;
                    $newArr["indexMax"] = $key;
                }
            }
        }
        return $newArr;
    }

    //максимальное и минимальное значения с индексами построчно
    function GetMaxMinWithStr($arr, $maxValue, $minValue):array
    {
        $newArr = array();
        foreach($arr as $key => $value)
        {
            $min = $maxValue;
            $max = $minValue;
            $newArrValue = array();
            foreach($value as $key1 => $value1)
            {
                if ($value1 < $min)
                {
                    $newArrValue["min"] = $value1;
                    $newArrValue["indexMin"] = $key1;
                    $min = $value1;
                }
                if ($value1 > $max)
                {
                    $newArrValue["max"] = $value1;
                    $newArrValue["indexMax"] = $key1;
                    $max = $value1;
                }
            }
            $newArr[] = $newArrValue;
        }
        return $newArr;
    }
       
?>