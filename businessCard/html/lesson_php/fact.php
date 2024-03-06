<?
session_start();
$last = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "";
setcookie('lastPage', $last, time() + 3600);
include "../inc/getPostdz/functions.php";
logOut();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fact</title>
  <link rel="stylesheet" href="../../assets/style/style.css" />
  <? require "../inc/inc_font/linkFont.php"; ?>
</head>
<?php require "../inc/inc_lk_F_H/header.php"; ?>

<body>
  <div class="container">
    <h1>Fact</h1>
    <form action="fact.php" method="post">
      <a id="myLink" href="select.php">Select</a>
      <input type="submit" name="logout" value="logout">
    </form>
  </div>
</body>
<? require "../inc/inc_lk_F_H/footer.php"; ?>

</html>