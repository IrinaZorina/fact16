<?
/* Задание 1. Создать функцию, которая сравнивает два числа и возвращает наибольшее. */

function getMaxValue(...$numbers)
{
  $max = PHP_INT_MIN;
  foreach ($numbers as $number) {
    if ($number > $max) {
      $max = $number;
    }
  }
  return $max;
}

echo getMaxValue(2, 12, 500000, 123, -100);


/* Задание 2. Создать функцию, которая принимает длину двух катетов и возвращает 
   значение гипотенузы прямоугольного треугольника. */

function computeHypotenuse($cathetus1, $cathetus2)
{
  return ($cathetus1 * $cathetus1 + $cathetus2 * $cathetus2) ** 0.5;
}

echo computeHypotenuse(2, 3);


/* Задание 3. Создать функцию, которая принимает одно число (10). В функции создать цикл, 
   который будет увеличивать число в 10 раз и выводить его на экран. Когда число будет больше 1 000 000, 
   на экране должно появляться сообщение, что вы достигли предела. */

function multiplyNumber($n = 10)
{
  $m = $n;
  echo $n . "<br>";
  while ($n <= 10e4) {
    echo $n *= $m;
    echo "<br>";
  }
  echo "Вы достигли предела.";
}

multiplyNumber();


/* Задание 4. Создать функцию, в которой объявляется массив и случайными элементами. */

function fillArray($n = 20)
{
  for ($i = 0; $i <= $n; $i++) {
    $arr[] = bin2hex(random_bytes($n));
  }
  return $arr;
}

var_dump(fillArray());


/* Задание 5. Создать функцию, которая принимает массив и возвращает среднеарифметическое значение массива. */

function computeAverage($arr)
{
  $sum = 0;
  foreach ($arr as $item) {
    $sum += $item;
  }
  return $sum / count($arr);
}

echo computeAverage([5, 7, 2, 0, -1]);


/* Задание 6. Создать функцию, которая принимает строку. Вернуть количество слов в строке. */

function getWordsCount($str)
{
  $chars = ["", "—"];
  $words = explode(" ", $str);
  foreach ($words as $word) {
    if (in_array($word, $chars)) {
      unset($words[array_search($word, $words)]);
    }
  }
  return count($words);
}

$text = <<<EOT
В повестке дня стоял единственный вопрос — новая экономическая политика. 
Гопнер сразу задумался над ним — он не любил политики и экономии, считая, 
что расчет удобен в машине, а в жизни живут одни разности и единственные числа.
EOT;

echo "Количество слов в строке: " . getWordsCount($text);


/* Задание 7. Написать функцию, которая рассчитывает последовательность чисел Фибоначчи. */

function computeSequenceFibonacci($indexNumber)
{
  $fibSequence = [0, 1];

  while (count($fibSequence) < $indexNumber + 1) {
    $nextNumber = $fibSequence[count($fibSequence) - 1] + $fibSequence[count($fibSequence) - 2];
    $fibSequence[] = $nextNumber;
  }

  return $fibSequence[$indexNumber - 1];
}

function recComputeSequenceFibonacci($indexNumber)
{
  // базовый случай c учетом(!) первых трех членов последовательности
  if ($indexNumber == 1) return 0;
  elseif (in_array($indexNumber, [2, 3])) return 1;
  // рекурсивный случай
  return recComputeSequenceFibonacci($indexNumber - 1) + recComputeSequenceFibonacci($indexNumber - 2);
}

$n = 10;
echo $n . "-е число в последовательности Фибоначчи = " . computeSequenceFibonacci($n);
echo $n . "-е число в последовательности Фибоначчи = " . recComputeSequenceFibonacci($n);


/* Задание 8. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами. */

function fillEmptyArray($arr)
{
  for ($i = 0; $i < count($arr); $i++) {
    $arr[$i] = mt_rand(PHP_INT_MIN, PHP_INT_MAX);
  }
  return $arr;
}

$arr = array_fill(0, 10, null);
var_dump(fillEmptyArray($arr));


/* Задание 9. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке. */

$str = "HTML, CSS, PHP, BITRIX";
$getWordsCount = fn ($text) => count(explode(" ", $text));
echo $getWordsCount($str);


/* Задание 10. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы 
  («XIRTIB ,PHP … »). */

function reverseAll($text)
{
  $words = array_reverse(explode(", ", $text));
  for ($i = 0; $i < count($words); $i++) {
    $words[$i] = strrev($words[$i]);
  }
  return implode(" ,", $words);
}

$reverseAll = fn ($text) => implode(" ,", array_map('strrev', array_reverse(explode(", ", $text))));
echo $reverseAll($str);


/* Задание 11. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки. */

$outputStringLength = fn ($text) => print(strlen($text));
$outputStringLength($str);


/* Задание 12. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку. */

$outputCharInNewLine = fn ($text) => print(
  implode(
    "",
    (array_map(
      fn ($n) => $n . "<br>",
      str_split(
        implode("", explode(", ", $text))
      )
    ))
  )
);

$outputCharInNewLine($str);


/* Задание 13. Создать файл (text.txt). В файле должен находиться текст (минимум 1000 символов).
   Необходимо взять содержимое из файла и подсчитать, сколько раз каждое слово встречается в тексте */

$fd = fopen("../data/text.txt", 'r') or die("не удалось открыть файл");

while (!feof($fd)) {
  $str = fgets($fd);
  $frequencyArray = [];
  $chars = ['?', '.', ',', '!'];
  $words = explode(" ", $str);

  for ($i = 0; $i < count($words); $i++) {
    $words[$i] = strtolower($words[$i][0]) . mb_substr($words[$i], 1, mb_strlen($words[$i]));

    if (in_array($words[$i][-1], $chars)) {
      $words[$i] = substr($words[$i], 0, -1);
    }

    if (in_array($words[$i], array_keys($frequencyArray))) {
      $frequencyArray[$words[$i]] += 1;
    } else {
      $frequencyArray[$words[$i]] = 1;
    }
  }
}

var_dump($frequencyArray);

fclose($fd);
