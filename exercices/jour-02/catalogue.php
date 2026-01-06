<?php

$products = [
    ["name" => "T-shirt", "price" => 19.99, "stock" => 49],
    ["name" => "Jean", "price" => 59.99, "stock" => 84],
    ["name" => "Pull", "price" => 64.99, "stock" => 65],
    ["name" => "Ceinture", "price" => 17.99, "stock" => 78],
    ["name" => "Montre", "price" => 189.99, "stock" => 45],
];

var_dump($products[2]["name"]);
var_dump($products[0]["price"]);
var_dump($products[4]["stock"]);

$products[1]["stock"] = $products[1]["stock"] + 10;

var_dump($products[1]);