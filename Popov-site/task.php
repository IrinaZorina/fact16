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
        <h2 class="center m-50">Массивы</h2>
        <section class="arrays">
            <div class="task">
                <h3>Задача 4 слайд 15</h3>
                <p>Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и максимальное отрицательное число.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $n = 10;
                    for ($i = 0; $i < $n; $i++) {
                        $numbers[]=mt_rand(-100, 100); }
                        $min=0;
                        $max=0;
                        foreach ($numbers as $number) {
                            if ($number> 0 && ($min === 0 || $number < $min)) {
                                $min=$number;
                            }
                                if ($number < 0 && ($max===0 || $number> $max)) {
                            $max = $number;
                            }
                            echo "<br>" . $number . "<br>";
                            }
                            echo "Минимальное положительное число: $min <br>";
                            echo "Максимальное отрицательное число: $max";
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $n = 10;
                    for ($i = 0; $i < $n; $i++) {
                        $numbers[] = mt_rand(-100, 100);
                    }
                    $min = 0;
                    $max = 0;
                    foreach ($numbers as $number) {
                        if ($number > 0 && ($min === 0 || $number < $min)) {
                            $min = $number;
                        }
                        if ($number < 0 && ($max === 0 || $number > $max)) {
                            $max = $number;
                        }
                        echo "<br>" . $number . "<br>";
                    }
                    echo "Минимальное положительное число: $min <br>";
                    echo "Максимальное отрицательное число: $max";
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 5 слайд 16</h3>
                <p>Для группы учащихся известны годовые оценки по следующим предметам: математика, физика, химия, информатика. Найти среднюю в группе оценку по каждому из предметов. Суммирование оценок по каждому предмету.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                $grades = [
            ['math' => 55, 'physics' => 90, 'chemistry' => 75, 'informatics' => 95],
            ['math' => 70, 'physics' => 80, 'chemistry' => 85, 'informatics' => 30],
            ['math' => 30, 'physics' => 55, 'chemistry' => 80, 'informatics' => 90],
            ['math' => 80, 'physics' => 85, 'chemistry' => 70, 'informatics' => 85],
            ['math' => 75, 'physics' => 80, 'chemistry' => 70, 'informatics' => 80],
        ];

        $mathSum = 0;
        $physicsSum = 0;
        $chemistrySum = 0;
        $informaticsSum = 0;

        foreach ($grades as $grade) {
            $mathSum += $grade['math'];
            $physicsSum += $grade['physics'];
            $chemistrySum += $grade['chemistry'];
            $informaticsSum += $grade['informatics'];
        }

        $mathAvg = $mathSum / count($grades);
        $physicsAvg = $physicsSum / count($grades);
        $chemistryAvg = $chemistrySum / count($grades);
        $informaticsAvg = $informaticsSum / count($grades);

        echo "Средняя оценка по математике: $mathAvg";
        echo "Средняя оценка по физике: $physicsAvg";
        echo "Средняя оценка по химии: $chemistryAvg";
        echo "Средняя оценка по информатике: $informaticsAvg";
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                $grades = [
                    ['math' => 55, 'physics' => 90, 'chemistry' => 75, 'informatics' => 95],
                    ['math' => 70, 'physics' => 80, 'chemistry' => 85, 'informatics' => 30],
                    ['math' => 30, 'physics' => 55, 'chemistry' => 80, 'informatics' => 90],
                    ['math' => 80, 'physics' => 85, 'chemistry' => 70, 'informatics' => 85],
                    ['math' => 75, 'physics' => 80, 'chemistry' => 70, 'informatics' => 80],
                ];

                $mathSum = 0;
                $physicsSum = 0;
                $chemistrySum = 0;
                $informaticsSum = 0;

                foreach ($grades as $grade) {
                    $mathSum += $grade['math'];
                    $physicsSum += $grade['physics'];
                    $chemistrySum += $grade['chemistry'];
                    $informaticsSum += $grade['informatics'];
                }

                $mathAvg = $mathSum / count($grades);
                $physicsAvg = $physicsSum / count($grades);
                $chemistryAvg = $chemistrySum / count($grades);
                $informaticsAvg = $informaticsSum / count($grades);

                echo "Средняя оценка по математике: $mathAvg <br>";
                echo "Средняя оценка по физике: $physicsAvg <br>";
                echo "Средняя оценка по химии: $chemistryAvg <br>";
                echo "Средняя оценка по информатике: $informaticsAvg";
                    ?>
                </p>
            </div>
        </section>
    </div>
</main>
<? include 'footer.php'; ?>