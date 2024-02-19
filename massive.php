
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        .img_mass {
            width: 200px;
          height: 200px;  
        }
    </style>
</head>
<body>

    <?php
        require_once('header.php');
    ?>
    <h3 style="color:black">Задача 1</h3>
    <?php

        $arr = [50, 45, 40, 35,30];
        $sum = 0;
        for($i = 0; $i<count($arr); $i++){
            $sum = $arr[$i] + $sum;

            
        }
        echo $sum;

    ?>
    <h3 style="color:black">Задача 2</h3>
    <?php
        $arr2 = [];

        for ($i = 0; $i < 10; $i++) {
            $arr2[$i] = mt_rand(0, 100);
            echo $arr2[$i] . ' ';
        }

        for ($i = count($arr2)-1; $i>0; $i--){
            echo  $arr2[$i] . '<br>';
        }
    ?>
    <h3 style="color:black">Задача 3</h3>
    <?php
        $arr3= ['img/mass_pict/dog1.jpeg', 'img/mass_pict/dog2.jpeg', 'img/mass_pict/dog3.jpeg'];
        $rand_img = $arr3[mt_rand(1 , 10)];
        echo "<img src= '$rand_img' class='img_mass'>";
    ?>


 

</body>
</html>