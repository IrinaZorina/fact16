<?php
// Проверяем, было ли отправлено имя анкетируемого
if(isset($_POST['name'])) {
    // Получаем ответы на вопросы
    $answers = array();
    // Устанавливаем значения по умолчанию на "да"
    $answers[] = isset($_POST['q1']) ? $_POST['q1'] : 'yes';
    $answers[] = isset($_POST['q2']) ? $_POST['q2'] : 'yes';
    $answers[] = isset($_POST['q3']) ? $_POST['q3'] : 'yes';
    $answers[] = isset($_POST['q4']) ? $_POST['q4'] : 'yes';
    $answers[] = isset($_POST['q5']) ? $_POST['q5'] : 'yes';
    $answers[] = isset($_POST['q6']) ? $_POST['q6'] : 'yes';
    $answers[] = isset($_POST['q7']) ? $_POST['q7'] : 'yes';
    $answers[] = isset($_POST['q8']) ? $_POST['q8'] : 'yes';
    $answers[] = isset($_POST['q9']) ? $_POST['q9'] : 'yes';
    $answers[] = isset($_POST['q10']) ? $_POST['q10'] : 'yes';
    $answers[] = isset($_POST['q11']) ? $_POST['q11'] : 'yes';
    $answers[] = isset($_POST['q12']) ? $_POST['q12'] : 'yes';
    $answers[] = isset($_POST['q13']) ? $_POST['q13'] : 'yes';
    $answers[] = isset($_POST['q14']) ? $_POST['q14'] : 'yes';
    $answers[] = isset($_POST['q15']) ? $_POST['q15'] : 'yes';
    $answers[] = isset($_POST['q16']) ? $_POST['q16'] : 'yes';
    $answers[] = isset($_POST['q17']) ? $_POST['q17'] : 'yes';
    $answers[] = isset($_POST['q18']) ? $_POST['q18'] : 'yes';
    $answers[] = isset($_POST['q19']) ? $_POST['q19'] : 'yes';

    // Считаем баллы
    $score = 0;
    // Добавляем 1 балл за ответ "да" в соответствующих вопросах
    $score += in_array($answers[2], ['yes']) ? 1 : 0; // Вопрос 3
    $score += in_array($answers[8], ['yes']) ? 1 : 0; // Вопрос 9
    $score += in_array($answers[9], ['yes']) ? 1 : 0; // Вопрос 10
    $score += in_array($answers[12], ['yes']) ? 1 : 0; // Вопрос 13
    $score += in_array($answers[13], ['yes']) ? 1 : 0; // Вопрос 14
    $score += in_array($answers[18], ['yes']) ? 1 : 0; // Вопрос 19

    // Добавляем 1 балл за ответ "нет" в соответствующих вопросах
    $score += in_array($answers[0], ['no']) ? 1 : 0; // Вопрос 1
    $score += in_array($answers[1], ['no']) ? 1 : 0; // Вопрос 2
    $score += in_array($answers[3], ['no']) ? 1 : 0; // Вопрос 4
    $score += in_array($answers[4], ['no']) ? 1 : 0; // Вопрос 5
    $score += in_array($answers[5], ['no']) ? 1 : 0; // Вопрос 6
    $score += in_array($answers[6], ['no']) ? 1 : 0; // Вопрос 7
    $score += in_array($answers[7], ['no']) ? 1 : 0; // Вопрос 8
    $score += in_array($answers[10], ['no']) ? 1 : 0; // Вопрос 11
    $score += in_array($answers[11], ['no']) ? 1 : 0; // Вопрос 12
    $score += in_array($answers[14], ['no']) ? 1 : 0; // Вопрос 15
    $score += in_array($answers[15], ['no']) ? 1 : 0; // Вопрос 16
    $score += in_array($answers[16], ['no']) ? 1 : 0; // Вопрос 17
    $score += in_array($answers[17], ['no']) ? 1 : 0; // Вопрос 18

    // Определяем результат анкетирования
    if ($score > 15) {
        $result = "У Вас покладистый характер";
    } elseif ($score >= 8 && $score <= 15) {
        $result = "Вы не лишены недостатков, но с вами можно ладить";
    } else {
        $result = "Вашим друзьям можно посочувствовать";
    }

    // Выводим результат
    echo "Результаты анкетирования:<br>";
    echo "Имя анкетируемого: " . $_POST['name'] . "<br>";
    echo "Оценка: " . $score . "<br>";
    echo "Результат: " . $result;
} else {
    echo "Ошибка: Имя анкетируемого не было отправлено.";
}

