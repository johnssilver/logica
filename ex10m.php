<?php

$m = array();
$i = 0;
$j = 0;

for ($i = 0; $i < 3; $i++) {
  for ($j = 0; $j < 4; $j++) {
    $m[$i][$j] = 0;
  }
}
for ($i = 0; $i < 3; $i++) {
  for ($j = 0; $j < 4; $j++) {
    if (($m[$i][$j] % 2) == 0) {
      echo "Digite a tecla OITO!"
      $m[$i][$j] = readline();
    } else if (($m[$i][$j] % 2) <> 0) {
      echo "Digite a tecla TRÊS!";
      $m[$i][$j] = readline();
    } else {
      echo "Digite ZERO!";
      $m[$i][$j] = readline();
  }
}

?>    