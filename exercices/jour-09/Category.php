<?php

class Category
{
    public function __construct(
        private int $id,
        private string $name
    ) {}
    
    public function getName(): string
    {
        return $this->name;
    }
}

$vetements = new Category(1, "Vêtements");
$accessoires = new Category(2, "Accessoires");
$chaussures = new Category(3, "Chaussures");