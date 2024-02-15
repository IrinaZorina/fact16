<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/tasksStyle.css">
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<?php require_once 'inc/header.php' ?>
<body>
    <div class="container">
        <div class="head"><h2>Слайд № 25</h2></div>
        <div class="quest1">
            <div class="task"><p class='p'><B>1. Выведите столбец чисел от 5 до 13.</B></p></div>
            <div class="decision1">
                <?php
                    for($i = 5; $i <= 13; $i++) {
                        echo "$i<br>";
                    }
                ?>
            </div>
        </div>
        <div class="quest2">
            <div class="task"><p><B>2. Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? 
            Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.</B></p></div>
                <div class="decision2">
                    <div class="while">
                        <p>Через While:</p>
                        <?php
                            $num = 1000;
                            $count = 0;
                                while ($num >= 50){
                                    $num = $num/2;
                                    $count++;
                                }
                            echo "$num<br>$count";
                        ?>
                    </div>
                    <div class="for">
                        <p>Через for:</p>
                        <?php
                            $count = 0;    
                            for ($num = 1000; $num >= 50; $num = $num/2){
                                $count++;
                            }
                            echo "$num<br>$count";
                        ?>
                    </div>
                </div>
        </div>
        <div class="quest3">
            <div class="task"><p><B>Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, 
            то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, 
            то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». 
            Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.</B></p></div>
            <div class="decision3">
                <?php
                    $i = 9;
                    switch ($i) {
                        case 0 :
                            echo '0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10';
                            break;
                        case 1 :
                            echo '0, 1, 2, 3, 4, 5, 6, 7, 8, 9';
                            break;
                        case 2 :
                            echo '0, 1, 2, 3, 4, 5, 6, 7, 8';
                            break;
                        case 3 :
                            echo '0, 1, 2, 3, 4, 5, 6, 7';
                            break;
                        case 4 :
                            echo '0, 1, 2, 3, 4, 5, 6';
                            break;
                        case 5 :
                            echo '0, 1, 2, 3, 4, 5';
                            break;
                        case 6 :
                            echo '0, 1, 2, 3, 4';
                            break;
                        case 7 :
                            echo '0, 1, 2, 3';
                            break;
                        case 8 :
                            echo '0, 1, 2';
                            break;
                        case 9 :
                            echo '0, 1';
                            break;
                        case 10 :
                            echo '0';
                            break;
                    }
                ?>               
            </div>               
        </div>
    </div> 
    <?php require_once 'inc/footer.php' ?>        
</body>
</html>