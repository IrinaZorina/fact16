<?php
$timeForm = date('h:i:s');
$nameForm = isset($_POST['login'])? $_POST['login']: "";
setcookie('login', $nameForm, time()+3600);
setcookie('time', $timeForm, time()+3600);
if(isset($_COOKIE["count"])) {
    $count = $_COOKIE["count"] + 1;
}else{
    $count = 1;
};
setcookie("count", $count, time() + 3600);
$login = $_COOKIE['login'];
$time = $_COOKIE['time'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>1. Создайте куки с логином посетителя и временем последнего захода. Куки должны хранится максимум 1 час. Примечание: возможно понадобится форма для ввода логина.
        2. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.
    </p>
    <form method="post">
        <label for="login">Введите логин: </label>
        <input type="text" name="login">
        <button type="submit">Отправить</button>
    </form>
    <?php
        echo "$login Вы вошли в $time";
        echo  " Вы посетили наш сайт $count раз(а)!";
    ?>
</body>
</html>