<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleSheet" href="assets/styles/styleBackground.css">
    <title>Задания по теме Get/Post. Слайд 16</title>
</head>
<body>
<?php
    include_once "function.php";
    include_once "getTime.php";
    GetClassBody($hours);
    include_once "header.php";
?>
    <form method="post">
        <fieldset>
            <legend>Задача 1. Отправить логины и комментарии на почту</legend>
            <label>
                Логин:
                <input type="text" name="login">
            </label>
            <label>
                Комментарии:
                <textarea name="commit"></textarea>
            </label>
            <input type="submit" value="Отправить">
        </fieldset>
    </form>

    <form method="post">   
        <fieldset>
            <legend>Задача 2. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.</legend>
            <label>
                Логин: 
                <input type="text" name="login">
            </label>
            <label>
                Пароль: 
                <input type="text" name="password">
            </label>
            <input type="submit" value="Отправить">
        </fieldset>
    </form>
    <br>
    
    <form method="post">   
        <fieldset>
            <legend>Задача 3. Создайте анкету на форме</legend>
            <input type="text" name="name"><br>
            <?php
                //массив вопросов
                $question = [
                    "Вопрос 1",
                    "Вопрос 2",
                    "Вопрос 3",
                    "Вопрос 4",
                    "Вопрос 5",
                    "Вопрос 6",
                    "Вопрос 7",
                    "Вопрос 8",
                    "Вопрос 9",
                    "Вопрос 10",
                    "Вопрос 11",
                    "Вопрос 12",
                    "Вопрос 13",
                    "Вопрос 14",
                    "Вопрос 15",
                    "Вопрос 16",
                    "Вопрос 17",
                    "Вопрос 18",
                    "Вопрос 19"
                ];
                //вывод вопросов
                function WriteAnswer($index, $text,$colorClassText)
                {
                    echo "<label $colorClassText>$index. $text <br>
                    <input type=\"radio\" name=\"question$index\" value=\"yes\" checked>Да
                    <input type=\"radio\" name=\"question$index\" value=\"no\">Нет
                    </label><br>";
                }
                for ($index = 1; $index < 20; $index++)
                {
                    WriteAnswer($index, $question[$index-1],$colorClassText);
                }
            ?>
            <input type="submit" value="Отправить">
        </fieldset>
    </form>

<?php 
    //обработка данных 1 задачи
    function Task1()
    {
        if (!isset($_POST["commit"])) return;
        echo "1. Отправить логины и комментарии на почту...<br>";
        $login = isset($_POST["login"])? $_POST["login"]:"";
        $commit = $_POST["commit"];
        $mail = "tanik111097@gmail.com"; 
        $thime = "Test";
        $res = mail($mail,$thime,"login = ".$login." commit = ".$commit);
        echo "Оправлено: $res";
    }
    //обработка данных 2 задачи
    function Task2()
    {
        if (!isset($_POST["login"])) return;
        echo "2. Создайте форму авторизации. Зашифруйте пароли и отправьте их на сервер.<br>";
        $password = (isset($_POST["password"]))? $_POST["password"]: "";
        if ($password != "")
        {
            $password = md5($password);
        }
    }
    //обработка данных 3 задачи
    function Task3()
    {
        if (!isset($_POST["name"])) return;
        echo "3. Создайте анкету на форме...";
        $name = $_POST["name"];
        $count = 0;
        for ($index = 1; $index < 20; $index++)
        {
            //проверка результатов выбора ответов
            switch ($index)
            {
                case 3:
                case 9:
                case 10:
                case 13:
                case 14:
                case 19:
                {
                    if ($_POST["question$index"] == "yes")
                    {
                        $count++;
                    }
                }
                case 1:
                case 2:
                case 4:
                case 5:
                case 6:
                case 7:
                case 8:
                case 11:
                case 12:
                case 15:
                case 16:
                case 17:
                case 18:
                {
                    if ($_POST["question$index"] == "no")
                    {
                        $count++;
                    }
                }
                default: break;
            }
        }
        //вывод результата анкетирования
        echo "$name: $count<br>";
        if ($count > 15) 
        {
            echo "У Вас покладистый характер";
        }
            if ($count >=8 && $count <=15) 
        {
            echo "Вы не лишены недостатков, но с вами можно ладить";
        }
            if ($count < 8) 
        {
            echo "Вашим друзьям можно посочувствовать";
        }
    }
    Task1();
    Task2();
    Task3();
?>
<?php
    include_once "footer.php";
?>
</body>
</html>