<?php

$g = array();
$cad = array();
$n = 0;

for ($n= 0; $n < 3; $n++) {
    $g ["titulo"] = " ";
    $g ["desenvolvedora"] = " ";
    $g ["indicativo"] = " ";
    $g ["lan�amento"] = 0;
    $g ["g�nero"] = " ";
}
for ($n = 0; $n < 3; $n++) {
    echo "Digite o titulo do jogo:";
    $g ["titulo"] = readline();
    echo "Digite o nome da desenvolvedora:";
    $g ["desenvolvedora"] = readline();
    echo "Digite para qual p�blico � indicado este jogo:";
    $g ["indicativo"] = readline();
    echo "Digite a data de lan�amento do jogo:";
    $g ["lan�amento"] = readline();
    echo "Digite qual o g�nero do jogo:";
    $g ["g�nero"] = readline();
    $cad[$n] = $g;
}
for ($n = 0; $n < 3; $n++) {
    echo "titulo do jogo:";
    echo $cad[$n]["titulo"];
    echo "desenvolvedora do jogo:";
    echo $cad[$n]["desenvoledora"];
    echo "indicativo do jogo:";
    echo $cad[$n]["indicativo"];
    echo "lan�amento do jogo:";
    echo $cad[$n]["lan�amento"];
    echo "g�nero do jogo:";
    echo $cad[$n]["g�nero"];
}

?>
