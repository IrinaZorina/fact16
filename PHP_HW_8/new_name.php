<?php
$hostname = 'localhost';
$username = 'BrutalRaynor';
$password = 'Brutal2077';
$dbname = 'project';

$connect = mysqli_connect($hostname, $username, $password, $dbname);
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