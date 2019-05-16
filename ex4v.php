<?php
$v = array();
$i = 0;
$total = 0;
for ($i = 0; $i < 15; $i++) {
     $v[$i] = 0;
}
for ($i = 0; $i < 15; $i++) {
     echo "Digite um valor:";
     $v[$i] = readline();
}
for ($i = 0; $i < 15; $i++) {
      echo "O valor de V na posicao";
      echo $i;
      echo "e:";
      echo $v[$i] . PHP_EOL;
}
for ($i = 0; $i < 15; $i++) {
     $total = $total + $v[$i];
}
echo "A soma de todos os valores do vetor é" . PHP_EOL;
echo $total . PHP_EOL;

?>
