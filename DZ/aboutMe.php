<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о Богоявленской Т.А.</title>
    <link rel="stylesheet" href="assets/styles/styleBackground.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<?php
    include_once "getTime.php";
    if ($hours > 8 && $hours < 20)
    {
        echo "<body class = \"bodyWhite\">";
    }
    else
    {
        echo "<body class = \"bodyBlack\">";
    }
    include_once "header.php";
?>
    <main>
        <!-- Основная информация -->
        <div class="infoBlock">
            <div class="photo">                
                <div class="photoImg <?php echo $classThime?>"></div>
            </div>
            <div class="info">
                <div class="fio <?php echo $colorText?>">
                    <h2 <?php echo $colorClassText?>>Богоявленская Татьяна</h2>
                </div>
                <div class="aboutMe">
                    <p <?php echo $colorClassText?>>
                        <b>Город:</b><br>
                        Каменск-Уральский.<br>
                        <b>Место работы:</b><br>
                        Оборонное предприятие.<br>
                        <b>Род деятельности:</b><br>
                        Разработка прикладных и системных приложений на C# и C++ и моделирование в среде MatLab.<br>
                        <b>Образование:</b><br>
                        Закончила магистратуру в УрФУ по специальности "Программная инжененрия".<br>
                        <b>Цели в жизни:</b><br>
                    </p>
                    <ul <?php echo $colorClassText?>>
                        <li>создание семьи</li>
                        <li>развитие в профиссиональном плане</li>
                        <li>изучение нового</li>
                    </ul>
                    <p <?php echo $colorClassText?>>
                        <b>Хобби:</b><br>
                        В свободное время люблю:
                    </p>
                    <ul <?php echo $colorClassText?>>
                        <li>читать</li>
                        <li>рисовать</li>
                        <li>вязать</li>
                        <li>шить</li>
                        <li>валять шерстяные игрушки</li>
                        <li>рыбачить</li>
                    </ul>
                </div>
                <div class="aboutCourse">
                    <p <?php echo $colorClassText?>>
                        <b>Что понравилось на занятиях:</b><br>
                        Преподаватель Ирина при объяснении вариантов решения какой-либо задачи
                        рассказывает все возможные варианты, но при этом
                        обращает особое внимания на то, как принято писать код,
                        что является очень хорошим подспорьем для дальнейшей работы<br>
                    </p>
                </div>
            </div>
        </div>
        <!-- Картинки -->
        <div class="imageBlock">
            <p class="headerPhoto <?php echo $colorText?>">Домашний питомец</p>
            <div class="blockImage1">
                <?php 
                for ($index = 1; $index <= 4; $index++)
                {
                    switch ($index)
                    {
                        case 2 :
                            {
                                $text = "В игрушках";
                                break;
                            }
                        case 3 :
                            {
                                $text = "Просит погладить";
                                break;
                            }
                        case 4 :
                            {
                                $text = "Не понимает, зачем ее позвали";
                                break;
                            }
                        default:
                            {
                                $text = "На охоте";
                                break;
                            }
                    }
                    echo "<div class=\"container1 $classThime\">
                    <div class=\"image$index $classThime\"></div>
                    <div class=\"signature1 $classThime\"><p $colorClassText>$text</p></div>
                    </div>";
                }
                ?>
            </div>
            <p class="headerPhoto <?php echo $colorText?>" >Фото природы в черте города</p>
            <div class="blockImage2">
                <?php 
                for ($index = 5; $index <= 8; $index++)
                {
                    switch ($index)
                    {
                        case 5 :
                            {
                                $text = "Река Исеть";
                                break;
                            }
                        case 6 :
                            {
                                $text = "Река Каменка";
                                break;
                            }
                        case 7 :
                            {
                                $text = "Деревья";
                                break;
                            }
                        default:
                            {
                                $text = "Река Исеть";
                                break;
                            }
                    }
                    echo "<div class=\"container2 $classThime\">
                    <div class=\"image$index $classThime\"></div>
                    <div class=\"signature1 $classThime\"><p $colorClassText>$text</p></div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </main>
    <?php 
        include_once "footer.php";
    ?>
</body>

</html>