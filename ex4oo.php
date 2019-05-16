<?php

class aluno {
   private $nome;
   private $serie;
   function aluno ($nome, $serie) {
      $this ->nome = $nome;
      $this ->serie = $serie;
   }
   function setNome($nome) {
      $this ->nome = $nome;
   }
   function getNome() {
      return $this ->nome;
   }
   function setSerie($serie) {
      $this ->serie = $serie;
   }
   function getSerie() {
      return $this ->serie;
   }
}

$cad = array();
$cad[1] = new aluno();
$cad[1] -> setNome();
$cad[1] -> setSerie();

$cad[2] = new aluno();
$cad[2] -> setNome();
$cad[2] -> setSerie();

$cad[3] = new aluno();
$cad[3] -> setNome();
$cad[3] -> setSerie();

$cad[4] = new aluno();
$cad[4] -> setNome();
$cad[4] -> setSerie();

$cad[5] = new aluno();
$cad[5] -> setNome();
$cad[5] -> setSerie();

?>