<? include 'header.php'; ?>
<main class="main">
    <div class="container">
        <section class="tasks-php">
            <div class="task">
                <h3>Задача 3 слайд 23</h3>
                <p>Число Пи вычисляется по формуле Грегори следующим образом: РI=4(1-1/3+1/5-1/7+1/9-...), причем, чем больше слагаемых в скобках, тем выше точность вычисления числа Пи. Определить минимальное количество слагаемых для вычисления Пи с точностью 0.01</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $pi =0;
                    $i = 0;
                    $a = 1;
                    $b = 3;
                    $p = round(M_PI, 2);
                    while ($pi != $p) {
                    if($i%2 != 0) {
                    $a += 1/$b;
                    } else {
                    $a -= 1/$b;
                    }
                    $i++;
                    $b +=2;
                    $pi = round(4*$a, 2);
                    }
                    echo "Минимальное количество слагаемых для
                    вычисления числа pi с точностью до 0,01 = ".$i;
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $pi = 0;
                    $i = 0;
                    $a = 1;
                    $b = 3;
                    $p = round(M_PI, 2);
                    while ($pi != $p) {
                        if ($i % 2 != 0) {
                            $a += 1 / $b;
                        } else {
                            $a -= 1 / $b;
                        }
                        $i++;
                        $b += 2;
                        $pi = round(4 * $a, 2);
                    }
                    echo "Минимальное количество слагаемых для вычисления числа pi с точностью до 0,01 = " . $i;
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 1 слайд 25</h3>
                <p>Выведите столбец чисел от 5 до 13.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $i = 4;
                    while ($i++ < 13) { echo "$i <br>" ; } </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <? $i = 4;
                    while ($i++ < 13) {
                        echo "$i <br>";
                    } ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 2 слайд 25</h3>
                <p>Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    echo "<br> слайд 25 задание 2 с помощью while<br>";
                    $num = 1000;
                    $count = 0;
                    while ($num >= 50) {
                    $num = $num / 2;
                    $count++ ;
                    }
                    echo "Итоговое число деления: $num <br>";
                    echo "Количество итераций: $count <br>";
                    echo "<br> слайд 25 задание 2 с помощью for<br>";
                    $num = 1000;
                    for ($i=0; $num >= 50; $i++) {
                    $num = $num / 2;
                    }
                    echo "Итоговое число деления: $num <br>";
                    echo "Количество итераций: $i <br>";
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    echo "<br> слайд 25 задание 2 с помощью while<br>";
                    $num = 1000;
                    $count = 0;
                    while ($num >= 50) {
                        $num = $num / 2;
                        $count++;
                    }
                    echo "Итоговое число деления: $num <br>";
                    echo "Количество итераций: $count <br>";
                    echo "<br> слайд 25 задание 2 с помощью for<br>";
                    $num = 1000;
                    for ($i = 0; $num >= 50; $i++) {
                        $num = $num / 2;
                    }
                    echo "Итоговое число деления: $num <br>";
                    echo "Количество итераций: $i <br>";
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 3 слайд 25</h3>
                <p>Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную положить 0, то на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная равна 1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $i = mt_rand(0,10);
                    $p = 0;
                    while ($p++ < 10-$i) { echo "$p " ; } </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $i = mt_rand(0, 10);
                    $p = 0;
                    while ($p++ < 10 - $i) {
                        echo "$p ";
                    }
                    ?>
                </p>
            </div>
        </section>
    </div>
</main>
<? include 'footer.php'; ?>