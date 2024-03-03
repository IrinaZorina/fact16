<?php
print_r($_GET);
echo "<br>";
print_r($_POST);
echo "<br>";
print_r($_REQUEST);
echo "<br>";
if (isset($_POST)){
  print_r($_GET);
  echo "<br>";
  $password = md5($_POST['password']);
  $_POST['password'] = $password;
  echo "<br>";
  print_r($_POST);
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
  <form method="post">
    <label> Логин:
      <input type="text" name="login">
    </label><br>
    <label> Пароль:
      <input type="text" name="password">
    <input type="submit"><br>
  </form>
</body>
</html>