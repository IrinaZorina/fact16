<!--Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.--> 
<?php
$str = fopen('name.txt', 'r');
for ($i = 0; $i <= 16; $i++) {
    $str2 = fread($str, 2);
    echo $str2;
}
?>
<br>
<!--Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл-->
<?php
$file1 = file_get_contents('text1.txt');
$file2 = file_get_contents('text2.txt');
$uniqueSentences = array_unique(array_merge(preg_split("/\r\n|\n|\r/", $file1), preg_split("/\r\n|\n|\r/", $file2)));

$file3 = fopen('text3.txt', 'w');
foreach ($uniqueSentences as $sentence) {
         fwrite($file3, $sentence . '');
}
fclose($file3);
$file3 = file_get_contents('text3.txt');
echo 'Текст первого файла: ' . ($file1) . '' . '<br>';
echo 'Текст второго файла: ' . ($file2) . '' . '<br>';
echo 'Текст третьего файла: ' . ($file3) . '';
?>
<br>
<!--Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.-->
<?php
$file4 = file_get_contents('text4.txt');
$file5 = file_get_contents('text5.txt');
$sent1 = explode('.', $file4);
$sent2 = explode('.', $file5);

$repeat = array_intersect($sent1, $sent2);

file_put_contents('repeat.txt', implode('.', $repeat));
$rep = file_get_contents('repeat.txt');
echo 'Текст первого файла <br>' . ($file4) . '<br><br>';
echo 'Текст второго файла <br>' . ($file5) . '<br><br>';
echo 'Текст третьего файла <br>' . ($rep) . '<br><br>';
?>