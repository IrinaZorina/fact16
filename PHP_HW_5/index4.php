<?php
print_r($_GET);
echo "<br>";
print_r($_POST);
echo "<br>";
print_r($_REQUEST);
$myLink = null;

if (isset($_GET['Laboratory'])) {
  $myLink = htmlspecialchars($_GET['Laboratory']);
}
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
  <form action="index4.php" method="get">
    <select name="Lab">
      <option value="questionnaire" selected>Опрос</option>
      <option value="Lab1">Lab1</option>
      <option value="Lab2">Lab2</option>
      <option value="Lab3">Lab3</option>
      <option value="lab4">Lab4</option>
    </select>
    <input type="submit" name="Submit" value="submit">
  </form>
  <a id="myLink" target="_blank" href="<?= $myLink ?>.php"><? echo $myLink ?></a>
</body>
</html>