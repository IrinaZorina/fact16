<main>
    <h1>Строки</h1>
    <section>
        <h2>Слайд 23</h2>
        <section>
            <h3>1.Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте
                троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - необходимо вывести эту
                строку на экран.
            </h3>
            <p>Решение:</p>
            <?php
            // Создаем случайную строку
            $string = "Это случайная строка";

            // Проверяем длину строки
            if (mb_strlen($string) > 5) {
                // Если длина больше 5 символов, вырезаем первые 5 символов, добавляем троеточие и выводим
                $shortened_string = mb_substr($string, 0, 5) . "...";
                echo $shortened_string;
            } else {
                // Иначе, просто выводим строку
                echo $string;
            }
            ?>
        </section>
        <section>
            <h3>2.Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
            </h3>
            <p>Решение:</p>
            <?php
            // Исходная строка
            $str = "abcdeabcdeabcde";
            // Заменяем буквы 'a' на 1, 'b' на 2, 'c' на 3
            $str = str_replace(['a', 'b', 'c'], ['1', '2', '3'], $str);
            // Выводим измененную строку
            echo $str;
            ?>
        </section>
        <section>
            <h3>3.Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
            </h3>
            <p>Решение:</p>
            <?php
            // Исходная строка
            $str = 'abc abc abc';

            // Ищем последнее вхождение буквы 'b'
            $last_b_position = strrpos($str, 'b');

            // Выводим позицию последней буквы 'b'
            echo "Позиция последней буквы 'b': $last_b_position";
            ?>
        </section>
        <section>
            <h3>4.Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный
                элемент массива.
            </h3>
            <p>Решение:</p>
            <?php
            // Исходная строка
            $str = 'html css php';

            // Разбиваем строку на массив по пробелам
            $words = explode(' ', $str);

            // Выводим содержимое массива
            print_r($words);
            ?>
        </section>
        <section>
            <h3>5.В двух строках содержатся даты вида День-Месяц-Год (например, 10-02-2015). Определите количество дней
                между датами.

            </h3>
            <p>Решение:</p>
            <?php
            // Даты в формате День-Месяц-Год
            $date1 = '10-02-2015';
            $date2 = '15-02-2016';

            echo "Дата 1: $date1<br>";
            echo "Дата 2: $date2<br>";

            // Разбиваем строки на массивы, используя '-' как разделитель
            $date1_parts = explode('-', $date1);
            $date2_parts = explode('-', $date2);

            // Преобразуем каждый элемент массива в число
            $date1_day = (int)$date1_parts[0];
            $date1_month = (int)$date1_parts[1];
            $date1_year = (int)$date1_parts[2];

            $date2_day = (int)$date2_parts[0];
            $date2_month = (int)$date2_parts[1];
            $date2_year = (int)$date2_parts[2];

            // Преобразуем каждую дату в количество секунд с начала эпохи Unix
            $date1_timestamp = mktime(0, 0, 0, $date1_month, $date1_day, $date1_year);
            $date2_timestamp = mktime(0, 0, 0, $date2_month, $date2_day, $date2_year);

            // Вычисляем разницу в днях
            $days_difference = abs(($date2_timestamp - $date1_timestamp) / (60 * 60 * 24));

            // Вывод результата
            echo "Количество дней между датами: $days_difference дней";
            ?>
        </section>
    </section>
</main>
