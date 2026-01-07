<?php

$products = [
    ["name" => "T-shirt", "price" => 19.99, "stock" => 49],
    ["name" => "Jean", "price" => 59.99, "stock" => 84],
    ["name" => "Pull", "price" => 64.99, "stock" => 65],
    ["name" => "Ceinture", "price" => 17.99, "stock" => 78],
    ["name" => "Montre", "price" => 189.99, "stock" => 45],
];

foreach ($products as $product) { ?>

<article>
    <h3><?= $product["name"] ?></h3>
    <p class="prix"><?= $product["price"] ?> €</p>
    <p class="stock">Stock : <?= $product["stock"] ?></p>
</article>

<?php

}

