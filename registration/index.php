<?php
$login = 'denis';
$pass = 'qwerty';

if($_POST['username'] == $login && md5($_POST['password']) == md5($pass)){
    $hello = '/registration/hello.php';
}else{
    echo 'Логин и пароль не верны';
}

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
</body>
</html>