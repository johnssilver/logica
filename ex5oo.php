<?php

class Veiculo {
   private $marca;
   private $cor; 
   function setMarca($marca) {
      $this ->marca = $marca;
   }
   function getMarca() {
      return $this ->marca;
   }
   function setCor($cor) {
      $this ->cor = $cor;
   }
   function getCor() {
      return $this ->cor;
   }
}
class Moto Extends Veiculo {
   private $rodas;
   function __construct($rodas) {
      $this ->rodas = $rodas;
   }
}
class Carro Extends Veiculo {
   private $rodas;
   function __construct($rodas) {
      $this ->rodas = $rodas;
   }
}


$play = array();
$play[0] = new Veiculo();
$play[0] -> setMarca();
$play[0] -> setCor();

$play[1] = new Moto();
$play[1] -> setMarca();
$play[1] -> setCor();

$play[2] = new Carro();
$play[2] -> setMarca();
$play[2] -> setCor();

?>