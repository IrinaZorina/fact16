<?php
$loginForm = isset($_GET['login'])? $_GET['login'] : "";
setcookie('login', $loginForm, time()+3600);
setcookie('time', date("H:i:s"), time()+3600);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" contents="html, css, information">
    <title>About Me</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>
        Логин посетителя: <?=isset($_GET['login'])? $_GET['login'] : "" ?><br>
        Время посетителя: <?=$_COOKIE['time']?><br>
    </h1>
    <form>
        <label> Логин:
            <input type="text" name="login" value=>
        </label><br>
        <input type="submit"><br>
    </form>
</body>
</html>