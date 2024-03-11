<?php
//$str = fopen('read.txt','r');
//echo $str;
//echo "<br>";
//$str2 = fread($str, 1);
//echo $str2;
//echo "<br>";
//while ($str2 != null){
  //$str2 = fread($str, 1);
  //echo $str2;
  //if($str2 == "\n" ||$str2 == "\r"){
    //continue;
  //}
  //echo "<br>";
//}
//$str = file('read.txt');
//print_r($str);
//echo "<br>";
//$str2 = file_get_contents('read.txt');
//echo $str2;
//echo "<br>";
//$str2 .= "!!!";
//$str2 = file_put_contents('read.txt', $str2);
//echo "<pre>";
//var_dump($_FILES);
//echo "</pre>";
//move_uploaded_file($_FILES["avatar"]["tmp_name"], __DIR__ . "/upload/" . $_FILES["avatar"]["name"]);







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
  <form method="post" enctype="multipart/form-data">
    Логин: <input type="text" name="login"> <br>
    Файл: <input type="file" name="avatar">
    <input type="submit">
  </form>
</body>
</html>



