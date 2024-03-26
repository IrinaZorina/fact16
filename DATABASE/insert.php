<?php
//3.Создать форму, куда вводятся имя и возраст. При отправке данных, значения записываются в таблицу
$hostname = 'localhost';
$username = 'user';
$password = 'user';
$dbname = 'project';

// Подключение к базе данных
$connect = mysqli_connect($hostname, $username, $password, $dbname);
if (!$connect) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Получение данных из формы
$name = $_POST['name'];
$age = $_POST['age'];

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

// Закрытие соединения с базой данных
mysqli_close($connect);


