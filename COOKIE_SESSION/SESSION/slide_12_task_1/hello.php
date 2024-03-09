<?php

session_start();

// Проверяем, было ли установлено имя пользователя в сессии
if (isset($_SESSION['username'])) {
    // Приветствуем пользователя с его именем
    echo "Привет, " . $_SESSION['username'] . "!";
} else {
    // Если имя пользователя не установлено, перенаправляем обратно на страницу index.php
    header("Location: index.php");
    exit();
}

