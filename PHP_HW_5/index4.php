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
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="GET">
    <label for="lab-works">Лабораторные работы:</label>
    <select id="lab-works" name="Lab">
     <option value="">--Выберите лабораторную работу--</option>
      <option value="Lab1">Лаб1</option>
      <option value="Lab2">Лаб2</option>
      <option value="Lab3">Лаб3</option>
      <option value="Lab4">Лаб4</option>
    </select>
    <p><button type="submit">Перейти</button></p>
  </form>
</body>
</html>