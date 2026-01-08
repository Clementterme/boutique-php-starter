<?php

$age = 27;

if ($age < 18) {
    echo "Minor";
} elseif ($age < 26) {
    echo "Young adult";
} elseif ($age < 65) {
    echo "Adult";
} else {
    echo "Senior";
}