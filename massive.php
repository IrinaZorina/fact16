
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
        $arr3= ['img/mass_pict/dog1.jpeg', 'img/mass_pict/dog2.jpg', 'img/mass_pict/dog3.jpeg'];
        $rand_img = $arr3[mt_rand(0 , 2)];
        echo "<img src= $rand_img class='img_mass'>";
    ?>
    <h3 style="color:black">Задача 5</h3>
    <?php
     $marks = [
        ['math'=>5,'phisics'=>4,"chem"=>3, 'informatics'=> 5],
        ['math'=>4,'phisics'=>3,"chem"=>5, 'informatics'=> 5],
        ['math'=>3,'phisics'=>5,"chem"=>4, 'informatics'=> 5],
        ['math'=>5,'phisics'=>5,"chem"=>4, 'informatics'=> 5]
    ];
    $sums = ['math'=>0,'phisics'=>0,"chem"=>0, 'informatics'=> 0];
    $count = ['math'=>0,'phisics'=>0,"chem"=>0, 'informatics'=> 0];
    foreach ($marks as $mark ) {
        foreach($mark as $subj =>$value){
            $sums[$subj] += $value;
            $count[$subj]++;
        }
    }
    $average = [];
    foreach ($sums as $subject => $sum) {
        $average[$subject] = $sum / $count[$subject];
        # code...
    }
    foreach($average as $subject => $avg){
        echo "$subject : $avg". "<br>";
    }
    ?>
    <h3 style="color:black">Задача 6</h3>
    <?php
    $n = 10;
    $arr;
    for($i = 0; $i < $n; $i++ ) {
        $arr[] = mt_rand(-100, 100);
        echo "{$arr[$i]}";
    }
    $min = -100;
    $max = 100;

    for($i = 0; $i< $n; $i++){
        if($arr[$i]< 0 && $arr[$i] > $max){
            $max = $arr[$i];
        }
        if($arr[$i] > 0 && $arr[$i] < $min){
            $min = $arr[$i];
        }
    }
    echo "<br>min = $min; max = $max<br>";
    ?>

 

</body>
</html>