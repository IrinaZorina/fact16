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
        <div class="head"><h1>Слайд № 25</h1></div>
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
        <div class="head"><h1>Урок 5-6 слайд № 15</h1></div>
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
        <div class="head"><h1>Урок 7-8 слайд №23</h1></div>
        <div class="quest">
            <div class="task"><p><b>1. Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. 
            Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.</b></p></div>
            <div class="decision">
                <?php
                    $str = 'bitrix';
                    echo "Дана строка: $str<br>";
                    if (mb_strlen($str) > 5){
                        echo 'Выводим: ' . substr($str, 0, 5) . '...';
                    }else {
                        echo "Выводим: $str";
                    }
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>2. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</b></p></div>
            <div class="decision">
                <?php
                    $str2 = 'abcacb';
                    echo "Дана строка: $str2<br>";
                    echo 'Выводим: ' . str_replace(array("a", "b", "c"), array("1", "2", "3"), $str2);
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>3. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</b></p></div>
            <div class="decision">
                <?php
                   $str3 = 'abc abc abc';
                   echo strpos($str3, "b", -2);
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>4. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</b></p></div>
            <div class="decision">
                <?php
                    $str4 = 'html css php';
                    print_r(explode(" ", $str4));
                ?>
            </div>
        </div>
        <div class="head"><h1>Урок 9-10 слайд №17</h1></div>
        <div class="quest">
            <div class="task"><p><b>1. Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами.</b></p></div>
            <div class="decision">
                <?php
                    function arr($a) {
                        $b = mt_rand(1,7);
                            for($i = 0; $i < $b; $i++){
                            $a[] =+ mt_rand(1,10);
                            }
                            return $a;
                    }
                    $array = [];
                    print_r(arr($array));
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>2. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.</b></p></div>
            <div class="decision">
                <?php
                   $str = 'HTML, CSS, PHP, BITRIX';
                   function f($a) {
                       $arr = explode(' ', $a);
                       $count = 0;
                       for($i = 0; $i < count($arr); $i++){
                           $count++;
                       }
                       return $count;
                   }
                   echo f($str);
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>3.Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).</b></p></div>
            <div class="decision">
                <?php
                   $str = 'HTML, CSS, PHP, BITRIX';
                   function reverse($x) {
                       for($i = mb_strlen($x); $i >= 0; $i--){
                           echo substr($x, $i, 1);
                       }
                   }
                   echo reverse($str);
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>4. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.</b></p></div>
            <div class="decision">
                <?php
                    $str = 'HTML, CSS, PHP, BITRIX';
                    function length($a){
                        echo mb_strlen($a);
                    }
                    echo length($str);
                ?>
            </div>
        </div>
        <div class="quest">
            <div class="task"><p><b>5. Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку.</b></p></div>
            <div class="decision">
                <?php
                   $str = 'HTML, CSS, PHP, BITRIX';
                   function br($a){
                       for($i = 0; $i < mb_strlen($a); $i++){
                           echo substr($a, $i, 1) . '<br>';
                       }
                       
                   }
                   echo br($str);
                ?>
            </div>
        </div>
    </div> 
    <?php require_once 'inc/footer.php' ?>        
</body>
</html>

