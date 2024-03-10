<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // var_dump($_POST['password']);
    if ($_POST['Login'] == 'User2' && $_POST['password'] == '12345'){
        echo '<h1>*Вам открыт доступ к секретным страницам!*</h1>';
    }
    else {
        echo "<h1>Добро пожаловать " . $_POST['Login'] . "!</h1>";
    }
    ?>
</body>
</html>