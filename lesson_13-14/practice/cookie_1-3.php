<?
/* Задание 1. Пользователь заходит на страницу. Вам необходимо сохранить куки со значением name = "User". 
После обновления страницы нам необходимо вывести на экран "Hello User" (Значение User берется из куки) */

setcookie('name', 'User');
$output = isset($_COOKIE['name']) ? print_r("Hello " . $_COOKIE['name']) : "";


/* Задание 2. Создайте куки с логином посетителя и временем последнего захода. Куки должны хранится максимум 1 час. 
Примечание: возможно понадобится форма для ввода логина. */

/* Задание 3. Сделайте счетчик посещения сайта посетителем. Каждый раз, заходя на сайт, он должен видеть надпись: 
   'Вы посетили наш сайт % раз!'. */

$output = $login = $lastVisit = "";
$dateTime = (new DateTimeImmutable("Asia/Yekaterinburg"))->format('c');
$expire = time() + 3600;
$hitCount = 0;

if (isset(
  $_POST['submit'],
  $_POST['user-login']
)) {
  setcookie('user-login', $_POST['user-login'], $expire);
  setcookie('last-visit', $dateTime, $expire);
  setcookie('hit-count', $hitCount, $expire);

  if (isset(
    $_COOKIE['user-login'],
    $_COOKIE['hit-count']
  )) {
    $login = $_COOKIE['user-login'];
    $lastVisit = $_COOKIE['last-visit'];
    // общий счетчик
    $hitCount = ++$_COOKIE['hit-count'];
    setcookie('hit-count', $hitCount, $expire);
  } else {
    $hitCount = 1;
    setcookie('hit-count', $hitCount, $expire);
  }

  $output = "Пользователь - $login, последний визит - $lastVisit, вы посетили наш сайт $hitCount раз!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action=<?= $_SERVER['PHP_SELF'] ?> method="POST">
    <p>
      <label for="user-login">Логин:</label>
      <input type="text" id="user-login" name="user-login">
    </p>
    <input type="submit" name="submit" value="Отправить">
  </form>
  <?= $output ?>
</body>

</html>