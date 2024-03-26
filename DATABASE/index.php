<?php
$hostname = 'localhost';
$username = 'user';
$password = 'user';
$dbname = 'project';

$connect = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($connect, 'utf8');
$sql = mysqli_query($connect, 'SELECT * FROM person');
$arr = mysqli_fetch_all($sql, MYSQLI_ASSOC);

//1.Вывести все имена, которые хранятся в таблице person и каждое имя должно начинаться с новой строки,
// в таблице поля id, name, age.
foreach ($arr as $row) {
    echo $row['name'] . "\n";
};


//2.Вставить новое значение запросом в таблицу person
// Новые данные для вставки
$name = "John";
$age = 25;
// Подготовленное выражение
$sql = "INSERT INTO person (name, age) VALUES (?, ?)";
// Подготовка запроса
if ($stmt = mysqli_prepare($connect, $sql)) {
    // Привязка параметров
    mysqli_stmt_bind_param($stmt, "si", $name, $age);
    // Выполнение подготовленного запроса
    if (mysqli_stmt_execute($stmt)) {
        echo "Новая запись успешно добавлена";
    } else {
        echo "Ошибка при выполнении запроса: " . mysqli_stmt_error($stmt);
    }
    // Закрытие запроса
    mysqli_stmt_close($stmt);
} else {
    echo "Ошибка при подготовке запроса: " . mysqli_error($connect);
}
