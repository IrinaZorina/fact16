<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
</head>
<body>
    <form method = POST>
        <label data-tooltip = '1'>
            Логин <input type = 'text' name = 'login'>
        </label><br>
        <label data-tooltip = '1'>
            Пароль <input type = 'password' name = 'password'>
        </label><br>
        <input type = 'submit' value = 'Авторизация'>
    </form>
</body>
</html>
<?
if (!isset($_POST['login']) || !isset($_POST['password'])) return;
$login = $_POST['login'];
$password = $_POST['password'];
$dB = 'user';
$loginDB = 'fact';
$passwordDB = 'fact';
$hostName = 'localhost';
$connect = new mysqli($hostName, $loginDB, $passwordDB, $dB);
$select = 'select login, password from autorisation where (login like ? and password like ?);';
$qw = $connect->prepare($select);
$qw->bind_param('ss', $login, $password);
$qw->execute();
$qw->bind_result($loginRead, $passwordRead);
if ($qw->fetch())
{
    header('Location: visit.php');
}
else{
    echo '<p>Неверный логин или пароль</p>';
}
?>