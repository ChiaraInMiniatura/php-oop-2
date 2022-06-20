<?php
require_once __DIR__ . "/utenti.php";

class Registrati extends utenti{
    public $sconto;
    

    public function __construct($_nome,
                                $_cognome,
                                $_n_carta, 
                                $_scadenza_carta,
                                $_sconto){

        parent::__construct($_nome, $_cognome,$_n_carta, $_scadenza_carta );

        $this->sconto = $_sconto;
    }
}
?>