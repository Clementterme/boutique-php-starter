<?php

$products = [
    ["name" => "T-shirt Manches Longues", "price" => 19.99, "stock" => 41, "category" => "Vêtements"],
    ["name" => "T-shirt Manches Courtes", "price" => 18.99, "stock" => 0, "category" => "Vêtements"],
    ["name" => "Jean Délavé", "price" => 59.99, "stock" => 46, "category" => "Vêtements"],
    ["name" => "Jean Noir", "price" => 49.99, "stock" => 84, "category" => "Vêtements"],
    ["name" => "Pull Laine", "price" => 64.99, "stock" => 65, "category" => "Vêtements"],
    ["name" => "Ceinture Fourrure", "price" => 17.99, "stock" => 90, "category" => "Accessoires"],
    ["name" => "Ceinture Cuir", "price" => 34.99, "stock" => 78, "category" => "Accessoires"],
    ["name" => "Montre Bracelet Cuir", "price" => 189.99, "stock" => 45, "category" => "Accessoires"],
    ["name" => "Montre Bracelet Metal", "price" => 149.99, "stock" => 0, "category" => "Accessoires"],
    ["name" => "Lunettes Teintées", "price" => 99.99, "stock" => 15, "category" => "Accessoires"],
];

foreach($products as $product) {
    if ($product["stock"] == 0) {
        continue;
    } echo $product["name"];
    echo "</br>";
}

echo "</br>";

foreach($products as $product) {
    if ($product["price"] > 100) {
        break;
    } echo $product["name"];
    echo "</br>";
}

echo "</br>";

foreach($products as $product) {
    if ($product["stock"] == 0 || $product["price"] > 100) {
        continue;
    } echo $product["name"];
    echo "</br>";
}

?>