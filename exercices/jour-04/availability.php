<?php

$stock = 24;
$active = true;
$promoEndDate = "2026-12-31";

if($stock > 0 && $active == true) {
    echo "Available";
} else {
    echo "Unavailable";
}

if(strtotime(date("Y-m-d")) < strtotime($promoEndDate)) {
    echo "On sale";
} 

// else {
//     echo "Not on sale";
// }

// echo strtotime(date("Y-m-d"));
// echo strtotime($promoEndDate);

