<?php

$clothes = ["T-shirt", "Jean", "Pull"];

$accessories = ["Ceinture", "Montre", "Lunettes"];

$catalog = array_merge($clothes, $accessories);

var_dump($catalog);

var_dump(count($catalog));

array_unshift($catalog, "Chemise");

var_dump($catalog);

