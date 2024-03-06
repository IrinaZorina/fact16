<?php
session_start();
$_SESSION ['question3'] = $_POST ['question3'];
print_r($_SESSION);
$count = 0;
if($_SESSION['question1']==2){
    $count++;
}
if($_SESSION['question2']==4){
    $count++;
}
if($_SESSION['question3']==6){
    $count++;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" contents="html, css, information">
    <title>About Me</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>
        Количество правильных ответов: <?=$count?><br>
        1+1=<?=$_SESSION ['question1']?><br>
        2+2=<?=$_SESSION ['question2']?><br>
        3+3=<?=$_SESSION ['question3']?><br>
    </h1>
</body>
</html>