<?php

if (isset($_POST['background-color'])) {
    $color = $_POST['background-color'];
    setcookie('background_color', $color, time() + (86400 * 30), "/");
}
header("Location: index.php"); // Перенаправляем обратно на главную страницу после установки цвета
exit();


