<? include 'header.php'; ?>
<main class="main">
    <div class="container">
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
                    for ($i = 0; $i < $n; $i++) { $numbers[]=mt_rand(-100, 100); } $min=0; $max=0; foreach ($numbers as $number) { if ($number> 0 && ($min === 0 || $number < $min)) { $min=$number; } if ($number < 0 && ($max===0 || $number> $max)) {
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