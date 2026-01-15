<?php

session_start();

?>

<form method="post">
    <button type="submit" name="reinitialiser">Réinitialiser</button>
</form>

<?php 

function reinitialiser() {
    unset($_SESSION["visits"]);
}

if (isset($_POST['reinitialiser'])) {
    reinitialiser();
}

$_SESSION["visits"] = $_SESSION["visits"] + 1;

echo "Vous avez visité cette page " . $_SESSION["visits"] . " fois";



