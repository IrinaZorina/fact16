<?php
print_r($_GET);
echo "<br>";
print_r($_POST);
echo "<br>";
print_r($_REQUEST);
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
  <form method="post">
    <label> Логин:
      <input type="text" name="login">
    </label><br>
    <label> Пароль:
      <input type="text" name="password">
    </label><br>
    <label> Комментарии:
      <textarea name="comment"></textarea>
    </label><br>
    <label> Вы согласны?
      <input type="radio" name="checkbox" value="yes">Да
      <input type="radio" name="checkbox" value="no">Нет
    </label><br>
    <label> Любимые увлечения
      <input type="checkbox" name="hobby" value="cinema">Кино
      <input type="checkbox" name="hobby" value="games">Игры
      <input type="checkbox" name="hobby" value="music">Музыка
    </label><br>
    <input type="submit"><br>
  </form>
</body>
</html>