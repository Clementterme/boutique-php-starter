<?php

include "Product.php";

$produit1 = new Product(1, "Produit 1", "Description du produit 1", 5, 20, "Catégorie 1");
$produit2 = new Product(2, "Produit 2", "Description du produit 2", 10, 15, "Catégorie 2");
$produit3 = new Product(3, "Produit 3", "Description du produit 3", 15, 10, "Catégorie 3");
$produit4 = new Product(4, "Produit 4", "Description du produit 4", 20, 5, "Catégorie 4");
$produit5 = new Product(5, "Produit 5", "Description du produit 5", 25, 0, "Catégorie 5");

$produits = [$produit1, $produit2, $produit3, $produit4, $produit5];
$total = 0;
$totalStock = 0;

foreach ($produits as $produit) {
    $total = $total + $produit->getPrix();
    $totalStock = $totalStock + $produit->getStock();
    echo $produit->display() . "<br>";
}

echo $total;
echo $totalStock;

