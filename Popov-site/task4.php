<? include 'header.php'; ?>
<main class="main">
    <div class="container">
        <h2 class="center m-50">Функции</h2>
        <section class="arrays">
            <div class="task">
                <h3>Задача 1 слайд 17</h3>
                <p>Создайте функцию, которая принимает одномерный массив и возвращает массив, заполненный случайными числами. </p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    function generateRandomArray($length)
                    {
                    $randomArray = [];
                    for ($i = 0; $i < $length; $i++) { $randomArray[]=rand(0, 100); } print_r($randomArray); return $randomArray; } generateRandomArray(10); </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    function generateRandomArray($length)
                    {
                        $randomArray = [];
                        for ($i = 0; $i < $length; $i++) {
                            $randomArray[] = rand(0, 100);
                        }
                        print_r($randomArray);
                        return $randomArray;
                    }
                    generateRandomArray(10);
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 2 слайд 17</h3>
                <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая определит количество слов строке.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    function countStr($string)
                    {
                    $words = explode(', ', $string);
                    return count($words);
                    }
                    $string = 'HTML, CSS, PHP, BITRIX';
                    $wordCount = countStr($string);
                    echo "Количество слов в строке: $wordCount";
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    function countStr($string)
                    {
                        $words = explode(', ', $string);
                        return count($words);
                    }
                    $string = 'HTML, CSS, PHP, BITRIX';
                    $wordCount = countStr($string);
                    echo "Количество слов в строке: $wordCount";
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 3 слайд 17</h3>
                <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выведет в обратном порядке буквы («XIRTIB ,PHP … »).</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    function reverseStr($string)
                    {
                    $characters = str_split($string);
                    $reversedCharacters = array_reverse($characters);
                    $reversedString = implode('', $reversedCharacters);
                    return $reversedString;
                    }
                    $string = 'HTML, CSS, PHP, BITRIX';
                    $reversedString = reverseStr($string);

                    echo "Исходная строка: $string";
                    echo "<br>";
                    echo "Перевернутая строка: $reversedString";
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    function reverseStr($string)
                    {
                        $characters = str_split($string);
                        $reversedCharacters = array_reverse($characters);
                        $reversedString = implode('', $reversedCharacters);
                        return $reversedString;
                    }
                    $string = 'HTML, CSS, PHP, BITRIX';
                    $reversedString = reverseStr($string);

                    echo "Исходная строка: $string";
                    echo "<br>";
                    echo "Перевернутая строка: $reversedString";
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 4 слайд 17</h3>
                <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит на экран длину строки.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    function stringLength($string)
                    {
                    $length = strlen($string);
                    return $length;
                    }
                    $string = 'HTML, CSS, PHP, BITRIX';
                    $length = stringLength($string);
                    echo "Исходная строка: $string";
                    echo "<br>";
                    echo "Длина строки: $length";
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    function stringLength($string)
                    {
                        $length = strlen($string);
                        return $length;
                    }
                    $string = 'HTML, CSS, PHP, BITRIX';
                    $length = stringLength($string);
                    echo "Исходная строка: $string";
                    echo "<br>";
                    echo "Длина строки: $length";
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 5 слайд 17</h3>
                <p>Дана строка «HTML, CSS, PHP, BITRIX». Написать функцию, которая выводит каждую букву на новую строку.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    function printWord($string)
                    {
                    $characters = str_split($string);
                    foreach ($characters as $character) {
                    if (ctype_alpha($character)) {
                    echo "$character <br>";
                    }
                    }
                    }
                    $string = 'HTML, CSS, PHP, BITRIX';
                    printWord($string);
                </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    function printWord($string)
                    {
                        $characters = str_split($string);
                        foreach ($characters as $character) {
                            if (ctype_alpha($character)) {
                                echo "$character <br>";
                            }
                        }
                    }
                    $string = 'HTML, CSS, PHP, BITRIX';
                    printWord($string);
                    ?>
                </p>
            </div>
        </section>
    </div>
</main>
<? include 'footer.php'; ?>