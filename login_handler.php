<?php

// Подключаем файл для установки соединения с базой данных
require_once('db_connection.php');

// Получаем данные из формы входа
$username = $_POST['username'];
$password = $_POST['password'];

// Готовим SQL-запрос для получения данных пользователя из базы данных
$sql = "SELECT * FROM users WHERE username='$username'";

// Выполняем запрос
$result = mysqli_query($con, $sql);

if ($result) {
    // Проверяем, есть ли пользователь с указанным логином
    if (mysqli_num_rows($result) > 0) {
        // Получаем данные пользователя
        $row = mysqli_fetch_assoc($result);
        // Проверяем совпадение пароля
        if (password_verify($password, $row['password'])) {
            // Пароль верный, сохраняем данные пользователя в сессии
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            // Перенаправляем пользователя на защищенную страницу (например, на главную страницу)
            header("Location: index.php");
            exit();
        } else {
            // Неверный пароль
            $error_message = "Неверный пароль";
        }
    } else {
        // Пользователь с указанным логином не найден
        $error_message = "Пользователь с указанным логином не найден";
    }
} else {
    // Ошибка выполнения запроса
    $error_message = "Ошибка при выполнении запроса: " . mysqli_error($con);
}

// Закрываем соединение с базой данных
mysqli_close($con);

// Перенаправляем пользователя на эту же страницу с сообщением об ошибке
header("Location: login.php?error_message=" . urlencode($error_message));
exit();
