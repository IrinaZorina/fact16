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
    function WriteArr($arr, $key = false)
    {
        foreach ($arr as $index => $value)
        {
            if ($key)
            {
                echo $index." => ";
            }
            echo $value."; ";
        }
        echo "<br>";
    }
?>