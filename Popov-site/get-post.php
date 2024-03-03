<? include 'header.php'; ?>
<main class="main">
    <div class="container">
        <h2 class="center m-50">GET/POST</h2>
        <section class="arrays">
            <div class="task">
                <h3>Задача 3 слайд 15</h3>
                <p>Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    <img src="./img/15-3.PNG" alt="упс">
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <form method="post">
                    <label for="login">Логин: </label>
                    <select name="login">
                        <option value="admin">Админ</option>
                        <option value="user1">Пользователь 1</option>
                        <option value="user2">Пользователь 2</option>
                    </select><br>
                    <label for=""> Пароль:
                        <input type="text" name="password">
                    </label>
                    <input type="submit">
                </form>

                <?
                $access = array(
                    "admin" => "d394c270a97078f4c58056dc79474954", // пароль "portala"
                    "user1" => "c346fa9479ed453541f0a1e0a5e5055c", // пароль "haker"
                    "user2" => "b03e3fd2b3d22ff6df2796c412b09311" // пароль "junior"
                );

                if (isset($_POST['login']) && isset($_POST['password'])) {
                    $login = $_POST['login'];
                    $password = md5($_POST['password']); // Хеширование введённого пароля
                    if (array_key_exists($login, $access) && $access[$login] === $password) {
                        header("Location: verno.html");
                    } else {
                        header("Location: neverno.html");
                    }
                }
                ?>
            </div>
            <div class="task">
                <h3>Задача 4 слайд 15</h3>
                <p>Создайте форму генерации ссылки с параметром:
                <ul>
                    <li>Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4</li>
                    <li>При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3 , где 3 – это номер выбранной лабораторной работы.</li>
                </ul>
                </p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    <img src="./img/15-4.PNG" alt="упс">
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                <form method="get">
                    <label for="login">Логин: </label>
                    <select name="l">
                        <option value="1">Лабоаторная 1</option>
                        <option value="2">Лабоаторная 2</option>
                        <option value="3">Лабоаторная 3</option>
                        <option value="4">Лабоаторная 4</option>
                    </select><br>
                    <input type="submit">
                </form>
                </p>
            </div>
            <div class="task">
                <h3>Задача 3 слайд 16</h3>
                <p>Создайте анкету на форме. Ответ на каждый из вопросов представьте с помощью переключателя («да» или «нет»). По умолчанию задайте везде значение «да».
                    Напишите сценарий обработки анкеты: поставьте 1 балл, если был ответ «да» в вопросах с номерами 3, 9, 10, 13, 14, 19 и «нет» в вопросах с номерами 1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18. Подсчитайте сумму набранных баллов:

                <ul>
                    <li>если она оказалась более 15, то результат: «У Вас покладистый характер»;</li>
                    <li>если сумма в интервале от 8 до 15, то результат: «Вы не лишены недостатков, но с вами можно ладить»;</li>
                    <li>если сумма менее 8 баллов, то результат: «Вашим друзьям можно посочувствовать».</li>
                </ul>
                Отобразите на экране имя анкетируемого, фразу-результат анкетирования.
                </p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    <img src="./img/16-3-1.PNG" alt="упс">
                    <img src="./img/16-3-2.PNG" alt="упс">
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                <h2>Анкета для друга</h2>
    <form method="post" action="">
        <label for=""> Ваше имя:
            <input type="text" name="name">
        </label> <br><br>
        Вы любите фрукты?: <br> <input type="radio" name="q1" value="yes" checked>Да <input type="radio" name="q1" value="no">Нет<br>
        Вы предпочитаете кофе чаю?: <br> <input type="radio" name="q2" value="yes" checked>Да <input type="radio" name="q2" value="no">Нет<br>
        Вам нравится делать утреннюю зарядку?: <br> <input type="radio" name="q3" value="yes" checked>Да <input type="radio" name="q3" value="no">Нет<br>
        Вы часто занимаетесь спортом?: <br> <input type="radio" name="q4" value="yes" checked>Да <input type="radio" name="q4" value="no">Нет<br>
        Вы любите путешествовать?: <br> <input type="radio" name="q5" value="yes" checked>Да <input type="radio" name="q5" value="no">Нет<br>
        Любите ли вы животных?: <br> <input type="radio" name="q6" value="yes" checked>Да <input type="radio" name="q6" value="no">Нет<br>
        Вы бы хотели научиться новому языку?: <br> <input type="radio" name="q7" value="yes" checked>Да <input type="radio" name="q7" value="no">Нет<br>
        Вам нравится читать книги?: <br> <input type="radio" name="q8" value="yes" checked>Да <input type="radio" name="q8" value="no">Нет<br>
        Вы предпочитаете горячий климат холодному?: <br> <input type="radio" name="q9" value="yes" checked>Да <input type="radio" name="q9" value="no">Нет<br>
        Вы часто готовите дома?: <br> <input type="radio" name="q10" value="yes" checked>Да <input type="radio" name="q10" value="no">Нет<br>
        Любите ли вы ходить в походы?: <br> <input type="radio" name="q11" value="yes" checked>Да <input type="radio" name="q11" value="no">Нет<br>
        Хотели бы вы научиться играть на музыкальном инструменте?: <br> <input type="radio" name="q12" value="yes" checked>Да <input type="radio" name="q12" value="no">Нет<br>
        Вы бы хотели попробовать экзотическую еду?: <br> <input type="radio" name="q13" value="yes" checked>Да <input type="radio" name="q13" value="no">Нет<br>
        Вам нравится смотреть телевизор?: <br> <input type="radio" name="q14" value="yes" checked>Да <input type="radio" name="q14" value="no">Нет<br>
        Вы предпочитаете активный отдых пассивному?: <br> <input type="radio" name="q15" value="yes" checked>Да <input type="radio" name="q15" value="no">Нет<br>
        Любите ли вы ходить в кино?: <br> <input type="radio" name="q16" value="yes" checked>Да <input type="radio" name="q16" value="no">Нет<br>
        Вам интересна высокая мода?: <br> <input type="radio" name="q17" value="yes" checked>Да <input type="radio" name="q17" value="no">Нет<br>
        Вы любите пение?: <br> <input type="radio" name="q18" value="yes" checked>Да <input type="radio" name="q18" value="no">Нет<br>
        Вам нравится танцевать?: <br> <input type="radio" name="q19" value="yes" checked>Да <input type="radio" name="q19" value="no">Нет<br>
        Любите ли вы ходить в театр?: <br> <input type="radio" name="q20" value="yes" checked>Да <input type="radio" name="q20" value="no">Нет<br>
        Хотели бы вы изучить новую профессию?: <br> <input type="radio" name="q21" value="yes" checked>Да <input type="radio" name="q21" value="no">Нет<br>

        <input type="submit" name="submit" value="Отправить">
    </form>
    <?
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $points = 0;
        $answers = array("q1", "q2", "q1", "q3", "q4", "q5", "q6", "q7", "q8", "q9", "q10", "q11", "q12", "q13", "q14", "q15", "q16", "q17", "q18", "q19", "q20", "q12");
        foreach ($answers as $question) {
            if ($_POST[$question] == "yes" && in_array($question, array("q3", "q9", "q10", "q13", "q14", "q19"))) {
                $points += 1;
            }
            if ($_POST[$question] == "no" && in_array($question, array("q1", "q2", "q4", "q5", "q6", "q7", "q8", "q11", "q12", "q15", "q16", "q17", "q18"))) {
                $points += 1;
            }
        }
        echo "Сумма баллов: " . $points . "<br>";
        if ($points > 15) {
            echo $_POST['name'] . "у вас покладистый характер";
        } elseif ($points >= 8 && $points <= 15) {
            echo $_POST['name'] . " вы не лишены недостатков, но с вами можно ладить";
        } else {
            echo $_POST['name'] . " вашим друзьям можно посочувствовать";
        }
    }
    ?>
                </p>
            </div>
        </section>
    </div>
</main>
<? include 'footer.php'; ?>