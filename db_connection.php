<?php

// Подключение к базе данных
$servername = "localhost"; // адрес сервера базы данных
$username = "root";   // имя пользователя базы данных
$password = "";  // пароль пользователя базы данных
$dbname = "akov"; // имя вашей базы данных

// Создание соединения
$con = mysqli_connect($servername, $username, $password, $dbname);

// Проверка соединения
if (!$con) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Установка кодировки UTF-8
mysqli_set_charset($con, "utf8");

