<?
function output($arr)
{
  echo '<pre>';
  print_r($arr);
  echo '<pre>';
}

function generateArray($rangeLimit = 100)
{
  $randomNumberArray = range(-$rangeLimit, $rangeLimit);
  shuffle($randomNumberArray);
  return array_slice($randomNumberArray, 0, $rangeLimit);
}

/* Задание 1. Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. 
   Запишите ее в переменную $result. */

$result = 0;
foreach ([50, 45, 40, 35, 30] as $n) {
    $result += $n;
}

echo $result;


/* Задание 2. Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. 
   После чего вывести данный массив в противоположном порядке. */

$n = 10;

for ($i = 0; $i <= $n; $i++) {
  $arr[] = mt_rand(mt_rand(0, $n * 0.5), mt_rand($n * 0.5, $n));
}

output($arr);

for ($i = count($arr) - 1; $i >= 0; $i--) {
 echo $arr[$i] . "<br>";
}


/* Задание 3. Создать массив, заполненный названиями картинок, например, 1.png. 
   Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран. */

$imagesCount = 10;
$images = array_map(fn($image) => $image . '.png', range(1, $imagesCount));
echo $images[array_rand($images)];


/* Задание 4. Дано N действительных случайных чисел в диапазоне от -100 до 100. 
   Найти минимальное положительное число и максимальное отрицательное число. */

$arr = generateArray();
sort($arr);
output($arr);

$max = $min = $imax = 0;

for ($i = 0; $i < count($arr); $i++) {
  if ($arr[$i] > 0) {
    $max = $arr[$i];
    $imax = $i;
    break;
  }
}

for ($i = $imax; $i >= 0; $i--) {
  if ($arr[$i] < 0) {
    $min = $arr[$i];
    break;
  }
}

echo "Минимальное положительное число: " . $max . "<br>";
echo "Максимальное отрицательное число: " . $min;


/* Задание 5. Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. 
   Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету. */

$groupSize = 10;

function generateRandomGrades($n)
{
  $lowGrade = 2;
  $highGrade = 5;

  for ($i = 0; $i <= $n; $i++) {
    $arr[] = mt_rand($lowGrade, $highGrade);
  }
  return $arr;
}

function computeAverage($arr)
{
  return round(array_sum($arr) / count($arr), 2);
}

$grades = [
  "math" => generateRandomGrades($groupSize),
  "phys" => generateRandomGrades($groupSize),
  "chem" => generateRandomGrades($groupSize),
  "cs" => generateRandomGrades($groupSize)
];

echo "Математика, средняя оценка в группе: " . computeAverage($grades["math"]) . "<br>";
echo "Физика, средняя оценка в группе: " . computeAverage($grades["phys"])  . "<br>";
echo "Химия, средняя оценка в группе: " . computeAverage($grades["chem"])  . "<br>";
echo "Информатика, средняя оценка в группе: " . computeAverage($grades["cs"])  . "<br>";

/* Задание 6.Известна среднемесячная температура воздуха на следующих островах Карибского моря: 
   Куба, Тринидад, Ямайка, Гаити. Сформировать один новый массив, содержащий месяц и максимальную температуру для островов. */

$islandsTemperatures = [
  "Cuba" => [27, 27, 27, 28, 30, 31, 31, 31, 31, 30, 29, 28],
  "Trinidad" => [27, 27, 28, 29, 30, 31, 32, 32, 31, 31, 28, 27],
  "Jamaica" => [25.5, 25.6, 25.9, 26.9, 27.4, 28.3, 28.6, 28.3, 27.4, 26.7, 26.1],
  "Haiti" => [26, 27, 27, 28, 29, 29, 30, 30, 29, 29, 28, 27]
];

$months = [
  "January", "February", "March", "April", "May", "June",
  "July", "August", "September", "October", "November", "December"
];

function maxTemperature($arr)
{
  $imax = 0;
  $max = $arr[0];

  for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] > $max) {
      $max = $arr[$i];
      $imax = $i;
    }
  }

  return [$imax, $max];
}

foreach ($islandsTemperatures as $island => $temperatures) {
  $maxIndex = maxTemperature($temperatures)[0];
  $maxValue = maxTemperature($temperatures)[1];
  $maxTemperatures[$island] = [$months[$maxIndex] => $maxValue];
}

output($maxTemperatures);


/* 7.	Дан двумерный массив из 5 строк и 6 столбцов. Определить для каждого четного столбца максимальный элемент. 
      Найти произведение этих элементов. */

$multiple = 1;
$evenIndexColumns = $columnValues = [[]];

function isEven($n)
{
  return $n % 2 == 0;
}

function generateTwoDimensionArray($rows = 5,  $columns = 6)
{
  $arr = [[]];
  for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $columns; $j++) {
      $arr[$i][$j] = mt_rand(-10, 10);
    }
  }
  return $arr;
}

$arr = generateTwoDimensionArray();
output($arr);

// Фильтр - столбцы с четным индексом
for ($i = 0; $i < count($arr); $i++) {
  for ($j = 0; $j < count($arr[$i]); $j++) {
    if (isEven($j)) {
      $evenIndexColumns[$i][$j] = $arr[$i][$j];
    }
  }
}

output($evenIndexColumns);

// "Транспонируем" матрицу
for ($i = $l = 0; $i < count($evenIndexColumns); $i += 2, $l++) {
  for ($j = $i, $k = 0; $k < count($evenIndexColumns); $k++) {
    $columnValues[$l][$k] = $evenIndexColumns[$k][$j];
  }
}

output($columnValues);

// Находим максимальный элемент в каждом столбце, и произведение этих элементов
for ($i = 0; $i < count($columnValues); $i++) {
   $multiple *= max($columnValues[$i]);
}

echo "Произведение элементов: $multiple";


/* Задание 8. Создать двумерный массив произвольной длины, содержащий строковые значения. 
   Необходимо вывести все элементы массива, начинающиеся на А. */

$words = [
  ["Apple", "orange", "onion", "Potato", "avocado"],
  ["application", "Advertisement", "marketing", "user agent"],
  ["euro", "dollar", "ruble", "Yuan"],
  ["assembler", "Amplifier", "garbage collector", "Coroutine", "hell", "manual"],
  ["Odin", "Valhalla", "Andraste", "Anu", "inventory"]
];

function getWords($arr, $pattern = "/^A/")
{
  foreach ($arr as $subarr) {
    foreach ($subarr as $word) {
      if (preg_match($pattern, $word)) {
        $matches[] = $word;
      }
    }
  }
  return $matches;
}

output(getWords($words));

/* Задание 9. Создать двумерный массив, состоящий из чисел. 
   Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.*/

$commonLength = 0;
$dimensionIndex = 1;

$arr = [
  [1, 2, 3, 4, 5, 7],
  [8, 1],
  [45, 12, 4, -8, 0, -20.8, 1.0e-5],
  [2.11e+3, 1, 0, 10001101],
  [777]
];

output($arr);

foreach ($arr as $subarr) {
  $dimensionsSizes[$dimensionIndex] = count($subarr);
  $commonLength += count($subarr);
  $dimensionIndex++;
}

print_r("Общее количество элементов массива: $commonLength <br>");

foreach ($dimensionsSizes as $dimensionIndex => $dimensionSize) {
  echo "Количество элементов в $dimensionIndex измерении = $dimensionSize <br>";
}
