<?php

class Category
{
    public function __construct(
        public int $id,
        public string $nom,
        public string $description
    ) {}

        public function getSlug()
        {
            return strtolower(str_replace(' ', '-', $this->nom));
        }

}

$category1 = new Category(1, "Vêtements d'hiver", "Pour avoir chaud");
$category2 = new Category(2, "Maillots de bain", "Pour se baigner");
$category3 = new Category(3, "Accessoires de plongée", "Pour faire de la plongée");

echo $category1->getSlug();
echo $category2->getSlug();
echo $category3->getSlug();