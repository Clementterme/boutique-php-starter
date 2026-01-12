<form method="POST" action="contact.php">
    <label>Nom :</label>
    <input type="text" name="name">
    <label>Email :</label>
    <input type="text" name="email">
    <label>Message :</label>
    <input type="text" name="message">
    <button type="submit">Envoyer</button>
</form>

<?php

if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"])) {
    echo "Veuillez remplir tous les champs.";
} elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    echo "Le format de l'email est invalide.";
} elseif(strlen($_POST['message']) <= 10) {
    echo "Le message doit contenir au moins 10 caractères.";
} else { 

?>

<p>Nom : <?= htmlspecialchars($_POST["name"]); ?></p>
<p>Email : <?= htmlspecialchars($_POST["email"]); ?></p>
<p>Message : <?= htmlspecialchars($_POST["message"]); ?></p>

<?php

}

?>


