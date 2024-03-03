<?php
print_r($_GET);
echo "<br>";
print_r($_POST);
echo "<br>";
print_r($_REQUEST);
echo "<br>";
$credentials = [];
$outputForm = "";
$path = __DIR__ . '/data/credentials.csv';

$file = fopen($path, 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  $credentials[$line[0]] = $line[1];
}
fclose($file);

if (isset(
  $_POST["submit"],
  $_POST["login"],
  $_POST["password"]
)) {
  $outputForm = in_array($_POST["login"], array_keys($credentials)) &&
    $_POST["password"] === $credentials[$_POST["login"]] ?
    "Доступ к секретным страницам открыт." : "Неверное сочетание логин/пароль.";
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
  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="POST">
    <label for="login">Логин:</label>
    <select id="login" name="login">
      <option value="">--Выберите пользователя--</option>
      <option>admin</option>
      <option>content-manager</option>
      <option>user1</option>
      <option>user2</option>
    </select>
    <p>
      <label for="password">Пароль (длина пароля не менее 3-х символов):</label>
      <input type="password" id="password" name="password" minlength="3" required />
    </p>
    <input type="submit" name="submit" value="Войти" />
  </form>
  <p><?= $outputForm ?></p>
</body>
</html>