<?php

function displayBadge($text, $color) {
    return '<span class="badge" style="background: ' . $color . '">  '. $text . '</span>';
}

// echo displayBadge("C'est tout rouge", "red");

function displayPrice($price, $discount = 0) {
    if($discount == 0) {
        return $price;
    } else {
        return "<s>" . $price . "</s> " . number_format($price * (1 - ($discount / 100)), 2, '.', '');
    }
}

// echo displayPrice(10, 1);

function displayStock($quantity) {
    if($quantity > 5) {
        return '<p style="color: green">En stock</p>';
    } elseif($quantity == 0) {
        return '<p style="color: red">Rupture</p>';
    } else {
        return '<p style="color: orange">Plus beaucoup en stock</p>';
    }
}

// echo displayStock(5);