<?php

  if (isset($_POST["username"]) && isset($_POST["userage"])) {
      
    $conn = new mysqli("localhost", "fact2", "123", "db_fact");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $name = $conn->real_escape_string($_POST["username"]);
    $age = $conn->real_escape_string($_POST["userage"]);
    $sql = "INSERT INTO person (name, age) VALUES ('$name', $age)";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <div>
      <label for="">Имя:
        <input type="text" name="username">
      </label>
      <label for="">Возраст:
        <input type="number" name="userage">
      </label>
      <button type="submit">Добавить</button>
    </div>
  </form>
</body>
</html>