<?php

$p = array();
$cad = array();
$i = 0;
$idade = 0;
$indice = 0;

for ($i = 0; $i < 3; $i++) {
    $p["nome"] = " ";
    $p["sexo"] = " ";
    $p["idade"] = 0;
}

for ($i = 0; $i < 3; $i++) {
    echo "Digite o nome: ";
    $p["nome"] = readline();
    echo "Digite o sexo: ";
    $p["sexo"] = readline();
    echo "Digite a idade: ";
    $p["idade"] = readline();

    if ($p["idade"] > $idade) {
       $idade = $p["idade"];
       $indice = $i;
    }

    $cad[$i] = $p;
}

echo "nome da pessoa: ";
echo $cad[$indice]["nome"] . PHP_EOL;
echo "sexo da pessoa: ";
echo $cad[$indice]["sexo"] . PHP_EOL;
echo "idade da pessoa: ";
echo $cad[$indice]["idade"] . PHP_EOL;

?>
    
