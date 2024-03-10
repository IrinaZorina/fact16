<?php
session_start();
if (isset($_SESSION['time'])) {
    echo "Последний раз вы заходили в " . $_SESSION['time'];
    $seconds = time() - strtotime($_SESSION['time']);
    echo '<br>';
    echo "Вы вошли $seconds секунд назад";
};
$_SESSION['time'] = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>1. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сохраненное время на экран.
        2. Запишите в сессию время захода пользователя на сайт. При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт.
    </p>
</body>
</html>