<?php

$f = array();
$cad = array();
$e = 0;

for ($e = 0; $e < 2; $e++) {
    $f ["titulo"] = " ";
    $f ["g�nero"] = " ";
    $f ["lan�amento"] = 0;
    $f ["produtora"] = " ";
}
for ($e = 0; $e < 2; $e++) {
    echo "Digite o titulo do filme:";
    $f ["titulo"] = readline();
    echo "Digite o g�nero do filme:";
    $f ["g�nero"] = readline();
    echo "Digite a data de lan�amento do filme:";
    $f ["lan�amento"] = readline();
    echo "Digite o nome da produtora:";
    $f ["produtora"] = readline();
    $cad[$e] = $f;
}

?>
