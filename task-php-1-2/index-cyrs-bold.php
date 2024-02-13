<html>

<body>
    <?php

    for ($a = 1; $a <= 50; $a++) {
      if ($a % 3 == 0) {
        echo "<i>$a</i>\n";
      }
      elseif ($a % 5 == 0) {
        echo  "<i><b>$a</b></i>\n";
      }
      else{
        echo "$a\n";
      }
    }

    ?>
</body>

</html>