<?php
// Устанавливаем временную зону для Перми
date_default_timezone_set('Asia/Yekaterinburg');
// Определяем текущее время
$current_hour = (int)date('H');
// Определяем, должна ли быть темная тема
$dark_theme = ($current_hour >= 20 || $current_hour < 8);

// Определение пути к файлу CSS в зависимости от темы
$css_file = $dark_theme ? 'assets/css/dark_theme.css' : 'assets/css/light_theme.css';



/**
 * Подключает шаблон, передает туда данные и возвращает итоговый HTML контент
 * @param string $name Путь к файлу шаблона относительно папки templates
 * @param array $data Ассоциативный массив с данными для шаблона
 * @return string Итоговый HTML
 */
function include_template($name, array $data = []) {
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}



