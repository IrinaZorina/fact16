<header>
<?php
        $time = date('H:i');
        if($time >= 8.00 && $time < 20.00){
            $color = "#FFD700";
        }else {
            $color = "#A9A9A9";
        }
    ?>
    <style>
        body {
            background-color: <?php echo $color; ?>;
        }
    </style>
        <div class="head">
            <div class="logo"><img class="header_icon" src="assets/img/businessCard/header_icon.png" alt="icon"></div>
        </div>
        <nav>
            <a href="table.php">Таблица</a>
            <a href="tasks.php">Задачи</a>
            <a href="get_post.php">POST</a>
            <a href="anketa.php">Анкета</a>
        </nav>
</header>