<?php

function formatPrice($amount, $currency = "€", $decimals = 2) {
    echo number_format($amount, $decimals, '.', '') . " " . $currency;
}

formatPrice(99.999);
formatPrice(99.999, "$");
formatPrice(99.999, "€", 0);