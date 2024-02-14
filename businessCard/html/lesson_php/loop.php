<? require "../inc/inc_lk_F_H/header.php" ?>
<link rel="stylesheet" href="../../../assets/style/stylePhp/loop.css" />
<div class="container">
  <div class="form__loop loop__1">
    <textarea class="text__loop" name="textarea" cols="30" rows="30" readonly>
// Выведите столбец чисел от 5 до 13.

for ($i = 5; $i <= 13; $i++) {
  echo $i . "<br>";
}
    </textarea>
  </div>
  <div class="form__loop loop__2">
    <textarea class="text__loop" name="textarea" cols="30" rows="30" readonly>
// Дано число $num=1000. Задача через цикл while.

$num = 1000;

$i = 0;
while ($num > 50) {
  $num = $num / 2;
  $i++;
}
echo "While <br> Полученное число: $num , количество итераций: $i";
</textarea>
  </div>
  <div class="form__loop loop__3">
    <textarea class="text__loop" name="textarea" cols="30" rows="30" readonly>
// Дано число $num=1000. Задача через цикл For.

$num = 1000;

for ($j = 0; $num > 50; $j++){
  $num = $num / 2;
}
echo "For <br> Полученное число: $num , количество итераций: $j";</textarea>
  </div>
  <div class="form__loop loop__4">
    <textarea class="text__loop" name="textarea" cols="30" rows="30" readonly>
//  Передавать значение переменную в ($i).

$i = 0;
while($i++ < 10){
  switch ($i) {
    case 0:
      echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 <br>";
    break;
    case 1:
    echo "0, 1, 2, 3, 4, 5, 6, 7, 8, 9 <br>";
    break;
    case 2:
    echo "0, 1, 2, 3, 4, 5, 6, 7, 8 <br>";
    break;
    case 3:
    echo "0, 1, 2, 3, 4, 5, 6, 7 <br>";
    break;
    case 4:
    echo "0, 1, 2, 3, 4, 5, 6 <br>";
    break;
    case 5:
    echo "0, 1, 2, 3, 4, 5 <br>";
    break;
    case 6:
    echo "0, 1, 2, 3, 4 <br>";
    break;
    case 7:
    echo "0, 1, 2, 3 <br>";
    break;
    case 8:
    echo "0, 1, 2 <br>";
    break;
    case 9:
    echo "0, 1 <br>";
    break;
    case 10:
    echo "0 <br>";
    break;
    default:
    echo "Нет такого значения";
  }
}
    </textarea>
  </div>
</div>

<? require "../inc/inc_lk_F_H/footer.php" ?>