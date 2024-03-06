<?
session_start();

if (isset(
  $_POST["submit"],
  $_POST["q2"]
)) {
  $_SESSION["q2"] = $_POST["q2"];
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
  <form action="result.php" method="POST">
    <label for='q3'>Сколько будет 3 + 3 ?</label>
    <input type='text' id='$q3' name='q3'>
    <input type="submit" name="submit" value="Отправить">
  </form>
</body>

</html>