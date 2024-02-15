<?
/* 
Задание: 
  - Создать переменные, где расположить свое имя и возраст.
  - Создать php – страницу и внедрить в нее разметку html и php. Вывести на html – странице свое имя и возраст.
  - Создать константу пи и вывести ее значение.
  - Выполнить задачу на применение логических операций. 
    Условие задания: в зависимости от времени суток картинка на сайте должна меняться. 
    Если пользователь заходит на сайт с 8.00 до 20.00 должно отображаться дневная картинка. 
    Если пользователь заходит на сайт с 20.00 (включительно) до 8.00 (не включительно), 
    то картинка должна отображаться ночная. Фрагмент кода дан, необходимо добавить недостающий код. 
*/

$fullName = 'Leonid Bedrikov';
$age = '37';
define('PI', pi());

$currentTime = new DateTimeImmutable("Asia/Yekaterinburg");
$startWork = new DateTimeImmutable("8:00");
$endWork = new DateTimeImmutable("20:00");

// echo $currentTime->format('H:i');
$day = './images/day.jpg';
$night = './images/night.jpg';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <ul>
    <li>ФИО: <?= $fullName ?></li>
    <li>Возраст: <?= $age ?></li>
    <li>Число Пи: <?= PI ?></li>
  </ul>
  <p>
    <?
    $path = $currentTime >= $startWork && $currentTime < $endWork ? $day : $night;
    ?>
    <img src="<?= $path ?>" width="600" height="600" alt="Время суток">
  </p>
</body>

</html>