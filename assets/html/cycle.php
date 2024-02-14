<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles.css">
    
</head>
<body>

<?php include "../../assets/html/header.html";?>


    <div style = "width:100px; background: lightblue; border: 2px solid grey; margin:0 auto; padding:45px; box-sizing: border-box; ">
    <?php 

    
    for($i=5;$i<=13;$i++){
    echo "<span>$i</span> <br>";

    }
    
    
    ?>

</div>



<div style = "width:150px; background: #009999; border: 2px solid grey; margin:50px auto; box-sizing: content-box; ">
    
    <?php 

      $num=1000;
      $itera = 0;
      while($num>50){
        $num = $num/2;
        $itera++;
        
      }
    echo  "<span> Получилось число = $num </span> <br>";
    echo  " <span>Итераций - $itera </span>";


    $num1=1000;
      $itera1 = 0;
    for($i=0;$num1>50;$i++){
        $num1 = $num1/2;
        $itera1++;
       
    }
    echo  "<span> Получилось число = $num1 </span> <br>";
    echo  " <span>Итераций - $itera1 </span>";
  

    ?>
    
</div>

<div style = "width:150px; background:#996600; border: 2px solid grey; margin:50px auto; box-sizing: content-box; ">

<?php    
$x = mt_rand(0,10);
$b = ["1","2","3","4","5","6","7","8","9","10"];
echo "$x <br>";
$length = count($b);
echo "$length <br>";
print_r(array_slice($b,0,$x));
?>
</div>
 


<?php include "../../assets/html/footer.html";?>
  
</body>
</html>