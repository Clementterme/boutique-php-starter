<h2>Ajouter un produit</h2>

<form method="post" action="">
    <label>
        Nom :
        <input type="text" name="name" required>
    </label>
    <br><br>

    <label>
        Prix :
        <input type="number" name="price" step="0.01" min="0" required>
    </label>
    <br><br>

    <label>
        Stock :
        <input type="number" name="stock" min="0" required>
    </label>
    <br><br>

    <button type="submit" name="ajouter">Ajouter</button>
</form>

<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
    "dev", "dev",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

if (isset($_POST["ajouter"])) {
    $stmt = $pdo->prepare("INSERT INTO products (name, price, stock) VALUES (?, ?, ?)");
    $stmt->execute([$_POST["name"], $_POST["price"], $_POST["stock"]]);
    header("Location: admin-produits.php");
    exit;
}

if(isset($_POST["modifier"])) {
    $stmt = $pdo->prepare("UPDATE products SET name = ?, price = ?, stock = ? WHERE id = ?");

    $stmt->execute([$_POST['name'], $_POST['price'], $_POST['stock'], $_POST['id']]);

    header("Location: admin-produits.php");
    exit;
    }

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
        <form method="post">
            <button type="submit" name="editForm" value="<?= $product["id"] ?>">Modifier</button>
        </form>
        <form method="post">
            <button type="submit" name="supprimer" value="<?= $product["id"] ?>" onclick="return confirm('Supprimer ce produit ?')">Supprimer</button>
        </form>
    </div>
<?php

if (isset($_POST["editForm"]) && $_POST["editForm"] == $product["id"]) {

?>

<form method="post" action="">
    <input type="hidden" name="id" value="<?= $product["id"] ?>">

    <label>
        Nom :
        <input type="text" name="name" value="<?= $product['name'] ?>" required>
    </label>
    <br><br>

    <label>
        Prix :
        <input type="number" name="price" step="0.01" min="0" value="<?= $product['price'] ?>" required>
    </label>
    <br><br>

    <label>
        Stock :
        <input type="number" name="stock" min="0" value="<?= $product['stock'] ?>" required>
    </label>
    <br><br>

    <button type="submit" name="modifier" value="<?= $product["id"] ?>">Modifier</button>
</form>

<?php

    }

}

if(isset($_POST["supprimer"])) {
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
    $stmt->execute([$_POST["supprimer"]]);
    header("Location: admin-produits.php");
    exit;
}