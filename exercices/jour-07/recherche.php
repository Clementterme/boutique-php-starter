<form method="GET" action="">
    <label for="search">Rechercher :</label>
    <input type="text" name="search" placeholder="Tapez ici.." value="<?= $_GET["search"] ?>">
    <button type="submit">Rechercher</button>
</form>

<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev", "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
$search = $_GET["search"];

$stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE ?");
$stmt->execute(['%' . $search . '%']);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

if(empty($products)) {
    echo "Aucun produit trouvé";
} else {
    foreach ($products as $product) {

?>
    <div>
        <h3><?= $product['name'] ?></h3>
        <p>Prix : <?= $product['price'] ?> €</p>
        <p>Stock restant : <?= $product['stock'] ?></p>
    </div>

<?php

    }
}

// Préparer une requête aide à se protéger contre les injections SQL