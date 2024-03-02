<?
/* Задание 4. Создайте форму генерации ссылки с параметром:
   * Создайте форму и в ней добавьте поле со списком выбора – Лаб1, Лаб2, Лаб3, Лаб4
   * При нажатии на кнопку должно быть сформирована ссылка следующего вида: phpcourse.php?l=3, 
     где 3 – это номер выбранной лабораторной работы.
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?= $_SERVER["PHP_SELF"] ?>" method="GET">
    <label for="lab-works">Лабораторные работы:</label>
    <select id="lab-works" name="l">
     <option value="">--Выберите лабораторную работу--</option>
      <option value="1">Лаб1</option>
      <option value="2">Лаб2</option>
      <option value="3">Лаб3</option>
      <option value="4">Лаб4</option>
    </select>
    <p><button type="submit">Перейти</button></p>
  </form>
</body>

</html>