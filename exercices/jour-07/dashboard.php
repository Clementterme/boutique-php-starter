<?php

session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
} else {
    echo "Bonjour " . $_SESSION["user"] . " !";
}

?>

<form method="post">
    <button type="submit" name="deconnexion">Se déconnecter</button>
</form>

<?php

if(isset($_POST["deconnexion"])) {
    header("Location: logout.php");
}