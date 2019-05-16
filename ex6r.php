<?php

$g = array();
$cad = array();
$n = 0;

for ($n= 0; $n < 3; $n++) {
    $g ["titulo"] = " ";
    $g ["desenvolvedora"] = " ";
    $g ["indicativo"] = " ";
    $g ["lançamento"] = 0;
    $g ["gênero"] = " ";
}
for ($n = 0; $n < 3; $n++) {
    echo "Digite o titulo do jogo:";
    $g ["titulo"] = readline();
    echo "Digite o nome da desenvolvedora:";
    $g ["desenvolvedora"] = readline();
    echo "Digite para qual público é indicado este jogo:";
    $g ["indicativo"] = readline();
    echo "Digite a data de lançamento do jogo:";
    $g ["lançamento"] = readline();
    echo "Digite qual o gênero do jogo:";
    $g ["gênero"] = readline();
    $cad[$n] = $g;
}
for ($n = 0; $n < 3; $n++) {
    echo "titulo do jogo:";
    echo $cad[$n]["titulo"];
    echo "desenvolvedora do jogo:";
    echo $cad[$n]["desenvoledora"];
    echo "indicativo do jogo:";
    echo $cad[$n]["indicativo"];
    echo "lançamento do jogo:";
    echo $cad[$n]["lançamento"];
    echo "gênero do jogo:";
    echo $cad[$n]["gênero"];
}

?>
