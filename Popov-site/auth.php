<? include 'header.php'; ?>
<?
$hostname = 'sql8.freesqldatabase.com';
$username = 'sql8692241';
$password = 'duXbWDBV4d';
$dbname = 'sql8692241';
$connect = mysqli_connect($hostname, $username, $password, $dbname);
?>
<main class="main">
    <div class="container">
        <h3>Авторизация</h3>

        <form method="post">
            <label for="login">Логин:</label><br>
            <input type="text" name="login"><br>
            <label for="password">Пароль:</label><br>
            <input type="password" name="password"><br><br>
            <input type="submit" value="Войти">
        </form>

        <?
        if (isset($_POST['login']) && isset($_POST['password'])) {
            $login = $_POST['login'];
            $password = md5($_POST['password']);

            $query = "SELECT * FROM Users WHERE Login='$login' AND Password='$password'";
            $result = mysqli_query($connect, $query);
            /* в таблице 2 записи admin и user(логин и пароль совпадают) */
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['login'] = $login;
                header("Location: index.php");
                exit;
            } else {
                echo "Неверный логин или пароль.";
            }
        }
        mysqli_close($connect);
        ?>
    </div>
</main>
<? include 'footer.php'; ?>