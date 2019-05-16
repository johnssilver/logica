<?php
$v = array();
$i = 0;
$total = 1;
for ($i = 0; $i < 2; $i++) {
     $v[$i] = 0;
}
for ($i = 0; $i < 2; $i++) {
     echo "Digite um valor:";
     $v[$i] = readline();
}
for ($i = 0; $i < 2; $i++) {
     $total = $total * $v[$i];
}
echo "A multiplicao total e:";
echo $total;

?>
