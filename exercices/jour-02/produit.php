<?php

$product = ["name" => "biere", "description" => "biere blonde haute fermentation", "price" => 4.99, "stock" => 28, "category" => "boisson", "brand" => "Leffe"];

?>

<div>

Nom : <?= $product["name"] ?> </br>
Description : <?= $product["description"] ?> </br>
Prix : <?= $product["price"] ?> </br>
Stock : <?= $product["stock"] ?> </br>
Catégorie : <?= $product["category"] ?> </br>
Marque : <?= $product["brand"] ?>

</div>

<?php 

$product["dateAdded"] = "06/01/2026";

// var_dump($product["dateAdded"]);

$product["price"] = $product["price"] * 0.9;

var_dump($product["price"]);

// Si on accède à une clé qui n'existe pas celà va afficher "NULL"
