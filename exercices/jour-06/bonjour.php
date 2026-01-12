<?php

if(isset($_GET["name"])) {
    $name = $_GET["name"];
} else {
    $name = "visiteur";
}

if(isset($_GET["age"])) {
    $age = $_GET["age"];

    echo "Bonjour " . htmlspecialchars($name) . ", vous avez " . $age . " ans !";
} else {
    echo "Bonjour " . htmlspecialchars($name) . " !";
}