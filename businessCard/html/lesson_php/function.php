<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Function</title>
  <link rel="stylesheet" href="../../assets/style/style.css" />
  <link rel="stylesheet" href="../../assets/style/stylePhp/function.css" />
  <? require "../inc/inc_font/linkFont.php"; ?>
</head>
<?php require "../inc/inc_lk_F_H/header.php"; ?>
<div class="container">
  <div class="form__function function__1">
    <textarea class="text__function" name="textarea" cols="30" rows="30" readonly>
// Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.

<?
function arrOne(...$args)
{
  $arr = [];
  for ($i = 1; $i <= 10; $i++) {
    $arr[$i] = rand(0, 100);
  }
  foreach ($arr as $key => $value) {
    echo $key . ' - ' . $value . PHP_EOL;
  }
  return $arr;
}

$newArr = [];

arrOne($newArr);
?>
    </textarea>
  </div>
  <div class="form__function function__2">
    <textarea class="text__function" name="textarea" cols="30" rows="30" readonly>
// Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.

<?

function quantityWords($a)
{
  $arr = explode(", ", $a);
  echo "Количество слов в строке: " . count($arr);
  return count($arr);
}

$string = "HTML, CSS, PHP, BITRIX";

QuantityWords($string);
?>
</textarea>
  </div>
  <div class="form__function function__3">
    <textarea class="text__function" name="textarea" cols="30" rows="30" readonly>
// Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).

<?
function turnString($str)
{
  $length = mb_strlen($str);
  for ($i = $length - 1; $i >= 0; $i--) {
    echo $str[$i];
  }
}

$string = "HTML, CSS, PHP, BITRIX";

turnString($string);
?>
</textarea>
  </div>
  <div class="form__function function__4">
    <textarea class="text__function" name="textarea" cols="30" rows="30" readonly>
// Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.

<?
function lenString($str)
{
  echo "Длинна строки " . mb_strlen($str) . " символа.";
}

$string = "HTML, CSS, PHP, BITRIX";

lenString($string);
?>
    </textarea>
  </div>
  <div class="form__function function__5">
    <textarea class="text__function" name="textarea" cols="30" rows="30" readonly>
// Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку.

<?
function newStr($str)
{
  $str = str_replace(",", "", $str);
  $length = mb_strlen($str);
  for ($i = 0; $i <= $length - 1; $i++) {
    echo $str[$i] . PHP_EOL;
  }
}

$string = "HTML, CSS, PHP, BITRIX";

newStr($string);
?>
    </textarea>
  </div>
</div>

<? require "../inc/inc_lk_F_H/footer.php"; ?>