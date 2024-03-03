
<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Поле с паролем</title>
 </head>
 <body>
 <form method="post">
    <label for="login">Выберите логин:</label>
  <select  name="login">
    <option > afanasenko</option>
    <option >Ivanov</option>
    <option >Petrov</option>
  </select>
   <p><strong>Пароль:</strong> 
    <input type="password" maxlength="15" size="15" name="password"></p>

  </form>
 </body>
</html>




<?php


// print_r($_POST);

if ($_POST ["login"]=="afanasenko" && $_POST["password"]=="123")
 { echo"Доступ к секретным данным открыт открыт<br>";
    require('hm3.php');
}

else{
    echo "Неправильный логин или пароль";
}
    
?>