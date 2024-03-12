<?php



















//$arr = [1, 10, 100, 1000];
//foreach ($arr as $key => $val){
  //echo $val . '<br>';
//}

//$arr = [];
//for ($i = 0; $i < 10; $i++){
  //echo $arr[$i] = mt_rand(0, 100) . '<br>';
//}

//function randomize($arr){
  //for ($i = 0; $i < 10; $i++){
    //$arr[$i] = mt_rand(0, 100);
  //}
  //return $arr;
//}
//print_r($arr);





//Задача 5
//$sum = 0;
//$count = 0;
//for($i = 1, $k = 1; $sum < 10; $i += 2, $k++) {
  //$sum += $i / $k;
  //echo $sum . "<br>";
  //$count++;
//}
//echo "Нужно сложить $count элементов";
//echo "<br>";

//Задача 6
//$sum = 0;
//$count = 0;
//$i = 1;
//$k = 2;
//while ($sum < 10){
  //$sum += $i / $k;
  //echo $sum . "<br>";
  //$i += 2;
  //$k += 2;
  //$count++;
//}
//echo "Нужно сложить $count элементов";
//echo "<br>";

//Задача 1
//$a = mt_rand(1,100);
//$b = mt_rand(1,200);
//$c = mt_rand(1,10);
//if($a < $b){
  //for($i = $a; $i < $b; $i++){
    //if(($i % $c) == 0){
      //echo "Число $i, кратное $c" . "<br>";
    //}
  //}
//}


//Задача 2
//$sum = 0;
//$i = 30;
//while ($i++ < 100) {
  //if (($i % 3) == 0 && (($i % 10) === 2 || ($i % 10) === 4 || ($i % 10) === 8)){
    //$sum += $i;
  //}
//}
//echo $sum;

//Задача 3
//$i = 10;
//while ($i++ < 250) {
  //if (($i % 3) == 0){
    //echo $i . "<br>";
  //}
  //elseif (($i % 5) == 0){
    //echo $i . "<br>";
  //}
//}
//echo "<br>";

//$pi = 0;
//$t = 0.01; //Точность
//$s = 1; //Знак
//$d = 1; //знаменатель
//$count = 0;
//while (abs($pi - M_PI) >= $t){
  //$pi += $s * (4 / $d);
  //$s *= -1;
  //$d += 2;
  //$count++;
//}
//echo "Минимальное количество слагаемых - $count";

//Задача 5
//$marks = [
  //['math' => 5, 'physics' => 4, 'chemistry' => 3, 'informatics' => 5],
  //['math' => 4, 'physics' => 3, 'chemistry' => 3, 'informatics' => 4],
  //['math' => 3, 'physics' => 5, 'chemistry' => 4, 'informatics' => 5],
  //['math' => 5, 'physics' => 3, 'chemistry' => 4, 'informatics' => 5],
//];
//$sums = ['math' => 0, 'physics' => 0, 'chemistry' => 0, 'informatics' => 0];
//$count = ['math' => 0, 'physics' => 0, 'chemistry' => 0, 'informatics' => 0];

//foreach ($marks as $mark){
  //foreach($mark as $subject => $value){
    //$sums[$subject] += $value;
    //$count[$subject] ++;
  //}
//}

//$average = [];
//foreach ($sums as $subject => $sum){
  //$average[$subject] = $sum / $count[$subject];
//}

//foreach ($average as $subject => $avg){
  //echo "$subject : $avg <br>";
//}




//echo "<pre>";
//print_r($sums);
//echo "</pre>";
//echo "<pre>";
//print_r($count);
//echo "</pre>";



//Задача 6
//$countries = [
  //'Cuba' => ['January' => 23, 'February' => 34, 'March' => 33, 'April' => 35],
  //'Trinidad' => ['January' => 28, 'February' => 31, 'March' => 43, 'April' => 28],
  //'Jamaica' => ['January' => 18, 'February' => 27, 'March' => 27, 'April' => 35],
  //'Haiti' => ['January' => 38, 'February' => 36, 'March' => 31, 'April' => 33],
//];
//$result = [];

//foreach ($countries as $island => $temperatures){
  //$max_temp = 0;
  //$max_month = 0;
  //foreach ($temperatures as $month => $temperature){
    //if ($temperature > $max_temp){
      //$max_temp = $temperature;
      //$max_month = $month;
    //}
  //}
  //$result[$island] = ['Месяц' => $max_month, 'Максимальная температура' => $max_temp];
//}
//echo "<pre>";
//print_r($result);
//echo "</pre>";
//echo "<br>";


//for($i = 1, $k = 1; $sum < 10; $i += 3, $k++) {
  //$sum += $i / $k;
  //echo $sum . "<br>";
  //$count++;
//}
//echo "Нужно сложить $count элементов";

//while ($sum < 10){
  //$sum += $i / $k;
  //echo $sum . "<br>";
  //$i += 3;
  //$k++;
  //$count++;
//}
//echo "Нужно сложить $count элементов";


//Задача 1
//function arr($a) {
  //$b = mt_rand(1,8);
      //for($i = 0; $i < $b; $i++){
      //$a[] =+ mt_rand(1,10);
      //}
      //return $a;
//}
//$array = [];
//print_r(arr($array));
//echo "<br>";


//Задача 2
//$str = 'HTML, CSS, PHP, BITRIX';
//function f($a) {
  //$arr = explode(' ', $a);
  //$count = 0;
  //for($i = 0; $i < count($arr); $i++){
    //$count++;
  //}
  //return $count;
//}
//echo f($str);
//echo "<br>";


//Задача 3
//$str = 'HTML, CSS, PHP, BITRIX';
//function reverse($x) {
  //for($i = mb_strlen($x); $i >= 0; $i--){
    //echo substr($x, $i, 1);
  //}
//}
//echo reverse($str);
//echo "<br>";


//Задача 4
//$str = 'HTML, CSS, PHP, BITRIX';
//function length($a){
  //echo mb_strlen($a);
//}
//echo length($str);
//echo "<br>";


//Задача 5
//function br($a){
  //for($i = 0; $i < mb_strlen($a); $i++){
      //echo substr($a, $i, 1) . '<br>';
  //}
//}
//echo br($str);
//echo "<br>";












//Задача 1
//function f($a, $b){
  //if($a > $b){
    //return $a;
  //} else {
    //return $b;
  //}
//}
//$a = 20;
//$b = 10;
//echo f($a, $b);
//echo "<br>";


//Задача 2
//function triangle($a, $b){
  //$c = sqrt(($a **2) + ($b ** 2));
  //return $c;
//}
//$a = 9;
//$b = 9;
//echo triangle($a, $b);
//echo "<br>";


//Задача 3
//function cycle($a){
  //while ($a <= 1000000) {
    //echo $a;
    //$a *= 10;
    //echo "<br>";
  //};
//};
//$a = 10;
//echo cycle($a);
//echo "<br>";


//Задача 4
//function arr1(){
  //$arr = array_fill(0, rand(0, 10), rand(0, 100));
  //foreach ($arr as $key => $val){
    //echo $key . " - " . $val . "<br>";
  //} return $arr;
//}
//print_r(arr1($arr));









//$greet = function($par){
  //printf("Hello there, %s! </p>", $par);
//};
//$name = "Katara";
//$name1 = "Mai";
//$greet($name);




//function sum($a){
  //$a += 10;
  //return $a;
//}
//$a = 20;
//$b = sum($a);
//echo $b;


//function hello($name, $age) {
  //echo "Hello, my name is $name! Age = $age";
//};

//$name = "Tom";
//$age = 22;
//hello($name, $age);
//echo "<br>";
//$name1 = "Katara";
//$age1 = 14;
//hello($name1, $age1);
//echo "<br>";
//$name2 = 5;
//$age2 = 6;
//hello($name2, $age2);
//echo "<br>";








//$str = "fact";
//$str[0] = strtoupper($str[0]);
//echo $str;
//echo ucfirst($str);
//echo "<br>";


//$str2 = 'Усов Игорь Игоревич';
//$arr2 = explode(' ', $str2);
//unset($arr2[2]);
//$arr2_1 = array_reverse($arr2);
//echo implode(' ', $arr2_1);
//echo "<br>";


//$str3 = 'Привет, мир';
//$arr3 = mb_str_split($str3);
//$num = 0;
//for ($i = 0; $i < count($arr3); $i++){
  //if ($arr3[$i] == "и" or $arr3[$i] == "И"){
    //$num++;
  //}
//}
//echo $num;
//echo "<br>";

//$str4 = "html css php";
//echo mb_substr($str4, 0, 4);
//echo "<br>";
//echo mb_substr($str4, 5, 3);
//echo "<br>";
//echo mb_substr($str4, -3, 3);
//echo "<br>";







//$str = "НАДЁЖНЫЙ ВЕБ-ИНТЕГРАТОР ФАКТ!";
//$str2 = "HELLO";
//$arr1 = str_split($str2, 3);
//print_r($arr1);
//echo "<br>";
//$arr2 = [(mb_substr($str2, 0, 2)), (mb_substr($str2, 2, 3))];
//print_r($arr2);








//$arr2 = str_split($str2, 6);
//print_r($arr2);

//echo mb_strtolower($str);

//echo str_replace(array("НАДЁЖНЫЙ", "ВЕБ-ИНТЕГРАТОР", "ФАКТ"), array("RELATABLE", "WEB-INTEGRATOR", "FACT"), $str);

//echo str_replace("ВЕБ", "WEB", $str);


//echo mb_strpos($str, 'А');
//echo mb_strlen($str);
//echo mb_substr($str, 0, 4);
//echo "<br>";
//echo substr($str, 0, 6);







//$arr = ['blue', 'red', 'green'];
//print_r ($arr);
//echo "<br>";
//$str = implode(" ", $arr);
//echo $str;
//echo "<br>";
//$arr2 = explode(" ", $str);
//print_r($arr2);





//$a = 100; //int
//$b = "$a"; //str

//$c = (string)$b;
//if($c == $a) {
  //echo "+";
//}
//if($c == $b) {
 // echo "-";
//}
//var_dump($a);
//echo "<br>";
//var_dump($b);
//echo "<br>";
//var_dump($c);
//echo "<br>";



//$var = '10' + '0.1E-5';
//var_dump($var);









//$arr1 = [50, 45 , 40, 35, 30];
//$result = 0;
//for ($i = 0; $i <= count($arr1)-1; $i++) {
//$result += $arr1[$i];
//};
//echo $result  . "<br>";

//$arr2 = [];
//for ($i = 0; $i <= 10; $i++) {
//$arr2[$i] = mt_rand(25, 150);
//echo $arr2[$i] . ", ";
//};
//echo "<br>";
//for ($i = count($arr2)-1; $i >= 0; $i--) {
//echo $arr2[$i] . ", ";
//};

//$arr3 = ['images/doctor_strange.jpg', 'images/iron_man.jpg', 'images/black-widow.jpg'];
//$rand_img = $arr3[mt_rand(0, 2)];
//echo "<img src='$rand_img'>" . "<br>";

//$arr4 = [];
//$maxNeg = null;
//$minPos = null;

//for ($i = 0; $i < 10; $i++) {
  //$arr4[$i] = mt_rand(-100, 100);
  //echo $arr4[$i]  . "\t - i" . count($arr4) . "<br>";
  //if($arr4[$i] > 0){
   //$numPos = $arr4[$i]; 
    //if($numPos < $minPos or $minPos === null){
      //$minPos = $numPos;
    //}
  //}
  //elseif($arr4[$i] < 0){
    //$numNeg = $arr4[$i];
    //if ($numNeg > $maxNeg or $maxNeg === null) {
      //$maxNeg = $numNeg;
    //}
  //}
//}
//echo "Наибольшее отрицательное: $maxNeg . <br>";
//echo "Наименьшее положительное: $minPos . <br>";




























//$arr6 = [[10, 11, 12], [21, 22], [31, 32, 33]];
//echo '<pre>';
//print_r($arr6);
//echo '</pre>';


//$arr7 = [
  //'fruits' => [
    //'apple' => 'яблоко',
    //'banana' => 'банан',
    //'pineapple' => 'ананас',
  //],
  //'vegetables' => [
    //'tomato' => 'помидор',
    //'cucumber' => 'огурец',
  //],
  //'drinks' => [
    //'water' => 'вода',
    //'coffee' => 'кофе',
    //'tea' => 'чай',
  //]
//];
//echo '<pre>';
//print_r($arr7);
//echo '</pre>';
//foreach ($arr7 as $key => $value) {
  //if ($key == 'drinks') {
    //foreach ($value as $key_new => $item) {
      //echo $item . '<br>';
    //}
  //}
//}


//$user['name'] = 'Татьяна';
//$user['surname'] = 'Иванова';
//$user['age'] = 30;
//$user['children'] = 1;
//print_r($user);

//$arr4 = array(
//'hello' => 'Привет',
//'bye' => 'Пока',
//);
//echo '<pre>';
//print_r($arr4);
//echo '</pre>';

//$arr5 = [
//'apple' => 'яблоко',
//'banana' => 'банан',
//'pineapple' => 'ананас',
//];
//print_r($arr5);
//foreach ($arr5 as $key => $value) {
//echo $key . ' = ' . $value . '<br>';
//echo "$key переводится как $value <br>";
//}

// можно инициализировать массив
// $user = array();
//$user = [];

//$user["name"] = "Татьяна";
//$user["surname"] = "M.";
//$user["age"] = 31;
//$user["email"] = "tat.M@gmail.com";
//$user["job"] = "Менеджер";
//$user["experience"] = 5;
//$user["children"] = 1;

//echo "<pre>";
//print_r($user);
//echo "</pre>";
// так будет работать,
// только непонятно, зачем смешивать индексный и ассоциативный массивы
//$user[1] = "г. Москва";
//$user[] = "Драники";

// так работать не будет
//echo "<h3>Hi, Miss $user['name']  $user['surname'], вот твои личные данные:</h3>";
//echo "<pre>";
//print_r($user);

// a так будет
//echo "<h3>Hi, Miss {$user['name']}  {$user['surname']}, вот твои личные данные:</h3>";
//echo "<pre>";
//print_r($user);

// так тоже будет
//echo "<h3>Hi, Miss $user[name]  $user[surname], вот твои личные данные:</h3>";
//echo "<pre>";
//print_r($user);

//$arr1 = array('яблоко', 'ананас', 'банан');
//print_r($arr1);
//echo $arr1['2'];

//$arr1[] = 'помидор';
//$arr1[] = 'огурец';
//$arr1[] = 'чай';
//print_r($arr2);

//$arr = array();
//$arr3 = [1, 4, 6];
//echo count($arr1). '<br>';

//for($i = 0; $i < count($arr1); $i++) {
//echo $arr1[$i] . '<br>';
//}

//foreach ($arr1 as $value) {
//echo $value . '<br>';
//}

//$i = mt_rand(0, count($arr1)-1);
//echo $arr1[$i];