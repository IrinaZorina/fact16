<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['time']) && isset($_SESSION)){
    $_SESSION['time'] = date("H:i:s");
} else{
    echo date("H:i:s");
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
    <h1>Время: <?=date("H:i:s") ?></h1>
</body>
</html>