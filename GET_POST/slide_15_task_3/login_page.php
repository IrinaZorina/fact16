<?php
session_start(); // Начало сессии

// Список доступных логинов и паролей
$credentials = array(
    'user1' => '123',
    'user2' => '1234',
    'user3' => '12345'
);

// Проверка, были ли отправлены данные формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверка наличия отправленных данных
    if (isset($_POST['login']) && isset($_POST['passwd'])) {
        $login = $_POST['login'];
        $passwd = $_POST['passwd'];

        // Проверка правильности логина и пароля
        if (array_key_exists($login, $credentials) && $credentials[$login] === $passwd) {
            // Если логин и пароль совпадают, устанавливаем переменную сессии для аутентификации
            $_SESSION['authenticated'] = true;

            // Выполняем перенаправление на секретную страницу
            header("Location: secret_page.php");
            exit;
        } else {
            // Если логин и/или пароль неверны, выводим сообщение об ошибке
            echo "Неверный логин или пароль. Попробуйте еще раз.";
        }
    } else {
        // Если данные не были отправлены, выводим сообщение о неправильной отправке формы
        echo "Ошибка: недостаточные данные.";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<h2>Введите логин и пароль:</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="login">Логин:</label>
    <select name="login" id="login">
        <option value="user1">Пользователь 1</option>
        <option value="user2">Пользователь 2</option>
        <option value="user3">Пользователь 3</option>
    </select><br>
    <label for="passwd">Пароль:</label>
    <input type="password" name="passwd" id="passwd"><br>
    <input type="submit" value="Войти">
</form>
</body>
</html>
