<!DOCTYPE html>
<html lang="en">
  <!-- // Создать страницу для ввода имени пользователя (login) и пароля (password). Если пользователь вводит правильную пару (login/password), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка. 
  
  Создайте форму генерации ссылки с параметром:
  Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
  При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.
  
  Слайд 16 Создайте анкету на форме.
-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>getPostDZ3</title>
  <link rel="stylesheet" href="../../assets/style/style.css" />
  <? require "../inc/inc_font/linkFont.php"; ?>
</head>
<?php require "../inc/inc_lk_F_H/header.php"; ?>

<body>
  <div class="container">
    <? include "../inc/getPostdz/inPHP.php" ?>
    <form action="getPostDZ3.php" method="post">
      <label>Login:</label><br>
      <p><input type="radio" name="user" value="admin"> admin</p>
      <p><input type="radio" name="user" value="kirill"> kirill</p>
      <p><input type="radio" name="user" value="irina"> irina</p>
      <label>Password:</label><br>
      <input type="password" name="pass" value="admin"><br>
      <button type="submit" name="login" value="login">Log in</button><br>
    </form>
  </div>
</body>
<? require "../inc/inc_lk_F_H/footer.php"; ?>

</html>