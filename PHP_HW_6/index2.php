<?php

if (!isset($_COOKIE['count'])) {
    setcookie('count', 1, time()+3600*24);
    $_COOKIE['count'] = 1;
} else {
    setcookie('count', ++$_COOKIE['count'], time()+3600*24);
}
echo $_COOKIE['count']
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
    <h1>Вы посетили наш сайт <?=$_COOKIE['count']?> раз!</h1>
</body>
</html>