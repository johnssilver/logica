<?php

$m = array();
$i = 0;
$j = 0;
$total = 0;

for ($i = 0; $i < 3; $i++) {
  for ($j = 0; $j < 3; $j++) {
    $m[$i][$j] = 0;
  }
}
for ($i = 0; $i < 3; $i++) {
  for ($j = 0; $j < 3; $j++) {
    $m[$i][$j] = readline();
  }
}
for ($i = 0; $i < 3; $i++) {
  for ($j = 0; $j < 3; $j++) {
    $total = $total + $m[$i][$j];
  }
}

echo "A soma total é:";
echo $total;

?>    