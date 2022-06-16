<?php 
require_once "./classes/Product.php";
require_once "./classes/Food.php";
require_once "./classes/Card.php";
require_once "./traits/Origin.php";
$card = new Card(rand(1000000000000000, 9999999999999999), strtotime("01 September 2023"), 500);

?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titolo -->
    <title>E-commerce For Animals</title>
</head>
<body>
    <h1>
        E-commerce per animali 
    </h1>
    <?php
        echo "<p> Your balance: " . $card->getBalance() ."</p>";
        var_dump ($card);
    ?>
    <p> Crea il tuo profilo </p>
    <form action="">
        <label for="name">Nome</label>
        <input id="name" type="text">
        <label for="lastname">Cognome</label>
        <input id="lastname" type="text">
        <button>Crea</button>
    </form>
    <?php
        $tuna = new Food("Tonno per gatti", "50", "4", new DateTime('2026-01-01T15:03:01.012345Z') );
        
        echo "<p> il prodotto " . $tuna->name . (($tuna -> isAvailable()) ? "" : " non ") . " è possibile acquistarlo </p>";
        $tuna->setOrigins("Italy", new DateTime('2020-01-01'));
        echo "Ed è di origine " . $tuna->country . " inscatolato il " . date_format($tuna->date, 'd-m-Y');
    ?>

</body>
</html>