<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Array</title>
  <link rel="stylesheet" href="../../assets/style/style.css" />
  <link rel="stylesheet" href="../../assets/style/stylePhp/array.css" />
  <? require "../inc/inc_font/linkFont.php"; ?>
</head>
<?php require "../inc/inc_lk_F_H/header.php"; ?>
<div class="container">
  <div class="form__array array__1">
    <textarea class="text__array" name="textarea" cols="30" rows="30" readonly>
// Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.

<?
$disciplines = [
  'Mathematics' => [3, 4, 5, 3, 2, 4, 5, 3, 5],
  'Physics' => [5, 3, 2, 4, 5, 3, 5, 3, 3, 1],
  'Chemistry' => [3, 4, 5, 3, 3, 5, 4, 2, 1],
  'Informatics' => [3, 4, 5, 3, 2, 4, 5, 2, 4]
];

$srMat = 0;
$sumMat = 0;
$srPh = 0;
$sumPh = 0;
$srCh = 0;
$sumCh = 0;
$srIn = 0;
$sumIn = 0;

foreach ($disciplines as $discipline => $value) {
  if ($discipline == 'Mathematics') {
    foreach ($value as $key => $item) {
      $sumMat += $item;
      $srMat = round($sumMat / count($value), 2);
    }
  } elseif ($discipline == 'Physics') {
    foreach ($value as $key => $item) {
      $sumPh += $item;
      $srPh = round($sumPh / count($value), 2);
    }
  } elseif ($discipline == 'Chemistry') {
    foreach ($value as $key => $item) {
      $sumCh += $item;
      $srCh = round($sumCh / count($value), 2);
    }
  } elseif ($discipline == 'Informatics') {
    foreach ($value as $key => $item) {
      $sumIn += $item;
      $srIn = round($sumIn / count($value), 2);
    }
  }
}

echo "Математика средний бал: $srMat, сумма оценок $sumMat.\n";
echo "Физика средний бал: $srPh, сумма оценок $sumPh.\n";
echo "Химия средний бал: $srCh, сумма оценок $sumCh.\n";
echo "Информатика средний бал: $srIn, сумма оценок $sumIn.\n";
?>
    </textarea>
  </div>
</div>

<? require "../inc/inc_lk_F_H/footer.php"; ?>