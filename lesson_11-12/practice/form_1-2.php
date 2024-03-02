<?
/* Задание 1. Создайте форму, состоящую из текстового поля, многострочного поля, группы выключателей, группы переключателей. 
  Выведите на экран значения, которые ввел/выбрал пользователь. */

$outputForm1 = $outputForm2 = "";

if (isset($_POST["submit"])) {
  if (isset($_POST["survey"])) {
    if (isset($_POST["customer-name"])) {
      $name = htmlentities($_POST["customer-name"]);
    }
    if (isset($_POST["profession"])) {
      $profession = $_POST["profession"];
    }
    $hardskills = [];
    if (isset($_POST["hardskills"])) {
      $hardskills = $_POST["hardskills"];
    }
    if (isset($_POST["comment"])) {
      $comment = htmlentities($_POST["comment"]);
    }

    $outputForm1 = "<p>Вас зовут:&nbsp;$name<br>Хочу быть:&nbsp;$profession<br>Навыки:<ul>";

    if (is_array($hardskills)) {
      foreach ($hardskills as $item) {
        $outputForm1 .= "<li>" . htmlentities($item) . "</li>";
      }
    }

    $outputForm1 .= "</ul><br>Комментарий:&nbsp;$comment</p>";
  }

  /* Задание 2. Дана форма для ввода логина и пароля. Необходимо вывести на экран имя пользователя, 
   а пароль захешировать и сохранить его в массив $_POST */
   
  if (isset($_POST["sign-in"])) {
    if (isset($_POST["login"], $_POST["password"])) {
      $login = $_POST["login"];
      $password = $_POST["password"];

      $outputForm2 = "<p>Логин: $login";
      $_POST["encryptedPassword"] = hash('sha512', $password);
      echo $_POST["encryptedPassword"];
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div style="display: flex; gap: 4em;">
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
      <p>
        <label for="customer-name">Имя пользователя:</label>
        <input type="text" id="customer-name" name="customer-name">
      </p>
      <p>
        <label for="comment">Твои пожелания и комментарии по курсам:</label>
        <textarea style="display: block" name="comment" cols="30" rows="10" maxlength="200" placeholder="Оставьте комментарий"></textarea>
      </p>
      <fieldset style="width: 20em;">
        <legend>Выбери с чем уже приходилось работать</legend>
        <input type="checkbox" id="html" name="hardskills[]" value="html">
        <label for="html">HTML5</label>
        <input type="checkbox" id="css" name="hardskills[]" value="css">
        <label for="css">CSS3</label>
        <input type="checkbox" id="php" name="hardskills[]" value="php">
        <label for="php">PHP</label>
        <input type="checkbox" id="js" name="hardskills[]" value="js">
        <label for="js">JS</label>
      </fieldset>
      <fieldset style="width: 35em; margin-bottom: 5px;">
        <legend>Хочу быть</legend>
        <input type="radio" id="j-php-dev" name="profession" value="Junior PHP Developer" checked>
        <label for="j-php-dev">Junior PHP Developer</label>
        <input type="radio" id="m-php-dev" name="profession" value="Middle PHP Developer">
        <label for="m-php-dev">Middle PHP Developer</label>
        <input type="radio" id="fe-dev" name="profession" value="Front-End Developer">
        <label for="fe-dev">Front-End Developer</label>
      </fieldset>
      <input type="hidden" name="survey" />
      <input style="display: block; margin-bottom: 5px;" type="submit" name="submit" value="Отправить">
      <?= $outputForm1 ?>
    </form>

    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
      <p>
        <label for="login">Логин:</label>
        <input type="email" id="login" name="login" />
      </p>
      <p>
        <label for="password">Пароль (длина пароля не менее 3-х символов):</label>
        <input type="password" id="password" name="password" minlength="3" required />
      </p>
      <input type="hidden" name="sign-in" />
      <input type="submit" name="submit" value="Войти" />
      <?= $outputForm2 ?>
    </form>
  </div>
</body>

</html>