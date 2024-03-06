<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET/POST</title>
</head>
<body>
<form action = "#" method = POST> 
 <fieldset>
    <legend>Логин:</legend> 
    <input type = radio name = login value = windbrew checked> Windbrew 
    <input type = radio name = login value = jojogrel> JoJogrel
 </fieldset>
    <br>
    Пароль: 
    <input type = password name = passwd>
    <br> 
    <br>
    <input type = submit value = Войти>
<br>
<br>
    <?php 
    if ($_POST["login"] == "windbrew" && $_POST["passwd"] == "123") { 
        echo "Доступ к секретным страницам открыт"; 
    }
    elseif ($_POST["login"] == "jojogrel" && $_POST["passwd"] == "321") { 
        echo "Доступ к секретным страницам открыт";
    }
    else {
        echo "Неверный пароль";
    } 
    ?>  
</form>
<br>
<form action = "phpcourse.php">
<fieldset> 
    <input type = radio name = l value = 1 checked>Лаб1
    <input type = radio name = l value = 2>Лаб2
    <input type = radio name = l value = 3>Лаб3
    <input type = radio name = l value = 4>Лаб4
</fieldset>
<br>
    <input type = "submit" value = Принять>
</form>
<br>
<form = "#" method = POST>
<fieldset>
  <legend>
    <h2>Анкета "Ваш характер"</h2>
  </legend>
    <b>Ответьте "да" или "нет" на следующие вопросы:</b>
      <ol>
        <li>Считаете ли Вы, что у многих ваших знакомых хороший характер?
        <br>
           <input type = radio name = 1 value = yes checked>Да
           <input type = radio name = 1 value = no>Нет
        </li>
        <li>Раздражают ли Вас мелкие повседневные обязанности?
        <br>
           <input type = radio name = 2 value = yes checked>Да
           <input type = radio name = 2 value = no>Нет
        </li>
        <li>Верите ли Вы, что ваши друзья преданы Вам?
        <br>
           <input type = radio name = 3 value = yes checked>Да
           <input type = radio name = 3 value = no>Нет
        </li>
        <li>Неприятно ли Вам, когда незнакомый человек делает Вам замечание?
        <br>
           <input type = radio name = 4 value = yes checked>Да
           <input type = radio name = 4 value = no>Нет
        </li>
        <li>Способны ли Вы ударить собаку или кошку?
        <br>
           <input type = radio name = 5 value = yes checked>Да
           <input type = radio name = 5 value = no>Нет
        </li>
        <li>Часто ли Вы принимаете лекарства?
        <br>
           <input type = radio name = 6 value = yes checked>Да
           <input type = radio name = 6 value = no>Нет
        </li>
        <li>Часто ли Вы меняете магазин, в который ходите за продуктами?
        <br>
           <input type = radio name = 7 value = yes checked>Да
           <input type = radio name = 7 value = no>Нет
        </li>
        <li>Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?
        <br>
           <input type = radio name = 8 value = yes checked>Да
           <input type = radio name = 8 value = no>Нет
        </li>
        <li>Тяготят ли Вас общественные обязанности?
        <br>
           <input type = radio name = 9 value = yes checked>Да
           <input type = radio name = 9 value = no>Нет
        </li>
        <li>Способны ли Вы ждать более 5 минут, не проявляя беспокойства?
        <br>
           <input type = radio name = 10 value = yes checked>Да
           <input type = radio name = 10 value = no>Нет
        </li>
        <li>Часто ли Вам приходят в голову мысли о Вашей невезучести?
        <br>
           <input type = radio name = 11 value = yes checked>Да
           <input type = radio name = 11 value = no>Нет
        </li>
        <li>Сохранилась ли у Вас фигура по сравнению с прошлым?
        <br>
           <input type = radio name = 12 value = yes checked>Да
           <input type = radio name = 12 value = no>Нет
        </li>
        <li>Можете ли Вы с улыбкой воспринимать подтрунивание друзей?
        <br>
           <input type = radio name = 13 value = yes checked>Да
           <input type = radio name = 13 value = no>Нет
        </li>
        <li>Нравится ли Вам семейная жизнь?
        <br>
           <input type = radio name = 14 value = yes checked>Да
           <input type = radio name = 14 value = no>Нет
        </li>
        <li>Злопамятны ли Вы?
        <br>
           <input type = radio name = 15 value = yes checked>Да
           <input type = radio name = 15 value = no>Нет
        </li>
        <li>Находите ли Вы, что стоит погода, типичная для данного времени года?
        <br>
           <input type = radio name = 16 value = yes checked>Да
           <input type = radio name = 16 value = no>Нет
        </li>
        <li>Раздражает ли Вас современная живопись?
        <br>
           <input type = radio name = 17 value = yes checked>Да
           <input type = radio name = 17 value = no>Нет
        </li>
        <li>Надоедает ли Вам присутствие чужих детей в доме более одного часа?
        <br>
           <input type = radio name = 18 value = yes checked>Да
           <input type = radio name = 18 value = no>Нет
        </li>
        <li>Случается ли Вам с утра быть в плохом настроении?
        <br>
           <input type = radio name = 19 value = yes checked>Да
           <input type = radio name = 19 value = no>Нет
        </li>
     </ol>
     <input type = "submit" value = Отправить>
</fieldset>
<br>
<br>
<?php
$i = 0;
$arr = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19'];
foreach ($arr as $key) {
    if ($_POST[$key] == "yes" && in_array($key, ['3', '9', '10', '13', '14', '19'])) {
        $i += 1;
    }
    if ($_POST[$key] == "no" && in_array($key, ['1', '2', '4', '5', '6', '7', '8', '11', '12', '15', '16', '17', '18'])) {
        $i += 1;
    }
}
echo "Сумма баллов: " . $i . "<br>";
if ($i > 15) {
    echo $_POST["name"] . "У вас покладистый характер";
}
elseif ($i >= 8 && $i <= 15) {
    echo $_POST["name"] . "Вы не лишены недостатков, но с вами можно ладить";
}
else {
    echo $_POST["name"] . "Вашим друзьям можно посочувствовать";
}
?>
</form>
</body>
</html>