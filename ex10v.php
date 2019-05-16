<?php
$v = array();
$i = 0;
for ($i = 0; $i < 10; $i++) {
     $v[$i] = 0;
}
for ($i = 0; $i < 10; $i++) {
     if (($v[$i]) % 2 == 0) {
        echo "Digite o numero oito!";
        $v[$i] = readline();
     } else if (($v[$i]) % 2 <> 0) {
        echo "Digite o numero três!";
        $v[$i] = readline();
     }
}

?>