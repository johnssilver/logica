<?php

$m = array();
$i = 0;
$j = 0;

for ($i = 0; $i < 4; $i++) {
  for ($j = 0; $j < 4; j++) {
    $m[$i] = array();
    $m[$i][$j] = 0;
  }
}
for ($i = 0; $i < 4; $i++) {
  for ($j = 0; $j < 4; j++) {
    $m[$i][$j] = readline();
  }
}

?>