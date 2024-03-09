<?
/* Задание. Убрать перенос строки и заменить букву h на H.*/

$fileName = './data/file0.txt';
$fd = fopen($fileName, 'rb+') or die();
$text = str_replace("h", "H", str_replace("\\n", " ", fread($fd, filesize($fileName))));
// fseek($fd, 0);
// fwrite($fd, "\r" . $text);
fclose($fd);
$fd = fopen($fileName, 'wb') or die();
fwrite($fd, $text);
fclose($fd);


/* Задание 1. Создайте файл hello.txt и сохраните в него текст 'Hello, world! I'm Name'. */

$fd = fopen("./data/hello.txt", "w");
fwrite($fd, "Hello, world! I'm Leonid");
fclose($fd);


/* Задание 2. Создайте папку 'test'. */
mkdir("test", 0777, true);


/* Задание 3.  Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. 
   Вывести на экран только имя и фамилию. */

$fileName = "./data/file3.txt";

$fd = fopen($fileName, "w");
fwrite($fd, "Иван;Иванов;+7(777)666-55-44, iivanov@yandex.ru");
fclose($fd);

$fd = fopen($fileName, "r");
echo implode(" ", array_slice(explode(";", fread($fd, filesize($fileName))), 0, -1));
fclose($fd);


/* Задание 4. Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, 
   которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.*/
/* Задание 5.  Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения. */

$fn1 = './data/file4-5_1.txt';
$fn2 = './data/file4-5_2.txt';

$fd1 = fopen($fn1, "r");
$fd2 = fopen($fn2, "r");

$set1 = array_slice(array_unique(explode("\n", fread($fd1, filesize($fn1)))), 0, -1);
$set2 = array_slice(array_unique(explode("\n", fread($fd2, filesize($fn2)))), 0, -1);

fclose($fd1);
fclose($fd2);

$fd = fopen('./data/file4-5_3.txt', "w");

$difference = implode("\n", !empty(array_diff($set1, $set2)) ? array_diff($set1, $set2) : array_diff($set2, $set1));
$intersection = implode("\n", array_intersect($set1, $set2));

fwrite($fd, "--Разность множеств--" . PHP_EOL . $difference . PHP_EOL .
            "--Объединение множеств--" . PHP_EOL . $intersection);

fclose($fd);