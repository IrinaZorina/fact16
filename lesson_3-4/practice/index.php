<?
/* Задание 1. Дана последовательность элементов от 1 до 30. Необходимо вывести на экран числа, кратные 2. 
Каждое число должно быть с новой строки. */

for ($i = 1; $i <= 30; $i++) {
  if ($i % 2 == 0) {
    echo $i . '<br>';
  }
}


/* Задание 2. Дана последовательность элементов от 1 до 50. Необходимо сделать курсивом каждый элемент, кратный 3. 
Числа, одновременно кратные 3 и 5, сделать жирным. */

for ($i = 1; $i <= 50; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    echo '<strong><i>' . $i . '</i></strong>' . '<br>';
  } elseif ($i % 3 == 0) {
    echo '<i>' . $i . '</i>' . '<br>';
  }
}


/* Задание 3. Число  Пи  вычисляется  по  формуле  Грегори  следующим образом:  РI=4(1-1/3+1/5-1/7+1/9-...), 
причем, чем больше слагаемых в скобках, тем выше точность вычисления числа Пи. 
Определить минимальное количество слагаемых для вычисления Пи с точностью 0.01 */

/* Для определения минимального количества слагаемых для вычисления числа Пи с заданной точностью 0.01, 
нужно суммировать слагаемые в формуле Грегори https://en.wikipedia.org/wiki/Gregory_coefficients, 
пока абсолютное значение разности между текущим приближением числа Пи и значением 
числа Пи не станет меньше или равно 0.01 */

function computePi($precision)
{
  $piApproximation = 0;
  $term = 1;
  $n = 0;

  // пока дельта по модулю больше указанной точности
  while (abs(4 * $piApproximation - M_PI) >= $precision) {
    // echo 'Дельта  ' . abs($piApproximation - M_PI) . '<br>';
    $piApproximation += $term;
    // echo 'Текущая аппроксимация  ' . $piApproximation . '<br>';
    $n++;
    $term = (-1) ** $n / (2 * $n + 1); // cчитаем слагаемое
    // echo 'Текущее слагаемое  ' . $term . '<br><br>';
  }

  return [$piApproximation, $n];
}

$precision = 0.01;
list($piApproximation, $numTerms) = computePi($precision);

echo "Число Пи приближенно равно: " . 4 * $piApproximation . "<br>Минимальное количество слагаемых: $numTerms";


// /* Задание 4. Дана последовательность, состоящая из дробей: 1/1, 4/2, 7/3, 10/4, ... 
//    Какое минимальное количество элементов последовательности нужно сложить, чтобы сумма превысила заданное число S > 10? */

function computeSum($target)
{
  $sum = 0;
  $numerator = 1;
  $denominator = 1;
  $count = 0;

  while ($sum <= $target) {
    $sum += (int) ($numerator / $denominator);
    $numerator += 3;
    $denominator += 1;
    $count++;
  }

  return $count;
}

$target = 10;
$minElements = computeSum($target);

echo "Минимальное количество элементов: $minElements";


/* Задание 5. Дано произвольное целое положительное число K (). Найти сумму всех четных цифр этого числа. 
Процедуры и  функции  работы  со строками не использовать. */

$k = $k1 = 5678;
$sum = 0;

if ($k > 0 && is_int($k)) {
  while ($k != 0) {
    $currentDigit = $k % 10;

    if ($currentDigit % 2 == 0) {
      $sum += $currentDigit;
    }

    $k = (int) ($k / 10);
  }

  echo "Сумма четных цифр числа $k1 = $sum";
} else {
  echo "K должно быть целое положительное число. Вы ввели $k.";
}

/* Задание 6. Дано произвольное целое положительное число K (). 
Вывести цифры этого числа в порядке неубывания (например, 546085 =>045568). 
Процедуры и функции работы со строками не использовать. */

// Получение длины числа
function getNumberLength($n)
{
  $count = 0;
  while ($n != 0) {
    $n = (int) ($n / 10);
    $count++;
  }
  return $count;
}

// Удаление цифры
function removeDigit($number, $excludeDigit)
{
  $number = (int) $number;
  if ($number > 0) {
    $result = $number / 10;
    $fraction = $number % 10;
    // Используем рекурсию для возврата цифр числа
    return ($fraction == $excludeDigit) ?
      removeDigit($result, $excludeDigit) :
      $fraction + 10 * removeDigit($result, $excludeDigit);
  } else {
    return 0;
  }
}

$k = $n = $temp = 9054390;
$length = getNumberLength($temp);
$sortedDigits = "";

// Сортировка по возрастанию
for ($i = 0; $i < $length; $i++) {
  $k = $n;
  $min = $k % 10;
  $count = 0;

  while ($k != 0) {
    $currentDigit = (int) $k % 10;

    if ($currentDigit < $min) {
      $min = $currentDigit;
    } elseif ($currentDigit == $min) {
      $count++;
      if ($count > 1) {
        $sortedDigits .= $currentDigit;
      }
    }

    $k = (int) ($k / 10);
  }

  if ($n != 0 && getNumberLength(intval($sortedDigits)) < $length) {
    $sortedDigits .= $min;
  }

  $n = removeDigit($n, $min);
}

echo "Сортировка цифр числа по возрастанию: $sortedDigits";

/* Задание 7. *Дано произвольное целое положительное число K (). 
Вывести цифры этого числа в порядке невозрастания (например, 546085=>865540). 
Процедуры и функции работы со строками не использовать. */

// Сортировка по убыванию
for ($i = $length; $i > 0; $i--) {
  $k = $n;
  $max = $k % 10;
  $count = 0;

  while ($k > 0) {
    $currentDigit = (int) $k % 10;

    if ($currentDigit > $max) {
      $max = $currentDigit;
    } elseif ($currentDigit == $max) {
      $count++;
      if ($count > 1) {
        $sortedDigits .= $currentDigit;
      }
    }

    $k = (int) ($k / 10);
  }

  if ($n >= 0 && getNumberLength(intval($sortedDigits)) < $length) {
    $sortedDigits .= $max;
  }

  $n = removeDigit($n, $max);
}

echo "Сортировка цифр числа по убыванию: $sortedDigits";