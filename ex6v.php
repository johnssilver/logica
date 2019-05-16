<?php
$v = array();
$i = 0;
$mult = 1;
$soma = 0;

for ($i = 0; $i < 2; $i++) {
     $v[$i] = 0;
}

for ($i = 0; $i < 2; $i++) {
     echo "Digite um valor:";
     $v[$i] = readline();
}

for ($i = 0; $i < 2; $i++) {
     $mult = $mult * $v[$i];
     $soma = $soma + $v[$i];
}

echo "O resultado e:";
echo $mult / $soma . PHP_EOL;

?>

