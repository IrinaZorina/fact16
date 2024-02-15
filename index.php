<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <?php
        $time = date('H:i');
        if($time >= 8.00 && $time < 20.00){
            $color = "#FFD700";
        }else {
            $color = "#A9A9A9";
        }
    ?>
    <style>
        .profile_container, .row_container {
            background-color: <?php echo $color; ?>;
        }
    </style>
    <?php require_once 'inc/header.php' ?>
    <main>
        <div class="profile_container">
            <div class="yourName">
                <h1>Утков Денис</h1>
            </div>
            <div class="information_container">
                <div class="avatar_container">
                    <img class="myAvatar" src="assets/img/businessCard/avatar.jpg" alt="myAvatar">
                </div>
                <div class="information">
                    <p>
                        Всем привет! Немного расскажу о себе. Пару лет назад закончил МГТУ по специальности Электроника и наноэлектроника. Сейчас работаю на ММК. 
                        С детсва люблю компьютеры. Недавно решил попробовать себя в прораммировании и мне очень понравилось. 
                        Теперь у меня есть цель - сменить род деятельности и стать IT - специалистом.
                    </p>
                </div>
                <div class="lessons">
                    <p>
                        Хочу сказать, что первое занятие по знакомству с HTML и CSS мне очень понравилось.
                        Все предоставленные для изучения материалы интересны и понтяны. Отдельное спасибо преподавателю за чуткость и отзывчивость!  
                    </p>
                </div>
            </div>
        </div>
        <div class="row_container">
            <div class="title">Достопримечательности Магнитогорска Часть 1</div>
            <div class="items_row_container">
                <div class="item1">
                    <img class="item_img" src="assets/img/attractions/row/rear_front.jpg" alt="rearFront"><p>В центре Магнитогорска, на высоком берегу реки Урал, установлен 15-метровый монумент «Тыл – фронту».
                    Памятник состоит из двух бронзовых фигур: рабочего и воина с мечом. 
                    Скульптурная композиция символизирует героические усилия магнитогорских рабочих, снабжавших советскую армию в годы войны.</p>
                </div>
                <div class="item2">
                    <img class="item_img" src="assets/img/attractions/row/temple.jpg" alt="Temple"><p>Вознесенский храм на улице Завенягина – самый большой в Магнитогорске. 
                    Его начали строить в 1989 году, но работы долго не велись из-за проблем с финансированием. Только в 2003-м здесь прошла первая служба. 
                    Вскоре рядом с храмом появился целый религиозный комплекс – с трапезной, часовней, приютом и большим монументом святому Симеону Верхотурскому.</p>
                </div>
                <div class="item3">
                    <img class="item_img" src="assets/img/attractions/row/chimes.jpg" alt="Chimes"><p>На площади Народных гуляний можно увидеть высокую башню с часами, 
                    построенную еще в 1979-м году, во время празднования 50-летия города. Проект магнитогорских курантов разработал архитектор А.Е. Пономарев.</p>
                </div>
                <div class="item4">
                    <img class="item_img" src="assets/img/attractions/row/tent.jpg" alt="Tent"><p>Выбирая, что посмотреть в Магнитогорске, не пропустите один из символов города – памятник «Первая палатка». 
                    Он был возведен в 1966 году по проекту архитектора Е.В. Александрова и скульптора Л.Н. Головницкого. Композиция состоит из бетонной палатки и чугунной ладони, 
                    держащей кусок руды. Памятник напоминает о том, как рождался Магнитогорск: в 1930-х годах тысячи строителей нового города жили в палатках.</p>
                </div>
            </div>
        </div>

        <div class="row_container">
            <div class="title">Достопримечательности Магнитогорска Часть 2</div><br>
            <div class="items_col_container">
                <div class="item5">
                    <img class="item_img" src="assets/img/attractions/column/arena.jpg" alt="Arena"><p>Самый известный спортивный клуб Магнитогорска – хоккейный «Металлург», играющий в КХЛ. 
                    На проспекте Ленина в 2005-2007 годах был построен современный стадион, на котором команда проводит домашние матчи.</p>
                </div>
                <div class="item6">
                    <img class="item_img" src="assets/img/attractions/column/park.jpg" alt="Park"><p>Экопарк был разбит на западной окраине города еще в середине XX века. 
                    Здесь были вырыты искусственные пруды, высажены деревья, кустарники и травы, привезенные из разных районов Урала. 
                    Большая зеленая зона площадью около 50 гектаров и сегодня является популярным местом отдыха.</p>
                </div>
                <div class="item7">
                    <img class="item_img" src="assets/img/attractions/column/aquapark.jpg" alt="Aquapark"><p>«Водопад чудес» – новый аквапарк в центре города, оснащенный системой бассейнов для взрослых и детей. 
                    Площадь этого водноспортивного комплекса превышает 22 тыс. м2.</p>
                </div>
                <div class="item8">
                    <img class="item_img" src="assets/img/attractions/column/ski_center.jpg" alt="SkiCenter"><p>Примерно в 40 км от Магнитогорска расположен современный горнолыжный курорт. 
                    Он работает с 2003 года и сегодня предлагает туристам как зимний, так и летний отдых.</p>
                </div>    
            </div>
        </div>
    </main>
<?php require_once 'inc/footer.php' ?>   
</body>
</html>