<?
if (!empty($_FILES)) {
  // echo "<pre>";
  // print_r($_FILES);
  // echo "<pre>";

  for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
    move_uploaded_file($_FILES['files']['tmp_name'][$i], "./images/" .
      (new DateTimeImmutable("Asia/Yekaterinburg"))->setTimestamp(time())->format("d-m-Y_H-i-s_") .
      $_FILES['files']['name'][$i]);
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <p>Введите свое имя: </p>
    <p><input type="text" name="name"></p>
    <p><input type="file" name="files[]" multiple></p>
    <p><input type="submit"></p>
  </form>
</body>

</html>