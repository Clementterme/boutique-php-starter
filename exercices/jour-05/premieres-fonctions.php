<?php

function greet() {
    echo "Bienvenue sur la boutique !";
}

 function greetClient($name) {
    echo "Bienvenue " . $name . " !";
}

greet();

greetClient("Clément");

greet();

greetClient("David");
