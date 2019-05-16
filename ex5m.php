<?php

$m = array();
$i = 0;
$j = 0;
$total = 0;

for ($i = 0; $i < 2; $i++) {
  for ($j = 0; $j < 2; $j++) {
    $m[$i][$j] = 0;
  }
}
for ($i = 0; $i < 2; $i++) {
  for ($j = 0; $j < 2; $j++) {
    $m[$i][$j] = readline();
  }
}
for ($i = 0; $i < 2; $i++) {
  for ($j = 0; $j < 2; $j++) {
    $total = $total * $m[$i][$j];
  }
}
echo "A multiplicação dos valores é:";
echo $total;
$total = 0;

for ($i = 0; $i < 2; $i++) {
  $total = $total + $m[$i][$i];
}
echo "A soma da diagonal é:";
echo $total;

?>    