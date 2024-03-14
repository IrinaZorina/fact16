<?php
require_once('helpers.php');

// Сохраняем текущую страницу в куки как последнюю посещенную страницу
setcookie('last_visited_page', $_SERVER['PHP_SELF'], time() + (86400 * 30), "/", "", true, true);

// Проверяем состояние пользователя
$is_logged_in = checkLoggedIn();

// Выбираем шаблон в зависимости от состояния пользователя
$page_template = $is_logged_in ? "layout.php" : "anonymous_layout.php";

// Рендерим страницу с нужным шаблоном
$page_content = include_template("survey/questionnaire.php");

// Рендерим лейаут с контентом и переменной $is_logged_in
$layout_content = include_template($page_template, [
    "content" => $page_content,
    "css_file" => $css_file, // Передача переменной $css_file в шаблон layout.php
    "is_logged_in" => $is_logged_in, // Передача переменной $is_logged_in в шаблон layout.php
]);

// Выводим содержимое макета на экран
print $layout_content;
?>
