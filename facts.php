<?php
session_start();

// Сохраняем текущую страницу в куки как последнюю посещенную страницу
setcookie('last_visited_page', $_SERVER['PHP_SELF'], time() + (86400 * 30), "/", "", true, true);

// Подключаем файл для создания базы данных и вспомогательные функции
require_once('create_database.php');
require_once('helpers.php');

// Проверяем состояние пользователя
$is_logged_in = checkLoggedIn();

// Выбираем шаблон в зависимости от состояния пользователя
$page_template = $is_logged_in ? "layout.php" : "anonymous_layout.php";

// Рендерим страницу с нужным шаблоном
$page_content = include_template("fact.php");

// Рендерим лейаут с контентом и переменной $is_logged_in
$layout_content = include_template($page_template, [
    "content" => $page_content,
    "css_file" => $css_file, // Передача переменной $css_file в шаблон layout.php
    "is_logged_in" => $is_logged_in, // Передача переменной $is_logged_in в шаблон layout.php
]);

// Выводим содержимое макета на экран
print $layout_content;

