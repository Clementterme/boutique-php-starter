<?php

$products = [
    1 => ["name" => "T-shirt Manches Longues", "price" => 19.99, "stock" => 41, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    2 => ["name" => "T-shirt Classic", "price" => 17.99, "stock" => 61, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    3 => ["name" => "T-shirt Manches Courtes", "price" => 18.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    4 => ["name" => "Jean Délavé", "price" => 59.99, "stock" => 46, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
    5 => ["name" => "Jean Noir", "price" => 49.99, "stock" => 84, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    6 => ["name" => "Jean Bleu", "price" => 54.99, "stock" => 26, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    7 => ["name" => "Pull Laine", "price" => 64.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    8 => ["name" => "Ceinture Classic", "price" => 14.99, "stock" => 34, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    9 => ["name" => "Ceinture Fourrure", "price" => 17.99, "stock" => 3, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    10 => ["name" => "Ceinture Cuir", "price" => 34.99, "stock" => 78, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    11 => ["name" => "Ceinture Cuir Noir", "price" => 42.99, "stock" => 15, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    12 => ["name" => "Montre Bracelet Cuir", "price" => 189.99, "stock" => 45, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    13 => ["name" => "Montre Bracelet Classic", "price" => 109.99, "stock" => 5, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    14 => ["name" => "Montre Bracelet Metal", "price" => 149.99, "stock" => 0, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
    15 => ["name" => "Montre Or", "price" => 399.99, "stock" => 8, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
    16 => ["name" => "Lunettes Teintées", "price" => 99.99, "stock" => 15, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
];

?>

<form method="GET" action="">

    <label for="category">Catégorie :</label>
    <select name="category">
        <option value="">Toutes</option>
        <option value="Vêtements" <?= ($_GET["category"] == "Vêtements") ? "selected" : "" ?>>Vêtements</option>
        <option value="Accessoires" <?= ($_GET["category"] == "Accessoires") ? "selected" : "" ?>>Accessoires</option>
    </select>

</br>

    

    <label for="prix_max">Prix maximum :</label>
    <input type="number" name="maxPrice" min="0" step="1" value="<?= $_GET["maxPrice"] ?>">

</br>

    <label>
        <input type="checkbox" name="inStock" value="1"  <?= ($_GET["inStock"] == 1) ? "checked" : "" ?>>
        En stock uniquement
    </label>
 
</br>    

    <label for="search">Rechercher :</label>
    <input type="text" name="search" placeholder="Tapez ici.." value="<?= $_GET["search"] ?>">
    <button type="submit">Rechercher</button>

</br>

</form>

<?php 

$search = $_GET["search"];
$category = $_GET["category"];
$maxPrice = $_GET["maxPrice"];
$inStock = $_GET["inStock"];
$result = 0;

if(empty($search)) {
    echo "";
} else {
    foreach($products as $product) {
    if (stripos($product["name"], $search) !== false) {

        if($product["category"] == $category || $category == "") {

            if($inStock != 1 || $inStock == 1 && $product["stock"] > 0) {

                if(isset($maxPrice) && !empty($maxPrice)) {
                    
                    if($maxPrice > $product["price"]) {
                        $result = $result + 1;
                        echo $product["name"] . "</br>";
                        }
                    } else {
                        $result = $result + 1;
                        echo $product["name"] . "</br>";
                    }
                }
            }
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
