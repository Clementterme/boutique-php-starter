<?php

$products = [
    ["name" => "T-shirt Manches Longues", "price" => 19.99, "stock" => 41, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200"],
    ["name" => "T-shirt Manches Courtes", "price" => 18.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200"],
    ["name" => "Jean Délavé", "price" => 59.99, "stock" => 46, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200"],
    ["name" => "Jean Noir", "price" => 49.99, "stock" => 84, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200"],
    ["name" => "Pull Laine", "price" => 64.99, "stock" => 65, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200"],
    ["name" => "Ceinture Fourrure", "price" => 17.99, "stock" => 90, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200"],
    ["name" => "Ceinture Cuir", "price" => 34.99, "stock" => 78, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200"],
    ["name" => "Montre Bracelet Cuir", "price" => 189.99, "stock" => 45, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200"],
    ["name" => "Montre Bracelet Metal", "price" => 149.99, "stock" => 0, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200"],
    ["name" => "Lunettes Teintées", "price" => 99.99, "stock" => 15, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200"],
];

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .grille { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
        .produit { border: 1px solid #ddd; padding: 15px; }
        .rupture { color: red; }
        .en-stock { color: green; }
    </style>
</head>
<body>
    <div class="grille">
        <?php foreach ($products as $product): ?>
            <div class="produit">
                <?= $product["image"] . "</br>" . $product["name"] . "</br>" . $product["price"] . " €</br>";
                if($product["stock"] > 0) {
                    echo "En stock";
                } else {
                        echo "Rupture";
                    }
                 ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>