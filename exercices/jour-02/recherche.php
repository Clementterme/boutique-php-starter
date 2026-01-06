<?php

$categories = ["Vêtements", "Chaussures", "Accessoires", "Sport"];


// var_dump(in_array("Chaussures", $categories));
// var_dump(in_array("Électronique", $categories));

if (in_array("Chaussures", $categories)) {
    echo "Trouvé !";
} else {
    echo "Non trouvé";
};

if (in_array("Électronique", $categories)) {
    echo "Trouvé !";
} else {
    echo "Non trouvé";
};

var_dump(array_search("Sport", $categories));