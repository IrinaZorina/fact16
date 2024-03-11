<?php
print_r($_GET);
echo "<br>";
print_r($_POST);
echo "<br>";
print_r($_REQUEST);
echo "<br>";
$message = "";
$separator = ";";
$questions = [];
$matchYes = [3, 9, 10, 13, 14, 19];
$matchNo = [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18];
$questionsCount = $score = 0;
$path = __DIR__ . "../data/questions.txt";

$fd = fopen($path, 'r') or die("не удалось открыть файл");
while (!feof($fd)) {
  $temporary = explode($separator, fgets($fd));
  $questions[$temporary[0]] = $temporary[1];
  $questionsCount++;
}
fclose($fd);

if (isset($_POST["submit"]) && !in_array($_POST['customer-name'], ["", null])) {
  $questionsKeys = array_keys(array_slice($_POST, 0, $questionsCount));

  if ($questionsKeys) {
    foreach ($questionsKeys as $questionIndex) {
      if (
        $_POST[$questionIndex] === 'yes' &&
        in_array(substr($questionIndex, 1, strlen($questionIndex)), $matchYes) ||
        $_POST[$questionIndex] === 'no' &&
        in_array(substr($questionIndex, 1, strlen($questionIndex)), $matchNo)
      ) {
        $score++;
      }
    }

    $message = $score > 15 ? "У Вас покладистый характер" : ($score >= 8 ? "Вы не лишены недостатков, но с вами можно ладить" : "Вашим друзьям можно посочувствовать");
    $userName = htmlentities($_POST['customer-name']);
  }
  $message = $userName . ", результаты анкеты - $message";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" contents="html, css, information">
    <title>About Me</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset style="width: 35em; margin-bottom: 5px;">
      <legend style="font-size: 2em;">Анкета</legend>

      <? foreach ($questions as $question => $value) {
        echo "<h4>" . substr($question, 1, strlen($question)) . ". " . $value . "</h4>
              <label for='$question'>Да</label>
              <input type='radio' id='$question' name='$question' value='yes' checked>
              <label for='$question'>Нет</label>
              <input type='radio' id='$question' name='$question' value='no'>";
      }
      ?>
    </fieldset>
    <p>
      <label for="customer-name">Введите свое имя:</label>
      <input type="text" id="customer-name" name="customer-name">
    </p>
    <input style="display: block; margin-bottom: 5px;" type="submit" name="submit" value="Отправить">
    <p><?= $message ?></p>
  </form>
</body>
</html>