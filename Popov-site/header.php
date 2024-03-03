<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="домашнее задание, первое задание, академия Факт">
    <title>Первое домашнее задание</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="wraper">
    <header class="header">
    <a href="index.php">
            <img class="logo" src="img/logo.png" alt="logo">
        </a>
        <nav class="menu">
            <ul class="top_menu">
                <li class="top_menu-item"><a href="index.php">Главная</a></li>
                <li class="top_menu-item"><a href="table.php">Таблица</a></li>
                <li class="top_menu-item"><a href="news.php">Новости</a></li>
                <li class="top_menu-item"><a href="mendel.php">Менделеев</a></li>
                <li class="top_menu-item"><a href="task.php">Задачи PHP</a></li>
            </ul>
        </nav>
        <nav class="menu">
            <ul class="top_menu">
                <li class="top_menu-item"><a href="task2.php">Масивы</a></li>
                <li class="top_menu-item"><a href="task3.php">Строки</a></li>
                <li class="top_menu-item"><a href="task4.php">Функции</a></li>
                <li class="top_menu-item"><a href="task5.php">Доп. задачи</a></li>
                <li class="top_menu-item"><a href="get-post.php">GET/POST</a></li>
            </ul>
        </nav>
       <? $date = date("H");
if($date >= 20 || $date <= 8)
$img = "/img/tfone3.jpg";
else
$img = "/img/fone.jpg";
?>
<style>
    body {
  background-image: url("<?echo $img?>");
  background-repeat: round;
}
</style>
    </header>