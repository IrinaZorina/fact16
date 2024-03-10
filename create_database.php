<?php

// Параметры подключения к серверу MySQL
$servername = "localhost";
$username = "root";
$password = "";

// Установка соединения с сервером MySQL
$conn = mysqli_connect($servername, $username, $password);

// Проверка соединения
if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}

// Создание базы данных "akov"
$sql_create_db = "CREATE DATABASE IF NOT EXISTS akov";
if (mysqli_query($conn, $sql_create_db)) {
    echo "База данных создана успешно<br>";
} else {
    echo "Ошибка при создании базы данных: " . mysqli_error($conn) . "<br>";
}

// Выбор базы данных "akov"
mysqli_select_db($conn, "akov");

// Создание таблицы "users"
$sql_create_table = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql_create_table)) {
    echo "Таблица 'users' создана успешно";
} else {
    echo "Ошибка при создании таблицы: " . mysqli_error($conn);
}

// Закрытие соединения с сервером MySQL
mysqli_close($conn);

