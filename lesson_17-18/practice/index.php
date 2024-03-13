<?
require_once 'dbconn.php';

$mysqli = DB::getInstance();

// Передача

if (isset($_POST['submit'])) {
  $name = $mysqli->real_escape_string($_POST['customer-name']);
  $age = intval($mysqli->real_escape_string($_POST['age']));
  $city = isset($_POST['city_id']) ? intval($mysqli->real_escape_string($_POST['city_id'])) : 9999;

  $insert = $mysqli->prepare("INSERT INTO persons (name, age, city_id) VALUES (?, ?, ?)");
  $insert->bind_param("sii", $name, $age, $city);
  $insert->execute();
  $mysqli->close();

  echo "Данные переданы.";
}

// Получение

// $select = $mysqli->query("SELECT * FROM persons");
// $table = $select->fetch_all(MYSQLI_ASSOC);
// $mysqli->close();

// $output = array_map(fn ($tuple) => print_r(
//   $tuple['id'] . " " .
//   $tuple['name'] . " " .
//   $tuple['age'] . " " .
//   $tuple['city_id'] .
//   "<br>"), $table);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
    <p>
      <label for="customer-name">Введите свое имя:</label>
      <input type="text" id="customer-name" name="customer-name">
    </p>
    <p>
      <label for="age">Введите свой возраст:</label>
      <input type="text" id="age" name="age">
    </p>
    <p>
      <label for="city_id">Ваш город:</label>
      <select id="city_id" name="city_id">
        <option disabled selected>--Выберите город--</option>
        <option value="1">Магнитогорск</option>
        <option value="2">Екатеринбург</option>
        <option value="3">Рейкьявик</option>
      </select>
    </p>
    <input style="display: block; margin-bottom: 5px;" type="submit" name="submit" value="Отправить">
  </form>
</body>

</html>