<?php
$a = 0;
$b = 0;
echo "Insira o valor de a:";
$a = readline();
echo "Insira o valor de b:";
$b = readline();
if ($a > $b) {
   echo "O valor de A � maior que o valor de b!";
} else if ($b > $a) {
   echo "O valor de B � maior que o valor de a!";
} else {
   echo "os valores s�o iguais!";
}

?>
