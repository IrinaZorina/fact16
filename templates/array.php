<main>
<h1>Массивы</h1>
<section>
    <h2>Слайд 15</h2>
    <section>
        <h3>1.Дан массив с элементами 50, 45, 40, 35, 30. Найдите сумму элементов этого массива. Запишите ее в
            переменную
            $result.
        </h3>
        <p>Решение:</p>
        <?php
        $arr = [50, 45, 40, 35, 30];
        $result = 0;

        foreach ($arr as $value) {
            $result += $value;
        }
        echo $result;
        ?>
    </section>
    <section>
        <h3>2.Дан массив, заполненный случайными числами. Необходимо вывести массив, заполненный случайными числами.
            После чего вывести данный массив в противоположном порядке.
        </h3>
        <p>Решение:</p>
        <?php
        $originalArray = [];
        for ($i = 0; $i < 10; $i++) {
            $originalArray[] = mt_rand(1, 100);
        }


        echo "Исходный массив:\n";
        print_r($originalArray);


        $reversedArray = [];
        $count = count($originalArray);
        for ($i = $count - 1; $i >= 0; $i--) {
            $reversedArray[] = $originalArray[$i];
        }


        echo "\nМассив в обратном порядке:\n";
        print_r($reversedArray);
        ?>
    </section>
    <section>
        <h3>3.Создать массив, заполненный названиями картинок, например, 1.png. Необходимо случайным образом выбирать
            название картинки из массива и выводить ее на экран.
        </h3>
        <p>Решение:</p>
        <?php
        $imageNames = ['1.png', '2.png', '3.png', '4.png', '5.png'];

        // Выбираем случайное имя изображения
        $randomIndex = mt_rand(0, count($imageNames) - 1);
        $randomImageName = $imageNames[$randomIndex];

        // Формируем полный путь к изображению
        $imagePath = "assets/media/arrays/$randomImageName"; // Замените "path/to/images/" на реальный путь к вашим изображениям

        echo "<p>Случайная картинка: $randomImageName</p>";
        ?>
        <!-- Отображаем изображение -->
        <img src="<?php echo $imagePath; ?>" alt="Случайное изображение">
    </section>
    <section>
        <h3>4.Дано N действительных случайных чисел в диапазоне от -100 до 100. Найти минимальное положительное число и
            максимальное отрицательное число.

        </h3>
        <p>Решение:</p>
        <?php
        $minPositive = null;
        $maxNegative = null;

        while ($minPositive === null || $maxNegative === null) {
            $number = mt_rand(-100, 100);
            if ($number > 0 && ($minPositive === null || $number < $minPositive)) {
                $minPositive = $number;
            }

            if ($number < 0 && ($maxNegative === null || $number > $maxNegative)) {
                $maxNegative = $number;
            }
        }


        echo "Минимальное положительное число: $minPositive<br>";
        echo "Максимальное отрицательное число: $maxNegative";
        ?>
    </section>
</section>
</main>
