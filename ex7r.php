<?php

$t = array();
$cad = array();
$p = 0;

for ($p= 0; $p < 4; $p++) {
    $t ["nome"] = " ";
    $t ["preço"] = 0;
    $t ["quantidade"] = 0;
}
for ($p = 0; $p < 4; $p++) {
    echo "Digite o nome do produto:";
    $t ["nome"] = readline();
    echo "Digite o preço do produto:";
    $t ["preço"] = readline();
    echo "Digite a quantidade de produtos:";
    $t ["quantidade"] = readline();
    $cad[$p] = $t;
}
for ($p = 0; $p < 4; $p++) {
    echo "nome do produto:";
    echo $cad[$p]["nome"];
    echo "preço do produto:";
    echo $cad[$p]["preço"];
    echo "quantidade de produtos:";
    echo $cad[$p]["quantidade"];
}

?>