<?php

$p = array();
$cad = array();
$u = 0;

for ($u = 0; $u < 9; $u++) {
    $p ["nome"] = " ";
    $p ["sexo"] = " ";
    $p ["idade"] = 0;
}
for ($u = 0; $u < 9; $u++) {
    echo "Digite o nome: ";
    $p ["nome"] = readline();
    echo "Digite o sexo: ";
    $p ["sexo"] = readline();
    echo "Digite a idade: ";
    $p ["idade"] = readline();
    $cad[$u] = $p;
}
for ($u = 0; $u < 9; $u++) {
     if (($u % 2) <> 0) {
        echo "nome da pessoa:";
        echo $cad[$u]["nome"] . PHP_EOL;
        echo "sexo da pessoa:";
        echo $cad[$u]["sexo"] . PHP_EOL;
        echo "idade da pessoa:";
        echo $cad[$u]["idade"] . PHP_EOL;
     } else {
        echo "Não possivel mostrar esse registro!" . PHP_EOL;
     }
}

?>
