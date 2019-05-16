<?php

$m = array();
$i = 0;
$r = 0;
$total = 0;

for ($i = 0; $i < 3; $i++) {
  for ($r = 0; $r < 4; $r++) {
    $m[$i][$r] = 0;
  }
}
for ($i = 0; $i < 3; $i++) {
  for ($r = 0; $r < 4; $r++) {
    $m[$i][$r] = readline();
  }
}
for ($i = 0; $i < 3; $i++) {
  for ($r = 0; $r < 4; $r++) {
    if (($m [$i][$r] % 2) <> 0) {
       $total = $total + $m[$i][$r];
    }
  }
}
echo "A soma total é:";
echo $total;

?>    