<?php
session_start();

$_SESSION['last_page'] = 'fact.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        text-align: center;
    }
</style>
<body>
    <h1>Вас приветсвтует страница FACT</h1>
    <a href="/registration/index.php">Назад</a>
</body>
</html>