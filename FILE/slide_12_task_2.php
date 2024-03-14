<?php
//Создайте папку 'test'.

$directory = 'test';

// Проверяем, существует ли папка уже
if (!is_dir($directory)) {
    // Создаем папку
    mkdir($directory);
    echo "Папка $directory успешно создана.";
} else {
    echo "Папка $directory уже существует.";
}


