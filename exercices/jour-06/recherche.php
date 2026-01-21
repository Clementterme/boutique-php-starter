<?php

$products = [
    1 => ["name" => "T-shirt Manches Longues", "price" => 19.99, "stock" => 41, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    2 => ["name" => "T-shirt Manches Courtes", "price" => 18.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    3 => ["name" => "Jean Délavé", "price" => 59.99, "stock" => 46, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
    4 => ["name" => "Jean Noir", "price" => 49.99, "stock" => 84, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    5 => ["name" => "Pull Laine", "price" => 64.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    6 => ["name" => "Ceinture Fourrure", "price" => 17.99, "stock" => 3, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    7 => ["name" => "Ceinture Cuir", "price" => 34.99, "stock" => 78, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    8 => ["name" => "Montre Bracelet Cuir", "price" => 189.99, "stock" => 45, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    9 => ["name" => "Montre Bracelet Metal", "price" => 149.99, "stock" => 0, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
    10 => ["name" => "Lunettes Teintées", "price" => 99.99, "stock" => 15, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
];

?>

<form method="GET" action="">
    <label for="search">Rechercher :</label>
    <input type="text" name="search" placeholder="Tapez ici..">
    <button type="submit">Rechercher</button>
</form>

<?php 

$search = $_GET["search"];
$result = 0;

if(empty($search)) {
    echo "";
} else {
    foreach($products as $product) {
    if (stripos($product["name"], $search) !== false) {
        $result = $result + 1;
        echo $product["name"] . " " . $product["price"] . " €<br>";
       }
    }
}

echo "</br>";
if($result != 0){
    if($result == 1) {
    echo $result . " produit trouvé";
    } else {
    echo $result . " produits trouvés";
    }
} else {
    echo "Aucun résultat";
}
