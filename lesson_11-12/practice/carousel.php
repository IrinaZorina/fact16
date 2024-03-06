<?
$imagesCount = iterator_count(new FilesystemIterator(__DIR__ . "/images"));
$image = isset($_GET['image']) ? $_GET['image'] : 1;
$back = basename($_SERVER["PHP_SELF"]) . "?image=" . $index = $image > 1 ? $image - 1 : $imagesCount;
$forward = basename($_SERVER["PHP_SELF"]) . "?image=" . $index = $image < $imagesCount ? $image + 1 : 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <img src="images/<?= $image ?>.png" alt="#">
  <a href=<?= $back ?>>Назад</a>
  <a href=<?= $forward ?>>Вперёд</a>
</body>

</html>