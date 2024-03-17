<?php
require_once __DIR__ . "/inc/actions/func.php";

// $_SESSION['validation'] = [];
?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">

<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="/assets/app.css">
</head>

<body>

    <form class="card" action="/html/inc/actions/register.php" method="post">

        <h2>Регистрация</h2>

        <label for="name">
            Имя
            <input type="text" id="name" name="name" placeholder="Иванов Иван" value="<?php echo old('name') ?>" <?php validationErrorAttr('name'); ?>>

            <?php if (hasValidationError('name')) : ?>
                <small><?php validationErrorMessage('name'); ?></small>
            <?php endif; ?>
        </label>
        <label for="email">
            E-mail
            <input type="text" id="email" name="email" placeholder="ivan@ivanov.ru" value="<?php echo old('email') ?>" <?php validationErrorAttr('email'); ?>>
            <?php if (hasValidationError('email')) : ?>
                <small><?php validationErrorMessage('email'); ?></small>
            <?php endif; ?>

        </label>

        <div class="grid">
            <label for="password">
                Пароль
                <input type="password" id="password" name="password" placeholder="******" <?php validationErrorAttr('password'); ?>>
                <?php if (hasValidationError('password')) : ?>
                    <small><?php validationErrorMessage('password'); ?></small>
                <?php endif; ?>
            </label>

            <label for="password_confirmation">
                Подтверждение
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="******">
            </label>
        </div>

        <fieldset>
            <label for="terms">
                <input type="checkbox" id="terms" name="terms">
                Я принимаю все условия пользования
            </label>
        </fieldset>

        <button type="submit" id="submit" disabled>Продолжить</button>
    </form>

    <p>У меня уже есть <a href="login.php">аккаунт</a></p>

    <script src="/assets/app.js"></script>
</body>

</html>