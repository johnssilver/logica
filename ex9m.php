<?php

$m = array();
$i = 0;
$n = 0;
$total = 0;

for ($i = 0; $i < 3; $i++) {
  for ($n = 0; $n < 4; $n++) {
    $m[$i][$n] = 0;
  }
}
for ($i = 0; $i < 3; $i++) {
  for ($n = 0; $n < 4; $n++) {
    echo "Digite um valor";
    $m[$i][$n] = readline();
  }
}
for ($i = 0; $i < 3; $i++) {
  for ($n = 0; $n < 4; $n++) {
    if (($m [$i][$n] % 2) == 0) {
       $total = $total + $m[$i][$n];
    }
  }
}
for ($i = 0; $i < 3; $i++) {
  for ($n = 0; $n < 4; $n++) {
    if (($m [$i][$n] % 2) <> 0) {
       $total = $total / $m[$i][$n];
    }
  }
}
echo "A soma total é:";
echo $total;

?>    