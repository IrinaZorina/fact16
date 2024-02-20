<?php
    $time = 10;
    if ($time > 8 && $time < 20) {
        $color = 'style = "background-color: #FFFFE0;"';
    }
    else {
        $color = 'style = "background-color: #C0C0C0;"';
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" contents="php, html, bitrix">
    <title>Моя визитка</title>
    <link rel="stylesheet" href="assets/styles/visitstyle.css">
</head>
<body <?=$color?>>
<?php
include('header.php')
?>
<div class="block">
    <div class="photo">
        <img src="assets/img/photo.jpg" class="visit">
        <p class="p">Вячеслав Макаркин</p>
    </div>
    <div class="aboutme">
        <p class="p">
            Родился и вырос в городе Магнитогорск.<br>
            После школы поступил в МГТУ им. Г. И. Носова на специальность "Педагогическое образование(история и обществознание)".<br>
            Закончил с отличием и после этого отслужил в армии.<br>
            Сразу после армии устроился на ММК токарем-расточником, где работаю и сейчас.<br>
            Считаю, что человек может научиться чему угодно.<br>
            Начал очень интересоваться программированием, в чем хотелось бы реализоваться.<br>
        </p>
    </div>
    <div class="feed">
        <p class="p">
            В целом, отличный курс.<br>
            Преподаватель объясняет внятно и доходчиво.<br>
            Если возникают проблемы, то охотно приходит на помощь.<br>
        </p>
    </div>
</div>
    <h1 style="text-align: center;">Красивейшие места</h1>
    <div class="container">
        <div>
            <img src="assets/img/anhel.jpg" class="visit" alt="anhel">
            <p class="p">Водопад Анхель, Венесуэла</p>
        </div>
        <div>
            <img src="assets/img/asorislands.jpg" class="visit" alt="asorislands">
            <p class="p">Азорские острова, Португалия</p>
        </div>
        <div>
            <img src="assets/img/danxialandform.jpg" class="visit" alt="danxialandform">
            <p class="p">Геологический парк Данься, Китай</p>
        </div>
        <div>
            <img src="assets/img/etreta.jpg" class="visit" alt="etreta">
            <p class="p">Этрета, Франция</p>
        </div>
    </div>
    <br>
    <br>
    <h1 style="text-align: center;">Интересная архитектура</h1>
    <div class="container2">
        <div>
            <img src="assets/img/coleseum.jpg" class="visit" alt="coleseum">
            <p class="p">Колизей, Италия</p>
        </div>
        <div>
            <img src="assets/img/strange.jpg" class="visit" alt="strange">
            <p class="p">Кривой домик, Польша</p>
        </div>
        <div>
            <img src="assets/img/finger.jpg" class="visit" alt="finger">
            <p class="p">Башня Бурдж Джумейра, Дубаи</p>
        </div>
        <div>
            <img src="assets/img/brutalism.jpg" class="visit" alt="brutalism">
            <p class="p">Библиотека Гейзеля, Сан-Диего</p>
        </div>
    </div>
    <?php
    include('footer.php')
    ?>
</body>
</html>