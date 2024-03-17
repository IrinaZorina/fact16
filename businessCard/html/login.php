<?
require_once __DIR__ . "/inc/actions/func.php";

?>
<!DOCTYPE html>
<html lang="ru" data-theme="light">

<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="/assets/app.css">
</head>

<body>

    <form class="card" action="/html/inc/actions/login.php" method="post">
        <h2>Вход</h2>
        <? if (hasMessage('error')):?>
        <div class="notice error"><?echo getMessage('error')?></div>
            <?endif?>
        <label for="email">
            E-mail
            <input type="text" id="email" name="email" placeholder="ivan@ivanov.ru" value="<?php echo old('email') ?>" <?php validationErrorAttr('email'); ?>>
            <?php if (hasValidationError('email')) : ?>
                <small><?php validationErrorMessage('email'); ?></small>
            <?php endif; ?>

        </label>

        <label for="password">
            Пароль
            <input type="password" id="password" name="password" placeholder="******">
        </label>

        <button type="submit" id="submit">Продолжить</button>
    </form>

    <p>У меня еще нет <a href="register.php">аккаунта</a></p>

    <script src="/assets/app.js"></script>
</body>

</html>