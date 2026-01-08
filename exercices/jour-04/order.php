<?php

$status = "standby";

switch ($status) {
    case "standby":
        echo '<span style="color: orange">⏳ Commande en attente de validation</span>';
        break;
    case "validated":
        echo '<span style="color: green">Commande validée</span>';
        break;
    case "shipped":
        echo '<span style="color: blue">Commande expédiée</span>';
        break;
    case "delivered":
        echo '<span style="color: blue">Commande livrée</span>';
        break;
    case "canceled":
        echo '<span style="color: red">Commande annulée</span>';
        break;
}

echo match ($status) {
    "standby" => '<span style="color: orange">⏳ Commande en attente de validation</span>',
    "validated" => '<span style="color: green">Commande validée</span>',
    "shipped" => '<span style="color: blue">Commande expédiée</span>',
    "delivered" => '<span style="color: blue">Commande livrée</span>',
    "canceled" => '<span style="color: red">Commande annulée</span>',
};