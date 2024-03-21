<?php
  if (isset($_POST['submit'])) {
    $color = $_POST['color'];
    setcookie('selected_color', $color, time()+60);
    echo "<style>body {background-color: $color}</style>";
} elseif (isset($_COOKIE['selected_color'])) {
    $color = $_COOKIE['selected_color'];
    echo "<style>body {background-color: $color}</style>";
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
<form method="post">
        <label for="color">Выберите цвет фона сайта:</label>
        <select name="color">
            <option value="#39ff14">Неоновый зелёный</option>
            <option value="#fe019a">Неоновый розовый</option>
            <option value="#04d9ff">Неоновый голубой</option>
            <option value="#ffea19">Неоновый жёлтый</option>
        </select>
        <button type="submit" name="submit">Выбрать</button>
    </form>
</body>
</html>