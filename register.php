<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
<h1>Регистрация</h1>
<?php
// Проверяем, есть ли ошибки в URL-адресе
if (isset($_GET['error'])) {
    $error = $_GET['error'];
    // В зависимости от ошибки выводим соответствующее сообщение
    switch ($error) {
        case 'missing_data':
            echo '<p style="color: red;">Пожалуйста, заполните все поля формы.</p>';
            break;
        case 'duplicate_user':
            echo '<p style="color: red;">Пользователь с таким именем или email уже существует.</p>';
            break;
        case 'registration_failed':
            echo '<p style="color: red;">Ошибка при регистрации. Пожалуйста, попробуйте еще раз.</p>';
            break;
        // Добавьте обработку других возможных ошибок, если необходимо
        default:
            echo '<p style="color: red;">Произошла неизвестная ошибка.</p>';
            break;
    }
}
?>
<form action="register_handler.php" method="post">
    <label for="username">Логин:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    <label for="password">Пароль:</label>
    <input type="password" id="password" name="password" required><br><br>
    <button type="submit">Зарегистрироваться</button>
</form>
</body>
</html>
