<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre';

$hostname = 'localhost';
$username = 'Konstantin';
$password = 'FAKT';
$dbname = 'SQLHW';

$connect = mysqli_connect($hostname, $username, $password, $dbname);
// echo '<pre>';
// var_dump($connect);
// echo '</pre>';

$addData = mysqli_query($connect, "INSERT INTO people (name, age) VALUES ('$_POST[name]','$_POST[age]' )");

echo '<h2>' . $_POST ['name']. ', ' .  'your data has been successfully added! </h1>';