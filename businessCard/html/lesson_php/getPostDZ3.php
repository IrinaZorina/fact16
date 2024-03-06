<?
session_start();
include "../inc/getPostdz/functions.php";
// print_r($_SESSION);
// print_r($_COOKIE);
?>
<!DOCTYPE html>
<html lang="en">
  <!-- 
  К задаче с авторизацией добавить две страницы (fact.php, bitrix.php).
-->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GetPostDZ3</title>
  <link rel="stylesheet" href="../../assets/style/style.css" />
  <? require "../inc/inc_font/linkFont.php"; ?>
</head>
<?php require "../inc/inc_lk_F_H/header.php"; ?>

<body>
  <div class="container">
    <? loginAndPassword() ?>
    <form action="getPostDZ3.php" method="post">
      <label>Login:</label><br>
      <p><input type="radio" name="user" value="admin"> admin</p>
      <p><input type="radio" name="user" value="kirill"> kirill</p>
      <p><input type="radio" name="user" value="irina"> irina</p>
      <label>Password:</label><br>
      <input type="password" name="pass" value="admin"><br>
      <button type="submit" name="login" value="login">Log in</button><br>
    </form>
	<p><?= pageLast()?></p>
  </div>
</body>
<? require "../inc/inc_lk_F_H/footer.php"; ?>

</html>