<?php
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";
    move_uploaded_file($_FILES['avatar']['tmp_name'],"./upload/".$_FILES['avatar']['name']);
    // if(empty($_FILES)){
    //     $upload_dir = "./upload/".rand(0000000000,99999999).".jpg";
    //     move_uploaded_file($_FILES['avatar']['tmp_name'],$upload_dir);
    // }
    
    // foreach ($_FILES["avatar"]["error"] as $key => $error) {
    //     if ($error == UPLOAD_ERR_OK) {
    //         $tmp_name = $_FILES["avatar"]["tmp_name"][$key];
    //         // basename() может предотвратить атаку на файловую систему;
    //         // может быть целесообразным дополнительно проверить имя файла
    //         $name = basename($_FILES["avatar"]["name"][$key]);
    //         move_uploaded_file($tmp_name, "$uploads_dir/$name");
    //     }
        
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=formdevice-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
       
       <p>файл: <input type="file" name="avatar"></p>
       <button type="submit">Отправить</button>
    </form>
</body>
</html>