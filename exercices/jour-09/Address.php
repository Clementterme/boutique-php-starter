<?php

class Address
{
    public function __construct(
        private string $rue,
        private string $ville,
        private string $codePostal,
        private string $pays
    ) {}

}