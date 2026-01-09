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

?>

<!-- Afficher dans un fichier HTML -->

<?php

$products = [
    ["name" => "T-shirt Manches Longues", "price" => 19.99, "stock" => 41, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    ["name" => "T-shirt Manches Courtes", "price" => 18.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    ["name" => "Jean Délavé", "price" => 59.99, "stock" => 46, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
    ["name" => "Jean Noir", "price" => 49.99, "stock" => 84, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    ["name" => "Pull Laine", "price" => 64.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    ["name" => "Ceinture Fourrure", "price" => 17.99, "stock" => 3, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    ["name" => "Ceinture Cuir", "price" => 34.99, "stock" => 78, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    ["name" => "Montre Bracelet Cuir", "price" => 189.99, "stock" => 45, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    ["name" => "Montre Bracelet Metal", "price" => 149.99, "stock" => 0, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
    ["name" => "Lunettes Teintées", "price" => 99.99, "stock" => 15, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
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

    <?php

$inStock = 0;
$onSale = 0;
$outOfStock = 0;

foreach ($products as $product) {
    if ($product["stock"] > 0) $inStock++; else $outOfStock++;
    if ($product["onSale"] == true) $onSale++;
}

echo "<p>Nombre de produits en stock : " . $inStock . "</p>";
echo "<p>Nombre de produits en promo : " . $onSale . "</p>";
echo "<p>Nombre de produits en rupture : " . $outOfStock . "</p>";

?>

    <div class="grille">
        <?php foreach ($products as $product): ?>
            <div class="produit">
                
                <?php if($product["new"] == true) {
                    echo displayBadge("NOUVEAU", "green");
                } elseif($product["discount"] > 0) {
                    echo "<span style='background-color: lightblue'>PROMO -" . $product["discount"] . "%</span>";
                } elseif($product["stock"] < 5 && $product["stock"] > 0) {
                    echo displayBadge("DERNIERS", "orange");
                }

                ?>

                <?= $product["image"] . "</br>" . $product["name"] . "</br>" . displayPrice($product["price"], $product["discount"]) . " €</br>";
                echo displayStock($product["stock"]);
                 ?>
                 <?= $product["stock"] > 0 ? "<button>Ajouter au panier</button>" : "<button disabled>Ajouter au panier</button>" ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>