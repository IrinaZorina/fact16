<?
session_start();

$score = 0;
$answers = [
  "q1" => 2,
  "q2" => 4,
  "q3" => 6
];

if (isset(
  $_POST["submit"],
  $_POST["q3"]
)) {
  if ($_POST["q3"] == $answers["q3"]) {
    $score++;
  }
}

foreach (array_slice($answers, 0, count($answers) - 1) as $question => $answer) {
  if ($answers[$question] == $_SESSION[$question]) {
    $score++;
  }
}

$message = "Вы ответили правильно на " . $score . " из " . count($answers) . " вопросов, количество баллов " . $score . ".";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p><?= $message ?></p>
</body>

</html>