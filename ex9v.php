<?php
$v = array();
$i = 0;
$total = 0;
for ($i = 0; $i < 10; $i++) {
     $v[$i] = 0;
}
for ($i = 0; $i < 10; $i++) {
     echo "Digite um valor:";
     $v[$i] = readline();
}
for ($i = 0; $i < 10; $i++) {
     if (($v[$i]) % 2 == 0) {
        $total = $total + $v[$i];
     } 
}
for ($i = 0; $i < 10; $i++) {
     if (($v[$i]) % 2 <> 0) {
        $total = $total / $v[$i];
     } 
}
echo "O resultado final é:";
echo $total;

?>