<?
/* Задание 1. Дата строка «fact». Привести строку к виду «Fact». */

$str = "fact";
echo "$str<br>";
echo strtoupper($str[0]) . mb_substr($str, 1, mb_strlen($str));


/* Задание 2. Дана строка, в которой содержится «фамилия, имя, отчество». Преобразовать строку к виду «имя, фамилия». 
   Например, исходная строка «Закирова Регина Артуровна», результирующая «Регина Закирова». */

$fullname = "Бедриков, Леонид, Сергеевич";
echo "$fullname <br>";
$fullname = explode(',', $fullname);
echo $fullname[1] . $fullname[0];


/* Задание 3. Дана строка «Привет, мир». Найти количество символа «и» в строке (регистр учитывать). */

$str = "Привет, мир";
$target = "и";
$count = 0;

foreach (mb_str_split($str) as $char) {
  if ($char == $target) {
    $count++;
  }
}

echo "Вхождение символа '$target' в строку '$str' = $count";


/* Задание 4. Дана строка ‘html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'. */

$str = 'html css php';
$str = explode(' ', $str);

foreach($str as $char) {
  echo "$char "; 
}

/* Задание 5. Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'. */

$extension = '.png';
$str = 'gallery/cute5_photo.svg.png';
$arr = explode('.', $str);
echo "." . $arr[count($arr) - 1] == $extension ? 'да' : 'нет';

// echo preg_match("/.png$/", $str) ? 'да' : 'нет';

/* Задание 6. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, 
   добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - 
   необходимо вывести эту строку на экран.*/

$result = "";

if (isset($_POST["submit"])) {
  $str = $_POST["text"];
  $result = mb_strlen($str) > 5 ? mb_substr($str, 0, 5) . "..." : $str;
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
    <p>
      <label for="text"> Введите строку: </label>
      <input type="text" name="text" />
    </p>
    <p>
      <button type="submit" name="submit">Отправить</button>
    </p>
    <p>
      <?= $result ?>
    </p>
  </form>
</body>

</html>
<?
/* Задание 7. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. */

$text = "On his way to work Rick Deckard, as lord knew how many other people, stopped briefly to skulk about in front of 
        one of San Francisco’s larger pet shops, along animal row. In the center of the block-long display window an ostrich, 
        in a heated clear-plastic cage, returned his stare. The bird, according to the info plaque attached to the cage, 
        had just arrived from a zoo in Cleveland. It was the only ostrich on the West Coast. After staring at it, 
        Rick spent a few more minutes staring grimly at the price tag. He then continued on to the Hall of justice on 
        Lombard Street and found himself a quarter of an hour late to work.";

echo "$text<br><br>";

$arr = mb_str_split($text, 1);

for ($i = 0; $i < count($arr); $i++) {
  // switch($arr[$i]) {
  //   case 'a':
  //     $arr[$i]= 1;
  //     break;
  //   case 'b':
  //     $arr[$i] = 2;
  //     break;  
  //   case 'c':
  //     $arr[$i] = 3;
  //     break; 
  // }
  $arr[$i] = match($arr[$i]) {
    'a' => 1,
    'b' => 2,
    'c' => 3,
    default => $arr[$i]
  };
}

$text = implode('', $arr);

// $text = str_replace(['a', 'b', 'c'], [1, 2, 3], $text);

echo $text;


/* Задание 8. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'. */

$str = 'abc abc abc';

$matchIndex = 0;
$target = 'b';

$arr = mb_str_split($str);

for ($i = count($arr) - 1; $i >= 0; $i--) {
  if($arr[$i] == $target) {
    $matchIndex = $i;
    break;
  }
}

// $matchIndex = strrpos($str, $target);

echo "Индекс последнего вхождения символа '$target' в строку '$str' = $matchIndex";


/* Задание 9. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки 
   в отдельный элемент массива. */

$str = 'html css php';
$arr = explode(' ', $str);
var_dump($arr);


/* Задание 10. В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). 
Определите количество дней между датами. */

$startDate = new DateTime("01-04-2018");
$endDate = new DateTime("22-01-2024");

$delta = $startDate->diff($endDate);
echo "Разница между двумя датами составляет - {$delta->format("%a")} дней.";
