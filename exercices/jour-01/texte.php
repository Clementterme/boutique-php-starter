<?php

$brand = "Nike";
$model = "Air Max";

echo "Chaussure " . $brand . " " . $model . "</br>";

echo "Chaussure Nike Air Max </br>";

$phrase = "Chaussure %s %s";

echo sprintf($phrase, $brand, $model);

?>