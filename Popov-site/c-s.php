<? include 'header.php'; ?>

<main class="main">
    <div class="container">
        <h2 class="center m-50">COOKIE/SESSION</h2>
        <section class="arrays">
            <div class="task">
                <h3>Задача 2 слайд 13</h3>
                <p>К задаче с авторизацией добавить две страницы (fact.php, bitrix.php). Необходимо запоминать
                    последнюю посещенную страницу (либо fact.php, либо bitrix.php). После авторизации
                    пользователя, необходимо вывести на экран, какая страница была посещена последней.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    <img src="./img/13-2.png" alt="упс">
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <?
                $last_visited = isset($_SESSION['last_visited']) ? $_SESSION['last_visited'] : 'Вы еще не посетили другие страницы';
                ?>
                <h1>Форма авторизации</h1>
                <form method="post">
                    <label for="login">Логин:</label>
                    <input type="text" name="login"><br>
                    <label for="password">Пароль:</label>
                    <input type="password" name="password"><br>
                    <button type="submit">Войти</button>
                </form>
                <p><?
                    $correct_login = "user";
                    $correct_password = "pas";

                    if (isset($_POST['login']) && isset($_POST['password'])) {
                        $login = $_POST['login'];
                        $password = $_POST['password'];

                        if ($login === $correct_login && $password === $correct_password) {
                            echo '<a href="bitrix.php">bitrix.php</a><br>';
                            echo '<a href="fact.php">fact.php</a><br>';
                            echo 'Последняя посещенная страница: ' . $last_visited;
                        } else {
                            echo 'неверные логин или пароль';
                        }
                    }
                    ?></p>
            </div>
            <div class="task">
                <h3>Задача 3 слайд 13</h3>
                <p>Создайте список с выпадающим цветом. Задний фон сайта должен
                    окрашиваться в выбранный цвет из списка. Если пользователе покинет сайт и
                    заново войдет, нужно окрасить сайт в тот цвет, который был выбран
                    последним.
                </p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    <img src="./img/13-3.PNG" alt="упс">
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
<a href="task13-3.php" class="ans-cookie">Перейдите по ссылке</a>
                </p>
            </div>
        </section>
    </div>
</main>

<? include 'footer.php'; ?>