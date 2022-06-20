<?php
class Prodotti{
  public $nome_pr;
  public $prezzo;
  public $codice;


  public function __construct($_nome_pr, $_prezzo ,$_codice)
  {
    $this-> nome_pr = $_nome_pr;
    $this-> prezzo = $_prezzo;
    $this-> codice = $_codice;
    
  }

};


?>