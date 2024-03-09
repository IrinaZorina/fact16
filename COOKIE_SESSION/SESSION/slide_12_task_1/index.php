<?php

session_start();

// Проверяем, было ли отправлено имя пользователя из формы
if (isset($_POST['username'])) {
    // Сохраняем имя пользователя в сессию
    $_SESSION['username'] = $_POST['username'];
    // Перенаправляем пользователя на страницу hello.php
    header("Location: hello.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствие</title>
</head>
<body>
<form method="post" action="">
    <label for="username">Введите ваше имя:</label><br>
    <input type="text" id="username" name="username" required><br>
    <input type="submit" value="Приветствовать">
</form>
</body>
</html>

