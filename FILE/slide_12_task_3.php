<?php
//Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран только имя и фамилию.

// Читаем содержимое текстового документа
$lines = file('document.txt', FILE_IGNORE_NEW_LINES);
// Перебираем каждую строку
foreach ($lines as $line) {
    // Разделяем строку на части по запятой
    $parts = explode(',', $line);
    $name = trim($parts[0]); // Имя
    $surname = trim($parts[1]); // Фамилия
    echo "$name $surname<br>";
}




