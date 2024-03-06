<?php
session_start();
$_SESSION ['question1'] = $_POST ['question1'];
print_r($_SESSION);
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
  <form method="post" action="task3.php">
    <label> 2+2=
      <input type="text" name="question2">
    </label><br>
    <input type="submit">
  </form>
</body>
</html>