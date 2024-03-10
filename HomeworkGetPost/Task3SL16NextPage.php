<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        // echo '<br>';
        $count = 0;
        foreach ($_POST as $key => $value){
            if($key == 'ans3' || $key == 'ans9' || $key == 'ans10' || $key == 'ans13' || $key == 'ans14' || $key == 'ans19'){
                if ($value == 'yes'){
                    $count++;
                }
            }
            elseif($key == 'ans1' || $key == 'ans2' || $key == 'ans4' || $key == 'ans5' || $key == 'ans6' || $key == 'ans7' || $key == 'ans8' || $key == 'ans11' || $key == 'ans12' || $key == 'ans15' || $key == 'ans16' || $key == 'ans17' || $key == 'ans18'){
                if ($value == 'no'){
                    $count++;
                }
            }
            }

        
        echo 'Ваш результат составил: ' . '<b>'.$count.'</b>';
        echo '<br>';
        if ($count > 15){
            echo 'У вас покладистый характер.';
        }
        if (8 < $count && $count < 15){
            echo'Вы не лишены недостатков, но с вами можно ладить.';
        }
        if ($count < 8){
            echo'Вашим друзьям можно посочувствовать.';
        }

        ?>

        
    
</body>
</html>