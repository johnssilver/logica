<?php
$v = array();
$i = 0;
$total = 0;
for ($i = 0; $i < 20; $i++) {
     $v[$i] = 0;
}
for ($i = 0; $i < 20; $i++) {
     echo "Digite um valor:";
     $v[$i] = readline();
}
for ($i = 0; $i < 20; $i++) {
     if (($v[$i]) % 2 <> 0) {
        $total = $total + $v[$i];
     } 
}
echo "O resultado da soma dos numeros impares é:";
echo $total;

?>