
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <form  method="post">
            <div class="login__label-block">
                <label for="">Логин</label>
            </div>
            <div class="login__input-block">
                <input type="text" name="login">
            </div>
            <div class="password__label-block">
                <label for="">Пароль</label>
            </div>
            <div class="login__input-block">
                <input type="text" name="password">
            </div>
            <div class="btn__block">
                <button type="submit">
                    Отправить
                </button>
            </div>
        </form>
    </div>
    <?php
    $login = $_POST['login'];
    $pass = $_POST['password'];
   
    if( $login == 'login1' && $pass == '1234'){
        echo 'Доступ к секретным страницам открыт';
    }
    elseif($login != 'login1' && $pass != '1234'){
        echo 'Доступ закрыт';
    }
    ?>
</body>
</html>