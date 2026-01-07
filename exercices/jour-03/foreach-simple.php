<?php

$firstNames = ["Clément", "Justin", "Martin", "Charlotte", "Jérome"];

?>

<ul>

    <?php

    $i = 1;

        foreach($firstNames as $firstName) { ?>
            <li>
                <?= $i . ". " . $firstName ?>
            </li>   
            <?php
            $i = $i +1;

        }

    ?>

</ul>