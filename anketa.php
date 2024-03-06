<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<?php require_once 'inc/header.php' ?>
<body>
    <div style="text-align: center;"><h1>Анкета</h1></div>
    <form method="post">
        <label for="user">Введите ваше имя</label>
        <input type="text" name="user">
        <br>
        <br>
        <label for="q1">1. Ограничен ли ваш круг друзей?
        <br>
            <input type="radio" name="q1"  value="yes" checked>Да
            <input type="radio" name="q1" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q2">2. Легко ли вас вывести из себя?
        <br>
            <input type="radio" name="q2" value="yes" checked>Да
            <input type="radio" name="q2" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q3">3. Вы любите поговорить?
        <br>
            <input type="radio" name="q3" value="yes" checked>Да
            <input type="radio" name="q3" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q4">4. Тяжело ли вам проявлять терпимость по отношению к другим людям?
        <br>
            <input type="radio" name="q4" value="yes" checked>Да
            <input type="radio" name="q4" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q5">5. Вы ищите повод для ссоры первым?
        <br>
            <input type="radio" name="q5" value="yes" checked>Да
            <input type="radio" name="q5" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q6">6. Вы конфликтный человек?
        <br>
            <input type="radio" name="q6" value="yes" checked>Да
            <input type="radio" name="q6" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q7">7. Вы с трудом терпите недостатки других?
        <br>
            <input type="radio" name="q7" value="yes" checked>Да
            <input type="radio" name="q7" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q8">8. Вы можете долго злиться и обижаться?
        <br>
            <input type="radio" name="q8" value="yes" checked>Да
            <input type="radio" name="q8" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q9">9. Вы стараетесь избегать конфликтов?
        <br>
            <input type="radio" name="q9" value="yes" checked>Да
            <input type="radio" name="q9" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q10">10. Вы быстро адаптируетесь к новым условиям?
        <br>
            <input type="radio" name="q10" value="yes" checked>Да
            <input type="radio" name="q10" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q11">11. Вы всегда ищите в чём-то подвох?
        <br>
            <input type="radio" name="q11" value="yes" checked>Да
            <input type="radio" name="q11" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q12">12. Не любите рассказывать о себе , чаще скрываетесь.
        <br>
            <input type="radio" name="q12" value="yes" checked>Да
            <input type="radio" name="q12" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q13">13. Вы сдержанны?
        <br>
            <input type="radio" name="q13" value="yes" checked>Да
            <input type="radio" name="q13" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q14">14. Показываете ли вы свои эмоции?
        <br>
            <input type="radio" name="q14" value="yes" checked>Да
            <input type="radio" name="q14" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q15">15. Вы запросто можете рискнуть.
        <br>
            <input type="radio" name="q15" value="yes" checked>Да
            <input type="radio" name="q15" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q16">16. Вы обладаете высокой самооценкой?
        <br>
            <input type="radio" name="q16" value="yes" checked>Да
            <input type="radio" name="q16" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q17">17. Вы очень впечатлительны?
        <br>
            <input type="radio" name="q17" value="yes" checked>Да
            <input type="radio" name="q17" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q18">18. Свойственна ли вам резкая смена настроения?
        <br>
            <input type="radio" name="q18" value="yes" checked>Да
            <input type="radio" name="q18" value="no">Нет
        </label>
        <br>
        <br>
        <label for="q19">19. Вы говорите громко и энергично?
        <br>
            <input type="radio" name="q19" value="yes" checked>Да
            <input type="radio" name="q19" value="no">Нет
        </label>
        <br>
        <br>
        <button type="submit">Отправить</button>
    </form> 
</body>
</html>
<?php
if(isset($_POST["user"])) {
    $name = $_POST["user"];
    $scores = 0;
    for($i = 0; $i < 20; $i++){
        switch($i) {
            case 3:
            case 9:
            case 10:
            case 13:
            case 14:
            case 19:
                if($_POST["q$i"] == 'yes'){
                    $scores++;
                }
            case 1:
            case 2:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 11:
            case 12:
            case 15:
            case 16:
            case 17:
            case 18:
                if($_POST["q$i"] == 'no'){
                    $scores++;
                }
                break;
        }
    }
    echo "$name, Ваше количество баллов $scores<br>";
    if ($scores > 15) {
      echo "У Вас покладистый характер.";
    } elseif ($scores >= 8 && $scores <= 15) {
      echo "Вы не лишены недостатков, но с вами можно ладить.";
    } elseif ($scores < 8) {
      echo "Вашим друзьям можно посочувствовать.";
    }
}
?>
<?php require_once 'inc/footer.php' ?>