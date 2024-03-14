<?php

// Считываем содержимое первого файла
$file1_sentences = file('file1.txt', FILE_IGNORE_NEW_LINES);
// Считываем содержимое второго файла
$file2_sentences = file('file2.txt', FILE_IGNORE_NEW_LINES);

// Объединяем массивы предложений и удаляем повторы
$unique_sentences = array_unique(array_merge($file1_sentences, $file2_sentences));

// Открываем или создаем файл для записи
$output_file = fopen('output.txt', 'w');

// Записываем уникальные предложения в третий файл
foreach ($unique_sentences as $sentence) {
    fwrite($output_file, $sentence . PHP_EOL); // Записываем предложение с переносом строки
}

// Закрываем файл
fclose($output_file);

echo "Уникальные предложения записаны в файл 'output.txt'";


