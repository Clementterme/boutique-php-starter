<?php

include_once("Product.php");

class CartItem
{
    public function __construct(
        private Product $product,
        private int $quantity = 1
    ) {}
    
    public function getProduct(): Product
    {
        return $this->product;
    }
    
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    
    public function setQuantity(int $quantity): void
    {
        $this->quantity = max(1, $quantity);
    }
    
    public function getTotal(): float
    {
        return $this->product->getPrice() * $this->quantity;
    }

    public function incremente(): void
    {
        $this->quantity = max(1, $this->quantity) + 1;
    }

    public function decremente(): void
    {
        $this->quantity = max(1, $this->quantity) - 1;
    }
}

// Tests avec différents produits et quantités

$article1 = new CartItem($tshirt, 3);

echo $article1->getTotal();

$article1->incremente();
$article1->incremente();
$article1->incremente();

echo $article1->getTotal();

$article1->decremente();
$article1->decremente();
$article1->decremente();
$article1->decremente();
$article1->decremente();
$article1->decremente();
$article1->decremente();

echo $article1->getTotal();

$article1->incremente();

echo $article1->getTotal();

$article2 = new CartItem($montreMetal, 2);

echo $article2->getTotal();

$article2->incremente();
$article2->incremente();

echo $article2->getTotal();

$article1->decremente();

echo $article2->getTotal();
