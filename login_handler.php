<?php
session_start();
require_once('db_connection.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            // Установка куки
            setcookie('last_visited_page', isset($_COOKIE['last_visited_page']) ? $_COOKIE['last_visited_page'] : 'index.php', time() + (86400 * 30), "/", "", true, true);

            // Закрытие сессии
            session_write_close();

            // Перенаправление пользователя
            header("Location: {$_COOKIE['last_visited_page']}");
            exit();
        } else {
            $error_message = "Неверный пароль";
        }
    } else {
        $error_message = "Пользователь с указанным логином не найден";
    }
    mysqli_stmt_close($stmt);
} else {
    $error_message = "Введите имя пользователя и пароль";
}

mysqli_close($con);

header("Location: login.php?error_message=" . urlencode($error_message));
exit();
?>
