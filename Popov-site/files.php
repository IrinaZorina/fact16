<? include 'header.php'; ?>

<main class="main">
    <div class="container">
        <h2 class="center m-50">Файлы</h2>
        <section class="arrays">
            <div class="task">
                <h3>Задача 3 слайд 12</h3>
                <p>Дан текстовый документ, в котором есть: имя, фамилия, обратная связь. Вывести на экран
                    только имя и фамилию.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $fileName = 'Im.txt';
                    $fileContent = file_get_contents($fileName);
                    $lines = explode(" ", $fileContent);
                    $name = $lines[0];
                    $surname = $lines[1];
                    echo "Имя: $name<br>";
                    echo "Фамилия: $surname<br>";
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p class="red-color">
                    <?
                    $fileName = 'Im.txt';
                    $fileContent = file_get_contents($fileName);
                    $lines = explode(" ", $fileContent);
                    $name = $lines[0];
                    $surname = $lines[1];
                    echo "Имя: $name<br>";
                    echo "Фамилия: $surname<br>";
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 4 слайд 12</h3>
                <p>Даны два файла, состоящие из предложений. Создать третий файл, содержащий все
                    предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий
                    файл.
                </p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $file1 = file_get_contents('file1.txt');
                    $file2 = file_get_contents('file2.txt');
                    $uniqueSentences = array_unique(array_merge(preg_split("/\r\n|\n|\r/", $file1), preg_split("/\r\n|\n|\r/", $file2)));

                    $file3 = fopen('file3.txt', 'w');
                    foreach ($uniqueSentences as $sentence) {
                    fwrite($file3, $sentence . '');
                    }
                    fclose($file3);
                    $file3 = file_get_contents('file3.txt');
                    echo 'Текст первого файла: ' . ($file1) . '';
                    echo 'Текст второго файла: >' . ($file2) . '';
                    echo 'Текст третьего файла: ' . ($file3) . '';
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p class="red-color">
                    <?
                    $file1 = file_get_contents('file1.txt');
                    $file2 = file_get_contents('file2.txt');
                    $uniqueSentences = array_unique(array_merge(preg_split("/\r\n|\n|\r/", $file1), preg_split("/\r\n|\n|\r/", $file2)));

                    $file3 = fopen('file3.txt', 'w');
                    foreach ($uniqueSentences as $sentence) {
                        fwrite($file3, $sentence . '<br>');
                    }
                    fclose($file3);
                    $file3 = file_get_contents('file3.txt');
                    echo 'Текст первого файла: <br>' . ($file1) . '<br><br>';
                    echo 'Текст второго файла: <br>' . ($file2) . '<br><br>';
                    echo 'Текст третьего файла: <br>' . ($file3) . '<br><br>';
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 5 слайд 12</h3>
                <p>Даны два файла, состоящие из предложений. Создать третий файл, содержащий все
                    повторяющиеся предложения.
                </p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $file4 = file_get_contents('file4.txt');
                    $file5 = file_get_contents('file5.txt');
                    $sent1 = explode('.', $file4);
                    $sent2 = explode('.', $file5);

                    $repeat= array_intersect($sent1, $sent2);

                    file_put_contents('repeat.txt', implode('.', $repeat));
                    $rep = file_get_contents('repeat.txt');
                    echo 'Текст первого файла ' . ($file4) . '';
                    echo 'Текст второго файла ' . ($file5) . '';
                    echo 'Текст третьего файла ' . ($rep) . '';
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p class="red-color">
                    <?
                    $file4 = file_get_contents('file4.txt');
                    $file5 = file_get_contents('file5.txt');
                    $sent1 = explode('.', $file4);
                    $sent2 = explode('.', $file5);

                    $repeat = array_intersect($sent1, $sent2);

                    file_put_contents('repeat.txt', implode('.', $repeat));
                    $rep = file_get_contents('repeat.txt');
                    echo 'Текст первого файла <br>' . ($file4) . '<br><br>';
                    echo 'Текст второго файла <br>' . ($file5) . '<br><br>';
                    echo 'Текст третьего файла <br>' . ($rep) . '<br><br>';
                    ?>
                </p>
            </div>
        </section>
    </div>
</main>

<? include 'footer.php'; ?>