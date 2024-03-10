<!DOCTYPE html>
<html>

<head>
    <title>Выбор цвета</title>
</head>

<body>

    <form method="post">
        <label for="color">Выберите цвет:</label>
        <select name="color">
            <option value="red">Красный</option>
            <option value="blue">Синий</option>
            <option value="green">Зеленый</option>
            <option value="yellow">Желтый</option>
        </select>
        <input type="submit" name="submit" value="Выбрать">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $color = $_POST['color'];
        setcookie('selected_color', $color, time() + (86400 * 2), "/");
        echo "<style>body { background-color: $color; }</style>";
    } elseif (isset($_COOKIE['selected_color'])) {
        $color = $_COOKIE['selected_color'];
        echo "<style>body { background-color: $color; }</style>";
    }
    ?>

</body>

</html>