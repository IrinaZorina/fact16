<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Loop</title>
  <link rel="stylesheet" href="../../assets/style/style.css" />
  <link rel="stylesheet" href="../../assets/style/stylePhp/loop.css" />
  <? require "../inc/inc_font/linkFont.php"; ?>
</head>
<?php require "../inc/inc_lk_F_H/header.php"; ?>
<div class="container">
  <div class="form__loop loop__1">
    <textarea class="text__loop" name="textarea" cols="30" rows="30" readonly>
// Выведите столбец чисел от 5 до 13.

<?
for ($i = 5; $i <= 13; $i++) {
  echo $i . "\n";
}
?>
    </textarea>
  </div>
  <div class="form__loop loop__2">
    <textarea class="text__loop" name="textarea" cols="30" rows="30" readonly>
// Дано число $num=1000. Задача через цикл while.

<?
$num = 1000;

$i = 0;
while ($num > 50) {
  $num = $num / 2;
  $i++;
}
echo "While \nПолученное число: $num, количество итераций: $i";
?>
</textarea>
  </div>
  <div class="form__loop loop__3">
    <textarea class="text__loop" name="textarea" cols="30" rows="30" readonly>
// Дано число $num=1000. Задача через цикл For.

<?
$num = 1000;

for ($j = 0; $num > 50; $j++) {
  $num = $num / 2;
}
echo "For \nПолученное число: $num, количество итераций: $j";
?>
</textarea>
  </div>
  <div class="form__loop loop__4">
    <textarea class="text__loop" name="textarea" cols="30" rows="30" readonly>
//  Передавать значение в переменную ($i).

<?
$i = 0;
while ($i++ < 10) {
  switch ($i) {
    case 0:
      echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10\n";
      break;
    case 1:
      echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9\n";
      break;
    case 2:
      echo "0, 1, 2, 3, 4, 5, 6, 7, 8\n";
      break;
    case 3:
      echo "0, 1, 2, 3, 4, 5, 6, 7\n";
      break;
    case 4:
      echo "0, 1, 2, 3, 4, 5, 6\n";
      break;
    case 5:
      echo "0, 1, 2, 3, 4, 5\n";
      break;
    case 6:
      echo "0, 1, 2, 3, 4\n";
      break;
    case 7:
      echo "0, 1, 2, 3\n";
      break;
    case 8:
      echo "0, 1, 2\n";
      break;
    case 9:
      echo "0, 1\n";
      break;
    case 10:
      echo "0\n";
      break;
    default:
      echo "Нет такого значения";
  }
}
?>
    </textarea>
  </div>
</div>

<? require "../inc/inc_lk_F_H/footer.php"; ?>