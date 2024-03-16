<?php
session_start();
$last_page = isset($_SESSION['last_page']) ? $_SESSION['last_page'] : 'Вы ещё не посещяли других страниц';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        text-align: center;
    }
 </style>   
<body>
    <h1>Форма регистрации</h1>
    <br><br>
    <form action="<?= $hello?>" method="post">
        <label for="username">Ваш логин: </label>
        <input type="text" name="username">
        <br><br>
        <label for="password">Ваш пароль: </label>
        <input type="text" name="password">
        <br><br>
        <button type="submit">Отправить</button>
    </form>
    <br><br>
    <a href="../index.php">На главную</a>
    <br><br>
</body>
</html>

<?php
$correct_login = 'denis';
$correct_password = 'qwerty';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $login = $_POST['username'];
    $password = $_POST['password'];

    if ($login === $correct_login && $password === $correct_password) {
        echo '<a href="/registration/bitrix.php">BITRIX</a><br>';
        echo '<a href="/registration/fact.php">FACT</a><br>';
        echo '<br>';
        echo 'Последний раз вы посещали: ' . $last_page;
    } else {
        echo 'неверные логин или пароль';
    }
}

?>