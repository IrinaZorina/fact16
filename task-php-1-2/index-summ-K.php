<?php

$summ = 0;

for ($K = 1; $K <= 10; $K++){
  if ($K % 2 == 0) {
    $summ = $summ + $K;
  }
}

echo $summ;