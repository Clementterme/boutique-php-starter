<?php

function isInStock($stock) {
    if($stock > 0) {
        return true;
    } else {
        return false;
    }
}

function isOnSale($discount) {
    if($discount > 0) {
        return true;
    } else {
        return false;
    }
}

$dateAdded = "2025-12-11";

function isNew($dateAdded) {
    $daysSince = (time() - strtotime($dateAdded)) / 86400;
    if($daysSince < 30) {
        return true;
    } else {
        return false;
    }
}

function canOrder($stock, $quantity) {
    if($stock >= $quantity) {
        return true;
    } else {
        return false;
    }
}


if (canOrder(1, 2)) {
    echo "La fonction retourne true";
} else {
    echo "La fonction retourne false";
}