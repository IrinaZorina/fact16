<?
/* Задание 1. Выведите столбец чисел от 5 до 13. */

for ($i = 5; $i <= 13; $i++) {
  echo "$i <br>";
}


/* Задание 2. Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. 
Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). 
Решите задачу сначала через цикл while, 
а потом через цикл for. */

$num = 1000;
$target = 50;
$count = 0;

while ($num >= $target) {
  echo "Итерация " . $count + 1 . ": $num <br>";
  $num /= 2;
  $count++;
}

echo "<br>Количество итераций: $count";

for ($num = 1000, $count = 0; $num >= 50; $count++) {
  $num /= 2;
}

echo "<br>Количество итераций: $count";

/* Задание 3. Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, 
то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». 
Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». 
Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». 
Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10. 
*/

if (isset($_POST["submit"])) {
  $sequence = "";
  $i = $_POST["number"];

  for ($j = 0; $j <= 10 - $i; $j++) {
    $sequence .= strval($j);
    if ($j < 10 - $i) {
      $sequence .= ", ";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Необходимо закомментировать, чтобы появилась форма*/
    form {
      display: none;
    }
  </style>
  <title>Document</title>
</head>

<body>
  <form action="index.php" method="POST">
    <p><label for="number"> Выберите число:
        <input type="number" step="1" min="0" max="10" value="0" id="number" name="number" />
      </label>
    </p>
    <p>
      <button type="submit" name="submit">Отправить</button>
    </p>
    <p>
      Результат: <?= $sequence ?>
    </p>
  </form>
</body>

</html>