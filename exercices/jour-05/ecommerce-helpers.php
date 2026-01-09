<?php

function calculateIncludingTax($priceExcludingTax,$rate) {
    return $priceExcludingTax * (($rate / 100) +1);
}

function calculateDiscount($price, $percentage) {
    return $price * (1 - ($percentage / 100));
}

function calculateTotal(array $cart) {
    $total = 0;
    foreach($cart as $item) {
        $total = $total + $item["price"];
    }
    return $total;
}

function formatPrice($amount, $currency = "€", $decimals = 2) {
    echo number_format($amount, $decimals, '.', '') . " " . $currency;
}

function formatDate(string $date) {
    $parts = explode('/', $date);

    [$year, $month, $day] = $parts;

    $mois = [
        "01" => "janvier",
        "02" => "février",
        "03" => "mars",
        "04" => "avril",
        "05" => "mai",
        "06" => "juin",
        "07" => "juillet",
        "08" => "août",
        "09" => "septembre",
        "10" => "octobre",
        "11" => "novembre",
        "12" => "décembre",
    ];

    return $day . ' ' . $mois[$month] . ' ' . $year;
}

// echo formatDate("2024/11/15");