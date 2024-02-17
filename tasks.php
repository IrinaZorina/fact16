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
        <div class="quest">
            <div class="task"><p class='p'><B>1. Выведите столбец чисел от 5 до 13.</B></p></div>
            <div class="decision">
                <?php
                    for($i = 5; $i <= 13; $i++) {
                        echo "$i<br>";
                    }
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><B>2. Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? 
            Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.</B></p></div>
                <div class="decision">
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
        <div class="quest">
            <div class="task"><p><B>Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, 
            то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, 
            то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». 
            Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.</B></p></div>
            <div class="decision">
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
        <div class="head"><h2>Урок 5-6 слайд № 15</h2></div>
        <div class="quest">
            <div class="task"><p><b>1. Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в переменную $result.</b></p></div>
            <div class="decision">
                <?php
                    $arr1 = [50, 45, 40, 35, 30];
                    $result = 0;
                    foreach ($arr1 as $value){
                        $result += $value;
                    };
                    echo $result;
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>2. Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами. После чего вывести данный массив в противоположном порядке.</b></p></div>
            <div class="decision">
                <?php
                    $arr2 = [];

                    $arr2[] = mt_rand(0, 10);
                    $arr2[] = mt_rand(0, 10);
                    $arr2[] = mt_rand(0, 10);
                    $arr2[] = mt_rand(0, 10);
                    
                    foreach ($arr2 as $key => $value){
                        echo $value . '<br />' ;
                    }
                    
                    for ($i = count($arr2)-1; $i >= 0; $i-- ) {
                        echo $arr2[$i] . '<br />';
                    }
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>3. Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать название картинки из массива и выводить ее на экран.</b></p></div>
            <div class="decision">
                <?php
                    $arr3 = ['1.png', '2.png'];

                    $rand_image = $arr3[mt_rand(0, count($arr3)-1)];
                    
                    echo "<img src='$rand_image'>";
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>4. Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.</b></p></div>
            <div class="decision">
                <?php
                    $arr4 = [];
                    $arr4[] = mt_rand(-100, 100);
                    $arr4[] = mt_rand(-100, 100);
                    $arr4[] = mt_rand(-100, 100);
                    $arr4[] = mt_rand(-100, 100);
                    $arr4[] = mt_rand(-100, 100);
                    print_r($arr4);
                    
                    $min = 101;
                    $max = -101;
                    
                    foreach($arr4 as $value){
                       if($value < $min && $value >= 0){
                          $min = $value;
                       };
                       if($value > $max && $value < 0){
                          $max = $value;
                       };
                    };
                    
                    echo "<br>'Минимально положительное число = $min<br>Максимально отрицательное число = $max";
                ?>
            </div>
        </div>
    </div> 
    <?php require_once 'inc/footer.php' ?>        
</body>
</html>