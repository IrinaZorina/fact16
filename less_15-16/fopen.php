<?php 
    // $str = fopen('read.txt', 'r');
    // echo $str;
    // $str2 = fread($str, 5);
    // echo '<br>';
    // echo $str2;
    // for ($i = 0; $i <= 13; $i++){
    //     $str2 = fread($str, 7);
    //     echo '<br>';
    //     echo $str2;

    // }
//     $str = fopen('read.txt', 'r');
//     echo $str;
//     echo '<br>';
//     $str2 = fread($str, 1);
//     echo '<br>';
//     while ($str2 != NULL){
//         $str2 = fread($str, 1);
//         echo $str2;
//         if($str2 == "\n" || ($str2 == "\r"){
//             continue;
//         }
//         echo $str2;
//     }
$str = file('read.txt');
print_r($str);
echo '<br>';
$str2 = file_get_contents('read.txt');
$str2  .= "!!!";
file_put_contents('read.txt', $str2);
echo $str2;
 ?>