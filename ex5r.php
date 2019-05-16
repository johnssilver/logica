<?php

$f = array();
$cad = array();
$e = 0;

for ($e = 0; $e < 2; $e++) {
    $f ["titulo"] = " ";
    $f ["gênero"] = " ";
    $f ["lançamento"] = 0;
    $f ["produtora"] = " ";
}
for ($e = 0; $e < 2; $e++) {
    echo "Digite o titulo do filme:";
    $f ["titulo"] = readline();
    echo "Digite o gênero do filme:";
    $f ["gênero"] = readline();
    echo "Digite a data de lançamento do filme:";
    $f ["lançamento"] = readline();
    echo "Digite o nome da produtora:";
    $f ["produtora"] = readline();
    $cad[$e] = $f;
}

?>
