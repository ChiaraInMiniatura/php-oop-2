<!-- L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. -->
<?php
class Utenti{
  public $nome;
  public $cognome;
  public $n_carta;
  public $scadenza_carta;

  public function __construct($_nome, $_cognome,$_n_carta, $_scadenza_carta )
  {
    $this-> nome = $_nome;
    $this-> cognome = $_cognome;
    $this-> n_carta = $_n_carta;
    $this-> scadenza_carta = $_scadenza_carta;
  }

}


?>