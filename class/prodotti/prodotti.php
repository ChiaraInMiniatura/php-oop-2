<?php
class Prodotti{
  public $nome;
  public $prezzo;
  public $codice;


  public function __construct($_nome, $_prezzo ,$_codice)
  {
    $this-> nome = $_nome;
    $this-> prezzo = $_prezzo;
    $this-> codice = $_codice;
    
  }

};


?>