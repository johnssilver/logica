<?php

$p = array();
$cad = array();
$i = 0;

for ($i = 0; $i < 9; $i++) {
    $p ["nome"] = " ";
    $p ["sexo"] = " ";
    $p ["idade"] = 0;
}
for ($i = 0; $i < 9; $i++) {
    echo "Digite o nome: ";
    $p ["nome"] = readline();
    echo "Digite o sexo: ";
    $p ["sexo"] = readline();
    echo "Digite a idade: ";
    $p ["idade"] = readline();
    $cad[$i] = $p;
}
for ($i = 0; $i < 9; $i++) {
     if (($i % 2) == 0) {
        echo "nome da pessoa:";
        echo $cad[$i]["nome"] . PHP_EOL;
        echo "sexo da pessoa:";
        echo $cad[$i]["sexo"] . PHP_EOL;
        echo "idade da pessoa:";
        echo $cad[$i]["idade"] . PHP_EOL;

     } else {
        echo "Não possivel mostrar esse registro!" . PHP_EOL;
     }
}

?>
    
