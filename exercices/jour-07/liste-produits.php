<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev", "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

// SELECT avec paramètre
$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($products as $product) {

?>
    <div>
        <h3><?= $product['name'] ?></h3>
        <p>Prix : <?= $product['price'] ?> €</p>
        <p>Stock restant : <?= $product['stock'] ?></p>
    </div>

<?php

}

// fetch() récupère une seule ligne d'une table alors que fetchAll() récupère toutes les lignes

// DO::FETCH_ASSOC retourne chaque ligne sous forme de tableau associatif