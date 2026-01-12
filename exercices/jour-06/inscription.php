<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["passwordConfirmation"])) {
    echo "Veuillez remplir tous les champs.";
} if(strlen($_POST["name"]) <= 3 || strlen($_POST["name"]) >= 20) {
    $errors["name"] = "Le nom d'utilisateur doit contenir entre 3 et 20 caractères.";
} if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "Le format de l'email est invalide.";
} if(strlen($_POST["password"]) < 8) {
    $errors["password"] = "Le mot de passe doit contenir au moins 8 caractères";
} if($_POST["password"] != $_POST["passwordConfirmation"]) {
    $errors["password"] = "Les deux mots de passe ne correspondent pas.";
    } 
}

?>

<form method="POST" action="inscription.php">
    <label>Nom d'utilisateur :</label>
    <input type="text" name="name" value="<?php if(!isset($errors["name"])) {
        echo $_POST["name"];
    }  ?>"></br>
    <?php if(isset($errors["name"])) {
        echo $errors["name"] . "</br>";
    }
    ?>
    <label>Email :</label>
    <input type="text" name="email" value="<?php if(!isset($errors["email"])) {
        echo $_POST["email"];
    }  ?>"></br>
    <?php if(isset($errors["email"])) {
        echo $errors["email"] . "</br>";
    }
    ?>
    <label>Mot de passe :</label>
    <input type="password" name="password" value="<?php if(!isset($errors["password"]) && !isset($errors["passwordConfirmation"])) {
        echo $_POST["password"];
    }  ?>"></br>
    <?php if(isset($errors["password"])) {
        echo $errors["password"] . "</br>";
    }
    ?>
    <label>Confirmation du mot de passe :</label>
    <input type="password" name="passwordConfirmation" value="<?php if(!isset($errors["password"]) && !isset($errors["passwordConfirmation"])) {
        echo $_POST["passwordConfirmation"];
    }  ?>"></br>
    <?php if(isset($errors["passwordConfirmation"])) {
        echo $errors["passwordConfirmation"] . "</br>";
    }
    ?>
    <button type="submit">Inscription</button>
</form>