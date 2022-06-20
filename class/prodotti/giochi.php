<?php
require_once __DIR__ . "/prodotti.php";

class Giochi extends prodotti{
    public $tipo_animale;
    

    public function __construct($_nome_pr, $_prezzo ,$_codice, $_tipo_animale){

        parent::__construct($_nome_pr, $_prezzo ,$_codice );

        $this->tipo_animale = $_tipo_animale;
    }
}
?>