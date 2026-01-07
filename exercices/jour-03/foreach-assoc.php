<?php

$infos = ["Name" => "Clément", "Age" => 27, "City" => "Grenoble", "Job" => "Développeur Web"];

foreach ($infos as $key => $value) { 

    ?>

    <strong><?= $key ?></strong> : <?= $value ?> </br>

    <?php

} ?>