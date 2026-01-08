<?php

$products = [
    ["name" => "T-shirt Manches Longues", "price" => 19.99, "stock" => 41, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true],
    ["name" => "T-shirt Manches Courtes", "price" => 18.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false],
    ["name" => "Jean Délavé", "price" => 59.99, "stock" => 46, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true],
    ["name" => "Jean Noir", "price" => 49.99, "stock" => 84, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false],
    ["name" => "Pull Laine", "price" => 64.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true],
    ["name" => "Ceinture Fourrure", "price" => 17.99, "stock" => 90, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false],
    ["name" => "Ceinture Cuir", "price" => 34.99, "stock" => 78, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true],
    ["name" => "Montre Bracelet Cuir", "price" => 189.99, "stock" => 45, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false],
    ["name" => "Montre Bracelet Metal", "price" => 149.99, "stock" => 0, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true],
    ["name" => "Lunettes Teintées", "price" => 99.99, "stock" => 15, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false],
];

foreach($products as $product) {

?>

<style>
        .productAvailable {
            color: green;
        }

        .productUnavailable {
            color: red;
        }
</style>

<div class="product<?= $product["stock"] > 0 ? "Available" : "Unavailable" ?>">
    <h3><?= $product["name"] ?> <?= $product["onSale"] ? "🔥 PROMO <s>" . $product["price"] . "</s> " . number_format($product["price"] * 0.8, 2) : $product["price"] ?> €</h3>
    <!-- etc. -->
</div>

<?php    
}
?>

