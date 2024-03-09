<?php

// Устанавливаем куки с логином пользователя и временем последнего захода
if (isset($_POST['submit'])) {
    $login = $_POST['login'];
    $last_visit_time = date("Y-m-d H:i:s");
    setcookie("login", $login, time() + 3600, "/");
    setcookie("last_visit_time", $last_visit_time, time() + 3600, "/");
}

// Проверяем, были ли установлены куки с логином и временем последнего захода
if (isset($_COOKIE["login"]) && isset($_COOKIE["last_visit_time"])) {
    // Выводим информацию о пользователе
    echo "Привет, " . $_COOKIE["login"] . "!<br>";
    echo "Ваш последний визит: " . $_COOKIE["last_visit_time"];
} else {
    // Выводим форму для ввода логина
    echo '<form method="post" action="">
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required>
            <input type="submit" name="submit" value="Сохранить">
          </form>';
}


