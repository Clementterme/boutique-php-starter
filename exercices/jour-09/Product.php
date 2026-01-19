<?php 

include_once("Category.php");

class Product
{
    public function __construct(
        private string $name,
        private float $price,
        private Category $category
    ) {}
    
    public function getCategory(): Category
    {
        return $this->category;
    }

    public function getName()
    {
            return $this->name;
    }

    public function getPrice()
        {
                return $this->price;
        }
}

$tshirt = new Product("T-shirt", 29.99, $vetements);
$montreMetal = new Product("Montre en Métal", 129.99, $accessoires);
$bottes = new Product("Bottes", 149.99, $chaussures);
$pull = new Product("Pull", 49.99, $vetements);
$ceintureCuir = new Product("Ceinture en Cuir", 59.99, $accessoires);

$cart = [$tshirt, $montreMetal, $bottes, $pull, $ceintureCuir];

foreach($cart as $product) {
    echo $product->getName() . "<br>";
    echo "Catégorie : " . $product->getCategory()->getName() . "<br>";
}