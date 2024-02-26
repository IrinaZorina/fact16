<? include 'header.php'; ?>
<main class="main">
    <div class="container">
        <h2 class="center m-50">Строки</h2>
        <section class="arrays">
            <div class="task">
                <h3>Задача 1 слайд 23</h3>
                <p>Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту строку на экран.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $str = 'Привет мир!';
                    if (mb_strlen($str) > 5) {
                    echo $result = mb_substr($str, 0, 5) . '...';
                    } else {
                    echo $str;
                    }
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $str = 'Привет мир!';
                    if (mb_strlen($str) > 5) {
                        echo $result = mb_substr($str, 0, 5) . '...';
                    } else {
                        echo $str;
                    }
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 2 слайд 23</h3>
                <p>Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $str = 'abcsdsdlkldsabssacc';

                    $str = str_replace('a', '1', $str);
                    $str = str_replace('b', '2', $str);
                    $str = str_replace('c','3', $str);
                    echo $str;
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $str = 'abcsdsdlkldsabssacc';

                    $str = str_replace('a', '1', $str);
                    $str = str_replace('b', '2', $str);
                    $str = str_replace('c', '3', $str);
                    echo $str;
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 3 слайд 23</h3>
                <p>Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $str = 'abc abc abc';
                    $pos = strrpos($str, 'b') + 1;
                    echo $pos;
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $str = 'abc abc abc';
                    $pos = strrpos($str, 'b') + 1;
                    echo $pos;
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 4 слайд 23</h3>
                <p>Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $str = 'html css php';
                    $arr = explode(' ', $str);
                    echo "<br>";
                    echo $arr[0];
                    echo "<br>";
                    echo $arr[1];
                    echo "<br>";
                    echo $arr[2];
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $str = 'html css php';
                    $arr = explode(' ', $str);
                    echo "<br>";
                    echo $arr[0];
                    echo "<br>";
                    echo $arr[1];
                    echo "<br>";
                    echo $arr[2];
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 5 слайд 23</h3>
                <p>В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней между датами.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $date1 = '07-01-1992';
                    $date2 = '07-09-1992';
                    $origin = date_create($date1);
                    $target = date_create($date2);
                    $interval = date_diff($origin, $target);
                    echo $interval->format('%a дней');
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $date1 = '07-01-1992';
                    $date2 = '07-09-1992';
                    $origin = date_create($date1);
                    $target = date_create($date2);
                    $interval = date_diff($origin, $target);
                    echo $interval->format('%a дней');
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 4 слайд 24</h3>
                <p>Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $date1 = '07-01-1992';
                    $date2 = date('Y-M-d');
                    $origin = date_create($date1);
                    $target = date_create($date2);
                    $interval = date_diff($origin, $target);
                    echo $interval->format('%a дней');
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $date1 = '07-01-1992';
                    $date2 = date('Y-M-d');
                    $origin = date_create($date1);
                    $target = date_create($date2);
                    $interval = date_diff($origin, $target);
                    echo $interval->format('%a дней');
                    ?>
                </p>
            </div>
        </section>
    </div>
</main>
<? include 'footer.php'; ?>