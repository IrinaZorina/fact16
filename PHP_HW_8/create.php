<?php
$hostname = 'localhost';
$username = 'BrutalRaynor';
$password = 'Brutal2077';
$dbname = 'project';

if (isset($_POST["name"]) && isset($_POST["age"])) {
    $connect = mysqli_connect($hostname, $username, $password, $dbname);
    if (!$connect) {
        die("Ошибка: " . mysqli_connect_error());
    }
    mysqli_set_charset($connect, 'utf8');
    $sql = mysqli_query($connect, 'SELECT * FROM person');
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $age = mysqli_real_escape_string($connect, $_POST["age"]);
    $sql = mysqli_query($connect, "INSERT INTO person (name, age) VALUES (\"$name\", \"$age\")");
    if(mysqli_query($connect, $sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . mysqli_error($connect);
    }
    mysqli_close($connect);
}
