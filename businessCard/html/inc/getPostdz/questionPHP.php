<?
if (isset($_POST["name"])) {
  $name = $_POST["name"];
  $sum = 0;
  for ($i = 1; $i <= 19; $i++) {
    switch ($i) {
      case 3:
      case 9:
      case 10:
      case 13:
      case 14:
      case 19:
        if ($_POST["yesNo$i"] == "yes") {
          $sum++;
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
        if ($_POST["yesNo$i"] == "no") {
          $sum++;
        }
      default:
        break;
    }
  }

  echo "$name, ваше количество баллов $sum<br>";
  if ($sum > 15) {
    echo "У Вас покладистый характер.";
  } elseif ($sum >= 8 && $sum <= 15) {
    echo "Вы не лишены недостатков, но с вами можно ладить.";
  } elseif ($sum < 8) {
    echo "Вашим друзьям можно посочувствовать.";
  }
}
