<?php

session_start();

?>

<form method="post">
    <label>
        Username :
        <input type="text" name="username" required>
    </label>
    <br><br>

    <label>
        Password :
        <input type="password" name="password" required>
    </label>
    <br><br>

    <button type="submit" name="connexion">Se connecter</button>
</form>

<?php

$username = $_POST["username"];
$password = $_POST["password"];

if(isset($_POST["connexion"])) {

    if ($username === "admin" && $password === "1234") {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
    } else {
        echo "<p style='color:red'>Identifiants incorrects</p>";
    }
}
