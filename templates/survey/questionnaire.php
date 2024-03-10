<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета</title>
</head>
<body>
<h2>Анкета</h2>
<form action="processing_of_the_questionnaire.php" method="post">
    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" required><br>
    <label for="q1">1. Вам нравится программирование на PHP?</label>
    <input type="radio" name="q1" value="yes" checked> Да
    <input type="radio" name="q1" value="no"> Нет<br>

    <label for="q2">2. Вы имеете опыт работы с базами данных?</label>
    <input type="radio" name="q2" value="yes" checked> Да
    <input type="radio" name="q2" value="no"> Нет<br>

    <label for="q3">3. Легко ли вы запоминаете новую информацию?</label>
    <input type="radio" name="q3" value="yes" checked> Да
    <input type="radio" name="q3" value="no"> Нет<br>

    <label for="q4">4. Часто ли вы участвуете в различных мероприятиях и вечеринках?</label>
    <input type="radio" name="q4" value="yes" checked> Да
    <input type="radio" name="q4" value="no"> Нет<br>

    <label for="q5">5. Вам нравится общаться с новыми людьми?</label>
    <input type="radio" name="q5" value="yes" checked> Да
    <input type="radio" name="q5" value="no"> Нет<br>

    <label for="q6">6. Легко ли вы заводите новые знакомства?</label>
    <input type="radio" name="q6" value="yes" checked> Да
    <input type="radio" name="q6" value="no"> Нет<br>

    <label for="q7">7. Вы обладаете большим кругом друзей?</label>
    <input type="radio" name="q7" value="yes" checked> Да
    <input type="radio" name="q7" value="no"> Нет<br>

    <label for="q8">8. Легко ли вам поддерживать отношения с друзьями на расстоянии?</label>
    <input type="radio" name="q8" value="yes" checked> Да
    <input type="radio" name="q8" value="no"> Нет<br>

    <label for="q9">9. У вас есть близкие друзья?</label>
    <input type="radio" name="q9" value="yes" checked> Да
    <input type="radio" name="q9" value="no"> Нет<br>

    <label for="q10">10. Легко ли вы доверяете людям?</label>
    <input type="radio" name="q10" value="yes" checked> Да
    <input type="radio" name="q10" value="no"> Нет<br>

    <label for="q11">11. Вы склонны ревновать к своему партнеру/партнерше?</label>
    <input type="radio" name="q11" value="yes" checked> Да
    <input type="radio" name="q11" value="no"> Нет<br>

    <label for="q12">12. Как вы относитесь к идеи долгосрочных отношений?</label>
    <input type="radio" name="q12" value="yes" checked> Да
    <input type="radio" name="q12" value="no"> Нет<br>

    <label for="q13">13. У вас были серьезные отношения?</label>
    <input type="radio" name="q13" value="yes" checked> Да
    <input type="radio" name="q13" value="no"> Нет<br>

    <label for="q14">14. Вы верите в любовь с первого взгляда?</label>
    <input type="radio" name="q14" value="yes" checked> Да
    <input type="radio" name="q14" value="no"> Нет<br>

    <label for="q15">15. Легко ли вы прощаете измену в отношениях?</label>
    <input type="radio" name="q15" value="yes" checked> Да
    <input type="radio" name="q15" value="no"> Нет<br>

    <label for="q16">16. Как вы относитесь к разрывам в отношениях?</label>
    <input type="radio" name="q16" value="yes" checked> Да
    <input type="radio" name="q16" value="no"> Нет<br>

    <label for="q17">17. Считаете ли вы, что нужно быть друзьями перед тем, как начать отношения?</label>
    <input type="radio" name="q17" value="yes" checked> Да
    <input type="radio" name="q17" value="no"> Нет<br>

    <label for="q18">18. Вы готовы поддерживать партнера в трудных жизненных ситуациях?</label>
    <input type="radio" name="q18" value="yes" checked> Да
    <input type="radio" name="q18" value="no"> Нет<br>

    <label for="q19">19. Как вы относитесь к идее быть лучшими друзьями с партнером?</label>
    <input type="radio" name="q19" value="yes" checked> Да
    <input type="radio" name="q19" value="no"> Нет<br>

    <input type="submit" value="Отправить">
</form>

</body>
</html>
