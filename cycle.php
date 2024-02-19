<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    <?php
        require_once('header.php');
    ?>
    <h3 style= "color: black;">Задача 1</h3>
    <!-- Дана последовательность элементов от 1 до 30. 
    Необходимо вывести на экран числа, кратные 2. Каждое число должно быть с новой строки. -->
    <?php
         for ($i = 1; $i<=30; $i++) {
                if ($i % 2 == 0 ) {
                    echo $i . "<br> " ;
                }
            }
    ?>
    <h3 style= "color: black;">Задача 2</h3>
    <?php
        for($j = 1; $j<= 50; $j++ ) {
            if ($j % 3 == 0){
                echo "<i> $j </i>";
            }
            elseif ($j % 5 == 0) {
                echo "<strong> $j </strong>";
            }
        }
    ?>
</body>
</html>