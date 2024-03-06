<?php
session_start();
$_SESSION ['question2'] = $_POST ['question2'];
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
  <form method="post" action="result.php">
    <label> 3+3=
      <input type="text" name="question3">
    </label><br>
    <input type="submit">
  </form>
</body>
</html>