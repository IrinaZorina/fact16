<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    
</head>
<body>
    <?php
        require_once('header.php');
    ?>
     <h3 style= "color: black;">Задача 1</h3> 
    <!-- Дана последовательность элементов от 1 до 30. 
    Необходимо вывести на экран числа, кратные 2. Каждое число должно быть с новой строки. -->
    <?php
         for ($i = 1; $i<=30; $i++) {
                if ($i % 2 == 0 ) {
                    echo $i . "<br> " ;
                }
            }
    ?>
    <h3 style= "color: black;">Задача 2</h3>
    <?php
        for($j = 1; $j<= 50; $j++ ) {
            if ($j % 3 == 0){
                echo "<i> $j </i>";
            }
            elseif ($j % 5 == 0) {
                echo "<strong> $j </strong>";
            }
        }
    ?>
    <?php
    //     echo "<h3 style= 'color: black;'>Задача 4</h3>";
    //     $sum = 0;
    //     $count = 0;
    //     for ($i= 1; $k = 1; $sum <10; $i++; $k++) { 
    //         $sum += $i / $k;
    //         echo $sum . "<br/>";
    //         $count++;

    //  }
    echo "<h3 style= 'color: black;'>Задача 4</h3>";
        $sum = 0;
        $count = 0;
        $i = $k = 1;
        while ($sum < 10){
            $sum += $i / $k;
            echo $sum . "<br>";
            $i += 5;
            $k++;
            $count ++;
        }
        echo "Нужно сложить $count элементов";
    ?>
    <h3 style="color: black;">Задание из видео1</h3>
    <?php
            $a = mt_rand(1,100);
            $b = mt_rand(1, 200);
            $c = mt_rand(1, 10);
            if($a < $b ) {
                for($i = $a; $i <$b; $i++){
                    if($i%$c==0){
                        echo "Числа кратные $i кратные $c"  . "</br>";
                    }
                }
            }
    ?>
    <?php
            echo "<h3 style= 'color: black;'>Задача 3</h3>";
            $pi = 0;
            $t = 0.01;
            $s = 1;
            $d = 1;
            $count = 0;
            while(abs($pi - M_PI)>=$t){
                $pi += $s * (4/$d);
                $s *=-1;
                $d += 2;
                $count++;

            }
            echo "Минимальное кол-во слагаемых - $count";
    ?>
    
</body>
</html>