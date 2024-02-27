<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  require_once('header.php');
  ?>
  <h3>Задание 1</h3>
  <?php
  function diff($num1, $num2){
      if($num1 > $num2){
          return $num1;
      }
      else 
      {
          return $num2;
      }
  }
$f = diff(10, 15);
echo $f;
?>
<h3>Задание 2</h3>
<?php 
  
  function gip($a, $b){
    $c = ($a**2) + ($b**2); 
    return sqrt($c);
}
$c = gip(10, 15);
echo $c;
?>
<h3>Задание 3</h3>
<?php
function plusNumber ($num){
    while($num <=1000000){
        $num *= $num;
        echo $num . "<br>";
    }
    if($num > 1000000){
        echo "Вы прошли допустимое число";
    }
}
plusNumber(10);
// function plusNumber ($num){
//     for($i = $num; $i < 1000000; $i*=10){
//           $d= $num * $i . "<br>";    
//           return $d;
//     }
//     if ($i > 1000000){
//         echo "вы достигли предела";
//     };  
// }
//     echo $d;
//  plusNumber(10);
 ?>
   
    
<?php
// function f($i){
//     if($i <= 5){
//         f($i+1);
//         echo $i . "<br>";
       
//     }
// }
// f(1);
// $greet = function($par1){
//     printf("Привет, давайте изучать %s вместе!", $par1);
// };
// $lang1 = "Bitrix";
// $greet($lang1);




  // МАССИВ мои интересы 
// $hobby = ["PHP", "Программирование", "CSS", "Bitrics", "HTML"];

// // 
// // // аргумент переменной длины
// function outHobby(...$args) {
// 	// проверяем тип данных и значения аргумента
// 	echo "<pre>";
// 	var_dump($args);
// 	echo "</pre>";
// };

//  echo "<h3>Вывод: массив из 1-го элемента типа array (двумерный массив)  и трех строковых значений</h3>";	

// // вызов функции
// // ПЕРЕДАЕМ АРГУМЕНТЫ - МАССИВ И НЕСКОЛЬКО СКАЛЯРНЫХ СТРОКОВЫХ ЗНАЧЕНИЙ

// outHobby($hobby, "MySQL", "Transact SQL", "NoSQL");

// /* Вывод: массив из 1-го элемента типа array (двумерный массив)  и трех строковых значений
//   array(4) {
//           [0]=>
//           array(5) {
//             [0]=>
//             string(3) "PHP"
//             [1]=>
//             string(32) "Программирование"
//             [2]=>
//             string(3) "CSS"
//             [3]=>
//             string(7) "Bitrics"
//             [4]=>
//             string(4) "HTML"
//           }
//           [1]=>
//           string(5) "MySQL"
//           [2]=>
//           string(12) "Transact SQL"
//           [3]=>
//           string(5) "NoSQL"
//         }
// */

// function outHobby($arr){
//     echo "<pre>";
//     var_dump($arr);
//     echo "<pre>";
//     foreach($arr as $key => $val){
//        echo "Увлечение " . ++$key . " - " . $val . "</br>";
//     }
// }
// $hobby = ["PHP", "Программирование", "CSS", "Bitrics", "HTML"];
// outHobby($hobby);
// function outHobby(...$args){
//     foreach($args as $value){
//         echo "<li>$value</li>";
//     }
// }
// outHobby("PHP", "Программирование", "CSS", "Bitrics", "HTML", "GIT");
//  function hello($name, $age=18){
//         echo "Hello $name, $age";
//     }
//     $name = "Tom";
//     $name2 = "Bob";
//     $age = "22";
//     $age2 = "30";

//     hello($name ,$age);
//     echo "<br>";
//     hello($name2 );
//     echo "<br>";

// function sum($a){
//     $a += 10;
//     echo $a;
// }
// $b = 15;
// echo $b . '<br>';
// sum($b);
// echo "<br>";
// echo $b . "<br>";
// sum($b);
// function inc($par) {
//     $par = $par + 10;
//     echo "Локальная переменная = " . $par; // 15
//     echo "<p>";
// }
// $var = 5;

// // вызываем функцию
// inc($var);
// echo "Глобальная переменная = " . $var; // 5

// function hello($name, $age){
//     echo "Hello $name, $age";
// }
// $name = "Tom";
// $name2 = "Bob";
// $age = "22";
// $age2 = "30";

// hello($name ,$age);
// echo "<br>";
// hello($name2 ,$age2);
// echo "<br>";
// $age = "22";
?>

</body>
</html>

