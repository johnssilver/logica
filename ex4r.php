<?php

$p = array();
$cad = array();
$i = 0;

for ($i = 0; $i < 5; $i++) {
    $p ["nome"] = " ";
    $p ["sexo"] = " ";
    $p ["idade"] = 0;
    $p ["estadocivil"] = " ";
}
for ($i = 0; $i < 5; $i++) {
    echo "Digite o nome:";
    $p ["nome"] = readline();
    echo "Digite o sexo:";
    $p ["sexo"] = readline();
    echo "Digite a idade:";
    $p ["idade"] = readline();
    echo "Digite o estadocivil:";
    $p ["estadocivil"] = readline();
    $cad[$i] = $p;
}

?>
