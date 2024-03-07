<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE/SESSION</title>
</head>
<body>
    <form action = <?= $_SERVER["PHP_SELF"] ?> method = POST>
        <label for = "login">Логин:</label>
        <input type ="text" id = "login" name = "login">
        <input type ="submit" name="submit" value="Отправить">
    </form>
<?= $output ?>

<?php
$output = $login = $lastVisit = "";
$dateTime = (new DateTimeImmutable("Asia/Yekaterinburg")) -> format('c');
$expire = time() + 3600;

if (isset(
    $_POST['submit'],
    $_POST['login']
)) {
    setcookie('login', $_POST['login'], $expire);
    setcookie('last-visit', $dateTime, $expire);

    if (isset($_COOKIE['login'],)) {
        $login = $_COOKIE['login'];
        $lastVisit = $_COOKIE['last-visit'];
    }
    $output = "Пользователь - $login, последний визит - $lastVisit"; 
}
?>
<br>
<br>
 <h1>Вы посетили наш сайт <?=$_COOKIE['count']?> раз!</h1>

 <?php
 if (!isset($_COOKIE['count'])) {
    setcookie('count', 1, time()+3600*24);
    $_COOKIE['count'] = 1;
 } else {
    setcookie('count', ++$_COOKIE['count'], time()+3600*24);
 }
 echo $_COOKIE['count'];
 ?>
 <br>
 <br>
 <h1>Время: <?=$lastVisited ?></h1>

 <?php
 session_start();
 if (!isset($_SESSION['login_time'])) {
    $_SESSION['login_time'] = time();
 }

 $lastVisited = (new DateTimeImmutable("Asia/Yekaterinburg"))->setTimestamp($_SESSION['login_time'])->format("d-m-Y H:i:s");
 $timeSincePreviousLogin = time() - $_SESSION['login_time'];
 ?>
 <br>
 <br>
 <h1>Пользователь зашёл <?=time() - $_SESSION['time'] ?> секунд назад</h1>

<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['time']) && isset($_SESSION)){
    $_SESSION['time'] = time();
} else{
    echo time() - $_SESSION['time'];
}
?>
</body>
</html>