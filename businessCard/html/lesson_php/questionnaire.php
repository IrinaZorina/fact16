<?
session_start();
$last = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : "";
setcookie('lastPage', $last, time() + 3600);
include "../inc/getPostdz/functions.php";
countQuestion();
logOut();
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <link rel="stylesheet" href="../../assets/style/style.css" />
    <? require "../inc/inc_font/linkFont.php"; ?>
  </head>
  <?php require "../inc/inc_lk_F_H/header.php"; ?>
  
  <body>
    <div class="container">
    <h1>Анкета</h1>
    <form action="questionnaire.php" method="post">

      <p>Ваше имя: <input type="text" name="name"></p>
      <h4>Вопрос №-1 Считаете ли Вы, что у многих ваших знакомых хороший характер?</h4>
      <input type="radio" name="yesNo1" value="yes" checked>Yes
      <input type="radio" name="yesNo1" value="no">No
      <h4>Вопрос №-2 Раздражают ли Вас мелкие повседневные обязанности?</h4>
      <input type="radio" name="yesNo2" value="yes" checked>Yes
      <input type="radio" name="yesNo2" value="no">No
      <h4>Вопрос №-3 Верите ли Вы, что ваши друзья преданы Вам?</h4>
      <input type="radio" name="yesNo3" value="yes" checked>Yes
      <input type="radio" name="yesNo3" value="no">No
      <h4>Вопрос №-4 Неприятно ли Вам, когда незнакомый человек делает Вам замечание?</h4>
      <input type="radio" name="yesNo4" value="yes" checked>Yes
      <input type="radio" name="yesNo4" value="no">No
      <h4>Вопрос №-5 Способны ли Вы ударить собаку или кошку?</h4>
      <input type="radio" name="yesNo5" value="yes" checked>Yes
      <input type="radio" name="yesNo5" value="no">No
      <h4>Вопрос №-6 Часто ли Вы принимаете лекарства?</h4>
      <input type="radio" name="yesNo6" value="yes" checked>Yes
      <input type="radio" name="yesNo6" value="no">No
      <h4>Вопрос №-7 Часто ли Вы меняете магазин, в который ходите за продуктами?</h4>
      <input type="radio" name="yesNo7" value="yes" checked>Yes
      <input type="radio" name="yesNo7" value="no">No
      <h4>Вопрос №-8 Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?</h4>
      <input type="radio" name="yesNo8" value="yes" checked>Yes
      <input type="radio" name="yesNo8" value="no">No
      <h4>Вопрос №-9 Тяготят ли Вас общественные обязанности?</h4>
      <input type="radio" name="yesNo9" value="yes" checked>yes
      <input type="radio" name="yesNo9" value="no">No
      <h4>Вопрос №-10 Способны ли Вы ждать более 5 минут, не проявляя беспокойства?</h4>
      <input type="radio" name="yesNo10" value="yes" checked>Yes
      <input type="radio" name="yesNo10" value="no">No
      <h4>Вопрос №-11 Часто ли Вам приходят в голову мысли о Вашей невезучести?</h4>
      <input type="radio" name="yesNo11" value="yes" checked>Yes
      <input type="radio" name="yesNo11" value="no">No
      <h4>Вопрос №-12 Сохранилась ли у Вас фигура по сравнению с прошлым?</h4>
      <input type="radio" name="yesNo12" value="yes" checked>Yes
      <input type="radio" name="yesNo12" value="no">No
      <h4>Вопрос №-13 Можете ли Вы с улыбкой воспринимать подтрунивание друзей?</h4>
      <input type="radio" name="yesNo13" value="yes" checked>yes
      <input type="radio" name="yesNo13" value="no">No
      <h4>Вопрос №-14 Нравится ли Вам семейная жизнь?</h4>
      <input type="radio" name="yesNo14" value="yes" checked>Yes
      <input type="radio" name="yesNo14" value="no">No
      <h4>Вопрос №-15 Злопамятны ли Вы?</h4>
      <input type="radio" name="yesNo15" value="yes" checked>Yes
      <input type="radio" name="yesNo15" value="no">No
      <h4>Вопрос №-16 Находите ли Вы, что стоит погода, типичная для данного времени года?</h4>
      <input type="radio" name="yesNo16" value="yes" checked>Yes
      <input type="radio" name="yesNo16" value="no">No
      <h4>Вопрос №-17 Случается ли Вам с утра быть в плохом настроении?</h4>
      <input type="radio" name="yesNo17" value="yes" checked>Yes
      <input type="radio" name="yesNo17" value="no">No
      <h4>Вопрос №-18 Раздражает ли Вас современная живопись?</h4>
      <input type="radio" name="yesNo18" value="yes" checked>Yes
      <input type="radio" name="yesNo18" value="no">No
      <h4>Вопрос №-19 Надоедает ли Вам присутствие чужих детей в доме более одного часа?</h4>
      <input type="radio" name="yesNo19" value="yes" checked>Yes
      <input type="radio" name="yesNo19" value="no">No
      <hr>
      <input type="submit" name="submit" value="submit">
      <input type="submit" name="reset" value="reset">
      <input type="submit" name="logout" value="logout">
      <a id="myLink" href="select.php">Select</a>
    </form>
  </div>
</body>
<? require "../inc/inc_lk_F_H/footer.php"; ?>

</html>