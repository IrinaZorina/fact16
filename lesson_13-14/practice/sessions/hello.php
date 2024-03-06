<?
/* Задание 1. Сделайте две страницы: index.php и hello.php. При заходе на index.php спросите с помощью формы имя пользователя, 
запишите его в сессию. При заходе на hello.php поприветствуйте пользователя фразой "Привет, Имя!". */
/* Задание 2. Запишите в сессию время захода пользователя на сайт. 
При обновлении страницы выводите сохраненное время на экран. */
/* Задание 3. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад 
пользователь зашел на сайт. */

session_start();

if (isset(
  $_POST["submit"],
  $_POST["user_name"]
)) {
  $_SESSION["user_name"] = $_POST["user_name"];
  
  if (!isset($_SESSION['login_time'])) {
    $_SESSION['login_time'] = time();
  }
  
  $lastVisited = (new DateTimeImmutable("Asia/Yekaterinburg"))->setTimestamp($_SESSION['login_time'])->format("d-m-Y H:i:s");
  $timeSincePreviousLogin = time() - $_SESSION['login_time'];
}

// session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p><? echo "Привет, {$_SESSION["user_name"]}!<br>
Последний вход: $lastVisited<br>
Время с момента последнего входа: $timeSincePreviousLogin секунд назад." ?></p>
</body>

</html>