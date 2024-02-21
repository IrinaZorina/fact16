<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>String</title>
  <link rel="stylesheet" href="../../assets/style/style.css" />
  <link rel="stylesheet" href="../../assets/style/stylePhp/string.css" />
  <? require "../inc/inc_font/linkFont.php"; ?>
</head>
<?php require "../inc/inc_lk_F_H/header.php"; ?>
<div class="container">
  <div class="form__string string__1">
    <textarea class="text__string" name="textarea" cols="30" rows="30" readonly>
// Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран.

  <?
  // $str = "Пока";
  $str = "Привет мир";
  if (mb_strlen($str) > 5) {
    echo str_pad(mb_substr($str, 0, 6), 15, "...");
  } else {
    echo $str;
  }
  ?>
    </textarea>
  </div>
  <div class="form__string string__2">
    <textarea class="text__string" name="textarea" cols="30" rows="30" readonly>
// Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.

  <?
  $str = "abc";
  $arr = str_split($str, 1);
  $str2 = null;

  for ($i = 0; $i < mb_strlen($str); $i++) {
    $strChar = mb_substr($str, $i, 1);
    $num = 1;
    foreach ($arr as $key) {
      if ($strChar == $key) {
        $strChar = $num;
      }
      $num++;
    }
    $str2 .= $strChar;
  }

  print $str2;
  ?>
</textarea>
  </div>
  <div class="form__string string__3">
    <textarea class="text__string" name="textarea" cols="30" rows="30" readonly>
// Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.

  <?
  $str = 'abc abc abc';
  // var_dump();
  $position = strrpos($str, "b");
  echo "Символ 'b' на позиции №-$position.";
  ?>
</textarea>
  </div>
  <div class="form__string string__4">
    <textarea class="text__string" name="textarea" cols="30" rows="30" readonly>
//Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.

  <?
  $str = 'html css php';
  $arr = explode(" ", $str, 4);
  print_r($arr);
  ?>
    </textarea>
  </div>
  <div class="form__string string__5">
    <textarea class="text__string" name="textarea" cols="30" rows="30" readonly>
// В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.

 <?
  $date1 = date_create("10-02-2015");
  $date2 = date_create(date("d-m-Y"));
  $res = date_diff($date1, $date2);
  echo "Количество дней : " . $res->days;
  ?>
    </textarea>
  </div>
</div>

<? require "../inc/inc_lk_F_H/footer.php"; ?>