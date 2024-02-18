<?php


require_once('helpers.php');

$page_content = include_template("table_mendeleva.php");
$layout_content = include_template("layout.php", [
    "content" => $page_content,
    "css_file" => $css_file, // Передача переменной $css_file в шаблон layout.php
]);

// Выводим содержимое макета на экран
print $layout_content;



