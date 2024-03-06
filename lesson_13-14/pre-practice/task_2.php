<?
session_start();

if (isset(
  $_POST["submit"],
  $_POST["q1"]
)) {
  $_SESSION["q1"] = $_POST["q1"];
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
  <form action="task_3.php" method="POST">
    <label for='q2'>Сколько будет 2 + 2 ?</label>
    <input type='text' id='$q2' name='q2'>
    <input type="submit" name="submit" value="Отправить">
  </form>
</body>

</html>