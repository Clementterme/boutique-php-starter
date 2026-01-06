<?php 

$groceries = ["cafe","the","chocolat","red bull","sirop"];

var_dump($groceries[0]);

?> </br>

<?php

var_dump($groceries[(count($groceries)-1)]);

?> </br>

<?php

var_dump(count($groceries));

?> </br>

<?php

$groceries[] = "vin";
$groceries[] = "biere";

unset($groceries[2]);

var_dump($groceries);
