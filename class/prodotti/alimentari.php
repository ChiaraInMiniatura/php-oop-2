<?php
require_once __DIR__ . "/prodotti.php";

class Alimentari extends prodotti{
    public $ingredienti;
    

    public function __construct($_nome_pr, $_prezzo ,$_codice, $_ingredienti){

        parent::__construct($_nome_pr, $_prezzo ,$_codice );

        $this->ingredienti = $_ingredienti;
    }
}
?>