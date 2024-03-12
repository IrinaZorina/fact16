<?php
//$str = fopen('read.txt','r');
//echo $str;
//echo "<br>";
//$str2 = fread($str, 1);
//echo $str2;
//echo "<br>";
//while ($str2 != null){
  //$str2 = fread($str, 1);
  //echo $str2;
  //if($str2 == "\n" ||$str2 == "\r"){
    //continue;
  //}
  //echo "<br>";
//}
//$str = file('read.txt');
//print_r($str);
//echo "<br>";
//$str2 = file_get_contents('read.txt');
//echo $str2;
//echo "<br>";
//$str2 .= "!!!";
//$str2 = file_put_contents('read.txt', $str2);
//echo "<pre>";
//var_dump($_FILES);
//echo "</pre>";
//move_uploaded_file($_FILES["avatar"]["tmp_name"], __DIR__ . "/upload/" . $_FILES["avatar"]["name"]);
$hostname = 'localhost';
$username = 'BrutalRaynor';
$password = 'Brutal2077';
$dbname = 'project';

$connect = mysqli_connect($hostname, $username, $password, $dbname);
//echo '<pre>';
//var_dump($connect);
//echo '</pre>';
mysqli_set_charset($connect, 'utf8');
$sql = mysqli_query($connect, 'SELECT * FROM person');
$arr = mysqli_fetch_all($sql, MYSQLI_ASSOC);
foreach ($arr as $key => $value){
  echo $value['name'] . "<br>";
}
$sql = mysqli_query($connect, 'INSERT INTO person (name, age) VALUES ("Josh", 28)');
echo '<pre>';
print_r($arr);
echo '</pre>';















