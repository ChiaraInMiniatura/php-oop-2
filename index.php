<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->
<?php
  require_once __DIR__ .'/class/prodotti/prodotti.php';
  require_once __DIR__ .'/class/prodotti/alimentari.php';
  require_once __DIR__ .'/class/prodotti/giochi.php';
  require_once __DIR__.'/class/utenti/utenti.php';
  require_once __DIR__.'/class/utenti/registrati.php';
  

// utenti
$utente1 = new Utenti ("Harry", "Potter", 123456789, 12-12-2024);
$utente2 = new Registrati ("Hermione", "Granger", 123456789, 15-01-2025, 20);
$utente3 = new Utenti ("Ron", "Weasley", 123456789, 12-12-2021);

var_dump($utente1);
var_dump($utente2);
var_dump($utente3);

// prodotti
$prodotto1 = new Alimentari ("Animal Planet", 15, 123456789,"tonno, piselli e patate");
$prodotto2 = new Giochi ("bingoBongo", 10 , 123456789, "cane");
$prodotto3 = new Alimentari ("Animalia", 18 , 123456789, "manzo, carote e patate");

var_dump($prodotto1);
var_dump($prodotto2);
var_dump($prodotto3);

function prezzoScontato($prezzo, $sconto){
  $resoult = ($prezzo - ($prezzo* ($sconto/100)));
  return $resoult;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-OOP-2</title>
</head>
<body>
  <h1>PHP-OOP-2</h1>

  <h2>Ordine 1:</h2>
  <?php echo $utente2->nome ?>
  <?php echo $utente2->cognome ?>
  compra:
  <?php echo $prodotto1->nome ?>
  al prezzo di:
  <?php echo prezzoScontato($prodotto1->prezzo, $utente2->sconto) ?> €

  <h2>Ordine 2:</h2>
  <?php echo $utente1->nome ?>
  <?php echo $utente1->cognome ?>
  compra:
  <?php echo $prodotto1->nome ?>
  al prezzo di:
  <?php echo prezzoScontato($prodotto1->prezzo, $utente1->sconto) ?> €

                
  
</body>
</html>