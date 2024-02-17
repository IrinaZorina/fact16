<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
</head>

<body>
<?php
    include_once "getTime.php";
    if ($hours > 8 && $hours < 20)
    {
        echo "<header class = \"headerWhite\">";
    }
    else
    {
        echo "<header class = \"headerBlack\">";
    }
?>
        <nav>             
            <a <?php echo $colorClassText ?> href="aboutMe.php" target="_self">Главная</a>
            <a <?php echo $colorClassText ?> href="transform.php" target="_self">Задание Transform</a>
            <a <?php echo $colorClassText ?> href="table.php" target="_self">Задание Table</a>
            <a <?php echo $colorClassText ?> href="cycles.php" target="_self">Циклы</a>
            <a <?php echo $colorClassText ?> href="array.php" target="_self">Массивы</a>
        </nav>
    </header>
</body>

</html>