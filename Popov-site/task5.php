<? include 'header.php'; ?>
<main class="main">
    <div class="container">
        <h2 class="center m-50">Дополнительные задачи</h2>
        <section class="arrays">
            <div class="task">
                <h3>Задача 8 слайд 17</h3>
                <p>Создать двумерный массив произвольной длины, содержащий строковые значения. Необходимо вывести все элементы массива, начинающиеся на А. </p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $myArr = [
                    ["Apple", "Orange", "Banana"],
                    ["Avocado", "Apricot", "Pear"],
                    ["Almond", "Anise", "Pineapple"]
                    ];

                    foreach ($myArr as $subArr) {
                    foreach ($subArr as $value) {
                    if (strtoupper(substr($value, 0, 1)) == "A") {
                    echo $value . "<br>";
                    }
                    }
                    } </p>
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $myArr = [
                        ["Apple", "Orange", "Banana"],
                        ["Avocado", "Apricot", "Pear"],
                        ["Almond", "Anise", "Pineapple"]
                    ];

                    foreach ($myArr as $subArr) {
                        foreach ($subArr as $value) {
                            if (strtoupper(substr($value, 0, 1)) == "A") {
                                echo $value . "<br>";
                            }
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="task">
                <h3>Задача 9 слайд 17</h3>
                <p>Создать двумерный массив, состоящий из чисел. Необходимо вывести общее количество элементов массива и количество элементов массива для каждого измерения.</p>
            </div>
            <div class="solution">
                <h3>Решение</h3>
                <p>
                    $myArr = [
                    [1, 2, 3],
                    [4, 5, 6],
                    [7, 8, 9],
                    [9, 10, 11]
                    ];

                    $totalElements = count($myArr, COUNT_RECURSIVE);
                    echo "Общее количество элементов массива: " . $totalElements . "<br>";

                    $firstCount = count($myArr);
                    echo "Количество элементов в первом измерении: " . $firstCount . "<br>";

                    $secondCount = count($myArr[0]); // Предполагаем, что вложенные массивы имеют одинаковую длину
                    echo "Количество элементов во втором измерении: " . $secondCount . "<br>";
            </div>
            <div class="answer">
                <h3>Ответ</h3>
                <p>
                    <?
                    $myArr = [
                        [1, 2, 3],
                        [4, 5, 6],
                        [7, 8, 9],
                        [9, 10, 11]
                    ];

                    $totalElements = count($myArr, COUNT_RECURSIVE);
                    echo "Общее количество элементов массива: " . $totalElements . "<br>";

                    $firstCount = count($myArr);
                    echo "Количество элементов в первом измерении: " . $firstCount . "<br>";

                    $secondCount = count($myArr[0]);  // Предполагаем, что вложенные массивы имеют одинаковую длину
                    echo "Количество элементов во втором измерении: " . $secondCount . "<br>";
                    ?>
                </p>
            </div>

        </section>
    </div>
</main>
<? include 'footer.php'; ?>