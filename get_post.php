<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/postStyle.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<?php require_once 'inc/header.php' ?>
<body>
    <div class="container">
        <div class="head"><h1>Урок 11-12</h1></div>
        <div class="head"><h2>Слайд 15</h2></div>
        <div class="quest">
            <div class="task"><p><b>1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей. Выведите на экран значения, которые ввел/выбрал пользователь.</b></p></div>
            <div class="decision">
                <form method="post">
                    <label for="login">Логин: </label>
                    <input type="text" name="login">
                    <br>
                    <br>
                    <label for="textaria">Введите текст: </label>
                    <textarea name="textaria" id="1" cols="20" rows="5"></textarea>
                    <br>
                    <br>
                    <label>1:
                    <input type="radio" name="radio" value="radio1">
                    </label>
                    <label>2:
                    <input type="radio" name="radio" value="radio2">
                    </label>
                    <label>3:
                    <input type="radio" name="radio" value="radio3">
                    </label>
                    <br>
                    <br>
                    <label>1:
                    <input type="checkbox" name="checkbox" value="checkbox1">
                    </label>
                    <label>2:
                    <input type="checkbox" name="checkbox" value="checkbox2">
                    </label>
                    <label>3:
                    <input type="checkbox" name="checkbox" value="checkbox3">
                    </label>
                    <br>
                    <br>
                    <input type="submit">
                </form>
                <?php
                    $text = isset($_POST['login']) ? $_POST['login'] : "";
                    $textaria = isset($_POST['textaria']) ? $_POST['textaria'] : "";
                    $radio = isset($_POST['radio']) ? $_POST['radio'] : "";
                    $checkbox = isset($_POST['checkbox']) ? $_POST['checkbox'] : "";
                    echo "text = $text , textaria = $textaria , radio = $radio , checkbox = $checkbox"
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, а пароль захешировать и сохранить его в массив $_POST</b></p></div>
            <div class="decision">
                <form method="post">
                    <label for="login">Логин: </label>
                    <input type="text" name="login">
                    <br></br>
                    <label for="password">Пароль: </label>
                    <input type="text" name="password">
                    <br></br>
                    <input type="submit">
                </form>
                <?php
                    echo 'Ваш логин: ' .  $_POST['login'];
                    echo '<br>';
                    $password = md5($_POST['password']);
                    echo 'Ваш захешированный пароль: ' . $password;
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>3. Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.</b></p></div>
            <div class="decision">
                <h3>Выберите login - Admin и введите пароль - qwerty</h3>
                <form method="post">
                    <label for="login">Логин: 
                    <select name="login">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="batman">Batman</option>
                    </select>
                    </label>
                    <label for="password">Пароль: 
                    <input type="text" name="password">
                    </label>
                    <input type="submit">
                </form>
                <?php
                    if($_POST['password'] == 'qwerty' && $_POST['login'] == 'admin'){
                        echo "Вы полуили доступ к секретным данным!";
                    }else{
                        echo "Доступ закрыт!";
                    }
                ?>
            </div>
        </div>
        <div class="quest">
           <div class="task"><p><b>4.  Создайте форму генерации ссылки с параметром: Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4. При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.</b></p></div>
           <div class="decision">
                <form method="get">
                    <label for="lab">Лабораторные работы: </label>
                    <select name="lab">
                        <option value="1">Лаб1</option>
                        <option value="2">Лаб2</option>
                        <option value="3">Лаб3</option>
                        <option value="4">Лаб4</option>
                    </select>
                    <input type="submit">
                </form>
           </div>
        </div>
    </div>
    <?php require_once 'inc/footer.php' ?> 
</body>
</html>