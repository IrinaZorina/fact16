<?php
$output = $login = $lastVisit = "";
$dateTime = (new DateTimeImmutable("Asia/Yekaterinburg"))->format('c');
$expire = time() + 3600;

if (isset(
  $_POST['submit'],
  $_POST['login']
)) {
  setcookie('login', $_POST['login'], $expire);
  setcookie('last-visit', $dateTime, $expire);

  if (isset(
    $_COOKIE['login'],
  )) {
    $login = $_COOKIE['login'];
    $lastVisit = $_COOKIE['last-visit'];
  }
  $output = "Пользователь - $login, последний визит - $lastVisit";
}

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
    <form action=<?= $_SERVER['PHP_SELF'] ?> method="POST">
        <p>
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login">
        </p>
        <input type="submit" name="submit" value="Отправить">
    </form>
    <?= $output ?>
</body>
</html>