<?php
 function GetRandArr($min, $max, $count):array
        {
            $arr = array();
            for ($index = 0; $index < $count; $index++)
            {
                $arr[] = mt_rand($min, $max);
            }
            return $arr;
        } 
?>