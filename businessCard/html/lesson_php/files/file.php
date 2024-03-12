<?
// Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.

$file = fopen("user.txt", "r");
$str = fread($file, 1);

$firstName = "";
$lastName = "";
$result = "";

while (!empty($str)) {
  if ($str == " " && $firstName == "") {
    $firstName = $result;
    $result = "";
    $str = fread($file, 1);
  } elseif ($str == " " && $lastName == "") {
    $lastName = $result;
    $result = "";
  }

  $result .= $str;
  $str = fread($file, 1);
}

echo "Имя: $firstName фамилия: $lastName<br>";

// Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл и создан файл с повторами.

$file1 = fopen('file1.txt', 'r');
$file2 = fopen('file2.txt', 'r');

$arrFile1 = explode(".", fread($file1, filesize("file1.txt")));
$arrFile2 = explode(".", fread($file2, filesize("file2.txt")));
// echo "<pre>";
// var_dump($arrFile1);
// echo "<pre>";
fclose($file1);
fclose($file2);

$fileDifferent = fopen('fileDifferent.txt', 'w');
$diff = implode(".", array_diff($arrFile1, $arrFile2));
fwrite($fileDifferent, $diff);
fclose($fileDifferent);

$fileSimilar = fopen('fileSimilar.txt', 'w');
$similar = implode(".", array_intersect($arrFile1, $arrFile2));
fwrite($fileSimilar, $similar);
fclose($fileSimilar);
