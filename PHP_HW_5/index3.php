<?php
session_start();

$credentials = array(
    'user1' => '123',
    'user2' => '1234',
    'user3' => '12345'
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login']) && isset($_POST['passwd'])) {
        $login = $_POST['login'];
        $passwd = $_POST['passwd'];

        if (array_key_exists($login, $credentials) && $credentials[$login] === $passwd) {
            $_SESSION['authenticated'] = true;

            header("Location: index3_1.php");
            exit;
        } else {
            echo "Неверный логин или пароль. Попробуйте еще раз.";
        }
    } else {
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