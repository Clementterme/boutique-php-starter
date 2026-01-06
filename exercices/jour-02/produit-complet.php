<?php

$product = [
    "name" => "pull",
    "images" => ["url1", "url2", "url3"],
    "sizes" => ["S", "M", "L", "XL"],
    "reviews" => [
        ["author" => "...", "rating" => 5, "comment" => "..."],
        // ...
    ]
];

echo $product["images"][1];
echo count($product["sizes"]);
echo $product["reviews"][0]["rating"];