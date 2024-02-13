<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <select>
    <option value="">1980
      <?php

      for ($year = 1981; $year <= 2024; $year++) {
        echo "<option>$year</option>";
      }

      ?>
    </option>

  </select>

</body>

</html>