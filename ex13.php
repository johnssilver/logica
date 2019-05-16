<?php
$n = 0;
echo "Informe um valor:";
$n = readline();
if ($n > 10 and $n < 20) {
echo "Este valor é maior que 10 e menor que 20!";
} else if ($n >= 20 and $n < 30) {
echo "Este valor é maior/igual a 20 e menor que 30!";
} else if ($n >= 30 and $n < 40) {
echo "Este valor é maior/igual a 30 e menor que 40!";
} else {
echo "O valor está fora da faixa especificada!";
}
?>




