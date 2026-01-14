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
    17 => ["name" => "Veste Coupe-Vent", "price" => 79.99, "stock" => 22, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 15],
    18 => ["name" => "Veste Cuir", "price" => 249.99, "stock" => 7, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    19 => ["name" => "Sweat à Capuche", "price" => 44.99, "stock" => 38, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 25],
    20 => ["name" => "Chemise Blanche", "price" => 39.99, "stock" => 52, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    21 => ["name" => "Chemise Rayée", "price" => 42.99, "stock" => 0, "category" => "Vêtements", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
    22 => ["name" => "Casquette Urban", "price" => 19.99, "stock" => 64, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    23 => ["name" => "Bonnet Hiver", "price" => 14.99, "stock" => 41, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 10],
    24 => ["name" => "Echarpe Laine", "price" => 29.99, "stock" => 18, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    25 => ["name" => "Sac à Dos", "price" => 69.99, "stock" => 27, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 20],
    26 => ["name" => "Portefeuille Cuir", "price" => 49.99, "stock" => 33, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    27 => ["name" => "Chaussures Baskets", "price" => 89.99, "stock" => 45, "category" => "Chaussures", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 30],
    28 => ["name" => "Chaussures Ville", "price" => 129.99, "stock" => 12, "category" => "Chaussures", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => true, "discount" => 0],
    29 => ["name" => "Sandales Été", "price" => 34.99, "stock" => 0, "category" => "Chaussures", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => false, "discount" => 20],
    30 => ["name" => "Bottes Cuir", "price" => 159.99, "stock" => 9, "category" => "Chaussures", "image" => "https://via.placeholder.com/200x200", "onSale" => false, "new" => false, "discount" => 0],
    31 => ["name" => "Gants Hiver", "price" => 24.99, "stock" => 56, "category" => "Accessoires", "image" => "https://via.placeholder.com/200x200", "onSale" => true, "new" => true, "discount" => 15],
];

$search = $_GET["search"] ?? "";
$categories = $_GET["categories"] ?? ["all"];
$maxPrice = $_GET["maxPrice"] ?? 0;
$minPrice = $_GET["minPrice"] ?? PHP_INT_MAX;
$inStock = $_GET["inStock"];
$nbProduits = 0;
$results = [];

?>

<form method="GET" action="">

     <label>
        <input type="checkbox" name="categories[]" value="Vêtements" <?= (in_array("Vêtements", $categories)) ? "checked" : "" ?>>
        Vêtements
    </label>

    <label>
        <input type="checkbox" name="categories[]" value="Accessoires" <?= (in_array("Accessoires", $categories)) ? "checked" : "" ?>>
        Accessoires
    </label>

    <label>
        <input type="checkbox" name="categories[]" value="Chaussures" <?= (in_array("Chaussures", $categories)) ? "checked" : "" ?>>
        Chaussures
    </label>

</br>

    <label for="minPrice">Prix minimum :</label>
    <input type="number" name="minPrice" min="0" step="1" value="<?= $_GET["minPrice"] ?>">

</br>

    <label for="maxPrice">Prix maximum :</label>
    <input type="number" name="maxPrice" min="0" step="1" value="<?= $_GET["maxPrice"] ?>">

</br>

    <label>
        <input type="checkbox" name="inStock" value="1"  <?= ($_GET["inStock"] == 1) ? "checked" : "" ?>>
        En stock uniquement
    </label>
 
</br>    

    <label for="sort">Trier par :</label>
        <select name="sort">
                <option value="price_asc" <?= ($_GET["sort"] == "price_asc") ? "selected" : "" ?>>Prix croissant</option>
                <option value="price_desc" <?= ($_GET["sort"] == "price_desc") ? "selected" : "" ?>>Prix décroissant</option>
                <option value="name_asc" <?= ($_GET["sort"] == "name_asc") ? "selected" : "" ?>>Nom A-Z</option>
                <option value="name_desc" <?= ($_GET["sort"] == "name_desc") ? "selected" : "" ?>>Nom Z-A</option>
        </select>

</br>

    <label for="search">Rechercher :</label>
    <input type="text" name="search" placeholder="Tapez ici.." value="<?= $_GET["search"] ?>">
    <button type="submit">Rechercher</button>

</br>

</form>

<?php 

foreach($products as $product) {
if (stripos($product["name"], $search) !== false) {

    foreach ($categories as $category) {
        if($categories == ["all"] || $product["category"] == $category) {

        if($inStock != 1 || $inStock == 1 && $product["stock"] > 0) {

            if(isset($maxPrice) && !empty($maxPrice)) {
                
                if($maxPrice > $product["price"]) {
                    $nbProduits = $nbProduits + 1;
                    $results[] = [$product["name"], $product["price"]];
                    }
                } else {
                    $nbProduits = $nbProduits + 1;
                    $results[] = [$product["name"], $product["price"]];
                    }
                }
            }
        }
    }
}

echo "</br>";
if($nbProduits != 0){
    if($nbProduits == 1) {
    echo $nbProduits . " produit trouvé";
    } else {
    echo $nbProduits . " produits trouvés";
    }
} else {
    echo "Aucun résultat";
}

echo "</br>";

$sort = $_GET["sort"] ?? "name_asc";

usort($results, function($a, $b) use ($sort) {
    switch ($sort) {
        case "price_asc":
            return $a[1] <=> $b[1];
        case "price_desc":
            return $b[1] <=> $a[1];
        case "name_asc":
            return strcmp($a[0], $b[0]);
        case "name_desc":
            return strcmp($b[0], $a[0]);
        default:
            return 0;
    }
});

$page = $_GET["page"] ?? 1;

$queryParams = $_GET;

$perPage = 10;
$total = count($results);
$pages = ceil($total / $perPage);
$results = array_slice($results, ($page - 1) * $perPage, $perPage);

foreach ($results as $result) {
    echo $result[0] . " " . $result[1] . " €<br>";
}

echo "</br>Pages : ";

for ($i = 1; $i <= $pages; $i++) {

    $queryParams["page"] = $i;
    $url = "?" . http_build_query($queryParams);

    if ($i == $page) {
        echo "<strong>[$i]</strong> ";
    } else {
        echo "<a href='$url'>$i</a> ";
    }
}
