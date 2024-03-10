<?php
require_once('db_connection.php');

// Проверяем наличие данных в запросе и их непустоту
if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
    header("Location: register.php?error=missing_data");
    exit;
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

// Экранируем специальные символы в данных, чтобы предотвратить SQL-инъекции
$username = mysqli_real_escape_string($con, $username);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

// Проверяем наличие дубликатов имени пользователя или email
$sql_check_duplicate = "SELECT COUNT(*) FROM users WHERE username = '$username' OR email = '$email'";
$result_check_duplicate = mysqli_query($con, $sql_check_duplicate);

if (!$result_check_duplicate) {
    // Если произошла ошибка при выполнении запроса, передаем ошибку обратно на страницу регистрации
    header("Location: register.php?error=database_error");
    exit;
}

$count = mysqli_fetch_array($result_check_duplicate)[0];
mysqli_free_result($result_check_duplicate);

if ($count > 0) {
    header("Location: register.php?error=duplicate_user");
    exit;
}

// Хешируем пароль
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Вставляем данные пользователя в базу данных
$sql_insert_user = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
$result_insert_user = mysqli_query($con, $sql_insert_user);

if ($result_insert_user) {
    // Регистрация прошла успешно, перенаправляем пользователя на страницу приветствия
    header("Location: welcome.php");
    exit;
} else {
    // Если произошла ошибка при выполнении запроса, передаем ошибку обратно на страницу регистрации
    header("Location: register.php?error=registration_failed");
    exit;
}

mysqli_close($con);
?>
