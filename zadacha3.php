<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $i=10;
            echo "Введенное число (i): $i<br/>";
            if($i>10){ //валидация
                echo "Введите корректное значение (не болльше 10)";
            }
            else{
                $pull=10-$i;
                $chetchik=0;
                while ($chetchik<=$pull){
                    echo " $chetchik";
                    $chetchik++;
                }
            }
          
        ?>
    </form>
</body>
</html>