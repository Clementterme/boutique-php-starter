<?php

function calculateVAT($priceExcludingTax, $rate) {
    return $priceExcludingTax * $rate / 100;
}

function calculateIncludingTax($priceExcludingTax,$rate) {
    return $priceExcludingTax * (($rate / 100) +1);
}

function calculateDiscount($price, $percentage) {
    return $price * (1 - ($percentage / 100));
}

$prixHT = 100;
$TVA = 20;
$remise = 10;

$prixFinal = calculateDiscount(calculateIncludingTax($prixHT, $TVA), $remise);

?>

<p>Prix HT : <?= $prixHT ?></p>
<p>TVA : <?= calculateVAT($prixHT, $TVA) ?></p>
<p>Prix TTC : <?= calculateIncludingTax($prixHT, $TVA) ?></p>
<p>Remise : <?= $remise ?></p>
<p>Prix final : <?= $prixFinal ?></p>