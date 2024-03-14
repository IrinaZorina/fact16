<?php
//Даны два файла, состоящие из предложений. Создать третий файл, содержащий все повторяющиеся предложения.

// Считываем содержимое первого файла
$file1_sentences = file('file1.txt', FILE_IGNORE_NEW_LINES);
// Считываем содержимое второго файла
$file2_sentences = file('file2.txt', FILE_IGNORE_NEW_LINES);

// Находим повторяющиеся предложения
$repeated_sentences = array_intersect($file1_sentences, $file2_sentences);

// Открываем или создаем файл для записи
$output_file = fopen('output.txt', 'w');

// Записываем повторяющиеся предложения в третий файл
foreach ($repeated_sentences as $sentence) {
    fwrite($output_file, $sentence . PHP_EOL); // Записываем предложение с переносом строки
}

// Закрываем файл
fclose($output_file);

echo "Повторяющиеся предложения записаны в файл 'output.txt'";


