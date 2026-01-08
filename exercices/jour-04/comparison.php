<?php
$a = 0;
$b = "";
$c = null;
$d = false;
$e = "0";

if ($a == $b) {
    echo "True";
} else {
    echo "False";
}

echo "</br>";

if ($a == $c) {
    echo "True";
} else {
    echo "False";
}

echo "</br>";

if ($a == $d) {
    echo "True";
} else {
    echo "False";
}

echo "</br>";

if ($a == $e) {
    echo "True";
} else {
    echo "False";
}

echo "</br>";
echo "</br>";

if ($a === $b) {
    echo "True";
} else {
    echo "False";
}

echo "</br>";

if ($a === $c) {
    echo "True";
} else {
    echo "False";
}

echo "</br>";

if ($a === $d) {
    echo "True";
} else {
    echo "False";
}

echo "</br>";

if ($a === $e) {
    echo "True";
} else {
    echo "False";
}

// "==" donne un résultat inattendu lorsque l'on compare des types de données différents

