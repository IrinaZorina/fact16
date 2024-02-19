<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>vizitka</title>
</head>
<?php 
$d = date('H');
if($d > '18' && $d <= '8' ){
   echo '<body style="background: darkgray; "></body>';
}
else {
    echo '<body style="background: white; "></body>';
}

?>
<body>
   <?php
   require_once('header.php');
   ?>
    <main class="main">
        <div class="container">
            <div class="main-wrapper">
                <div class="main-content">
                    <h1 class="datase">Григорьев Владислав</h1>
                    <div class="main-description">
                        <div class="img__block">
                            <img src="img/avatar.jpg" alt="">
                        </div>
                        <div class="text">
                            <div class="hobby">
                                Привет мне 22 года, окончил колледжж в 2022 году по специальности Веб-разработка, 
                                работал после окончания не по-специальности, решил все таки пойти по своей профессии 
                            </div>
                            <div class="rewiew">Все понравилось, 10 и 10 :)</div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <div class="contacts">
                    <h2 style="color: white;">связаться со мной</h2>
                    <div class="img-contact__block">
                    <a href="https://t.me/kiss_of_deth"><img class= "img-contact" src="img/tg_i.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>