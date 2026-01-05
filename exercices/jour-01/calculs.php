<?php 

$priceExcludingTax = 100;
$vat = 20;
$quantity = 3;

$priceIncludingTax = $priceExcludingTax * (1 + $vat / 100);

$totalPrice = $priceIncludingTax * $quantity;

echo "Montant de la TVA : " . ($priceIncludingTax - $priceExcludingTax) * $quantity . " €. <br />
Prix TTC unitaire : " . $priceIncludingTax . " €. <br />
Prix total de la commande : " . $totalPrice . " €.";

?>