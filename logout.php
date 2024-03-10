<?php

// Инициализируем сессию
session_start();

// Уничтожаем все данные сессии
$_SESSION = [];

// Удаляем сессионные куки
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Уничтожаем сессию
session_destroy();

// Перенаправляем пользователя на страницу входа или другую страницу
header("Location: index.php");
exit();


