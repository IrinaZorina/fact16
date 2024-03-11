<?php

session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login_page.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Секретная страница</title>
</head>
<body>
<h1>Доступ к секретным страницам открыт!</h1>
<p>Вы успешно вошли на секретную страницу.</p>
<a href="index3.php">Выйти</a>
</body>
</html>