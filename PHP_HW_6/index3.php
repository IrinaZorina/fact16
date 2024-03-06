<?php
session_start();
if (!isset($_SESSION['login_time'])) {
    $_SESSION['login_time'] = time();
  }
  
  $lastVisited = (new DateTimeImmutable("Asia/Yekaterinburg"))->setTimestamp($_SESSION['login_time'])->format("d-m-Y H:i:s");
  $timeSincePreviousLogin = time() - $_SESSION['login_time'];

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
    <h1>Время: <?=$lastVisited ?></h1>
</body>
</html>