<?
/* Задание 5. Отправить логины и комментарии на почту (значения должны сохраняться вместо тестового документа на 
   электронный адрес).
   *Так как мы отправляем e-mail на локальном сервере, то письма будут сохраняться в папку \OpenServer\userdata\temp\email
*/
if (isset(
  $_POST["submit"],
  $_POST["login"],
  $_POST["comment"]
)) {
  $to = "zigmgn@yandex.ru";
  $subject  = "Tecт";
  $message = "Логин: " . $_POST["login"] . "\nКомментарий: " . $_POST["comment"];

  mail($to, $subject, $message);
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
  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <p>
      <label for="login">Логин:</label>
      <input type="email" id="login" name="login">
    </p>
    <p>
      <label for="comment">Комментарий:</label>
      <textarea style="display: block" name="comment" cols="30" rows="10" maxlength="200" placeholder="Оставьте комментарий"></textarea>
    </p>
    <input type="submit" name="submit" value="Отправить" />
  </form>
</body>

</html>