<?php

$products = [];

for ($i=0; $i < 10; $i++) { 
    $products[$i]["Nom"] = "Produit " . $i +1;
    $products[$i]["Prix"] = rand(10, 100);
    $products[$i]["Stock"] = rand(0, 50);
}

var_dump($products);

foreach ($products as $product) { ?>

<div>
    <h2><?= $product["Nom"] ?></h2>
    <p><?= $product["Prix"] ?> €</p>
    <p>Stock : <?= $product["Stock"] ?></p>
</div>
    
<?php

}