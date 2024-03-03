<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Select</title>
  <link rel="stylesheet" href="../../assets/style/style.css" />
  <? require "../inc/inc_font/linkFont.php"; ?>
</head>
<?php require "../inc/inc_lk_F_H/header.php"; ?>

<body>
  <div class="container">
    <? require "../inc/getPostdz/inPhpSelect.php"; ?>
    <form action="select.php" method="get">

      <select name="Laboratory">
        <option value="questionnaire" selected>Опрос</option>
        <option value="1">Laboratory-1</option>
        <option value="2">Laboratory-2</option>
        <option value="3">Laboratory-3</option>
        <option value="4">Laboratory-4</option>
      </select>

      <input type="submit" name="Submit" value="submit">
      <input type="submit" name="logout" value="logout">

    </form>

    <a id="myLink" target="_blank" href="<?= $myLink ?>.php"><? echo $myLink ?></a>
  </div>
</body>
<? require "../inc/inc_lk_F_H/footer.php"; ?>

</html>