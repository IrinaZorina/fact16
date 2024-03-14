<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
<h1>Вход</h1>
<?php
// Проверяем, есть ли сообщение об ошибке в URL
if (isset($_GET['error_message'])) {
    // Если есть, выводим сообщение об ошибке
    $error_message = $_GET['error_message'];
    echo "<p style='color: red;'>$error_message</p>";
}
?>
<form action="login_handler.php" method="post">
    <label for="username">Логин:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br><br>
    <button type="submit">Войти</button>
</form>
<!-- Кнопка для перехода на главную страницу -->
<a href="index.php"><button>На главную</button></a>
<!-- Кнопка для перехода на страницу регистрации -->
<a href="register.php"><button>Зарегистрироваться</button></a>
</body>
</html>
