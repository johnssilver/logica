<?php

$t = array();
$cad = array();
$p = 0;

for ($p= 0; $p < 4; $p++) {
    $t ["nome"] = " ";
    $t ["pre�o"] = 0;
    $t ["quantidade"] = 0;
}
for ($p = 0; $p < 4; $p++) {
    echo "Digite o nome do produto:";
    $t ["nome"] = readline();
    echo "Digite o pre�o do produto:";
    $t ["pre�o"] = readline();
    echo "Digite a quantidade de produtos:";
    $t ["quantidade"] = readline();
    $cad[$p] = $t;
}
for ($p = 0; $p < 4; $p++) {
    echo "nome do produto:";
    echo $cad[$p]["nome"];
    echo "pre�o do produto:";
    echo $cad[$p]["pre�o"];
    echo "quantidade de produtos:";
    echo $cad[$p]["quantidade"];
}

?>