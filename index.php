<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" contents="html, css, information">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form method="POST">
        <label for="login">Логин:
            <input type="text" id="login" name="login">
        </label><br><br>
        <label for="password"> Пароль:
            <input type="text" id="passwd" name="passwd">
        </label><br><br>
        <input type="submit" name="submit" value="Войти">
    </form>
    <br><br>
    <a href="site/index.html">На главную</a>
    <br><br>
</body>
</html>
<?php
if (!isset($_POST["login"]) || !isset($_POST["password"])) return;
$login = $_POST["login"];
$passwd = $_POST["passwd"];
$hostname = 'localhost';
$username = 'BrutalRaynor';
$password = 'Brutal2077';
$dbname = 'loginpassword';

$connect = new mysqli($hostname, $username, $password, $dbname);
$connect->set_charset('utf8');
$authorization = 'SELECT login, passwd FROM users WHERE (login LIKE ? AND passwd LIKE ?';
$stmt->bind_param('ss', $login, $passwd);
$stmt->execute();
$stmt->result($login, $passwd);
if ($stmt->fetch()){
    header("Location: site/index.html");
} else {
    echo "Проверьте корректность введенных данных";
}
?>