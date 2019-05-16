<?php

$m = array();
$a = 0;
$b = 0;

for ($a = 0; $a < 3; $a++) {
  for ($b = 0; $b < 3; $b++) {
    $m[$a][$b] = 0;
  }
}
for ($a = 0; $a < 3; $a++) {
  for ($b = 0; $b < 3; $b++) {
    $m[$a][$b] = readline();
  }
}
for ($a = 0; $a < 3; $a++) {
  for ($b = 0; $b < 3; $b++) {
    echo "O valor na posicao A";
    echo $a;
    echo "$b";
    echo $b;
    echo "é";
    echo $m[$a][$b];
  }
}
 
?>

