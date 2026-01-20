<?php

include_once("CartItem.php");

class Cart
{
    /** @var CartItem[] */
    private array $items = [];
    
    public function addProduct(Product $product, int $quantity = 1): self
    {
        $id = $product->getId();
        
        if (isset($this->items[$id])) {
            // Produit déjà dans le panier → augmenter quantité
            $currentQuantity = $this->items[$id]->getQuantity();
            $this->items[$id]->setQuantity($currentQuantity + $quantity);
        } else {
            // Nouveau produit
            $this->items[$id] = new CartItem($product, $quantity);
        }
        return $this;
    }
    
    public function removeProduct(int $productId): self
    {
        unset($this->items[$productId]);
        return $this;
    }
    
    public function getItems(): array
    {
        return $this->items;
    }
    
    public function getTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->getTotal();
        }
        return $total;
    }
    
    public function count(): int
    {
        return count($this->items);
    }
    
    public function clear(): void
    {
        $this->items = [];
    }

    public function update(Product $product, int $quantity = 1): void
    {
        $id = $product->getId();
        $this->items[$id]->setQuantity($quantity);
    }
}

echo "<br>";

$monPanier = new Cart;

$monPanier->addProduct($bottes, 2);

var_dump($monPanier);

$monPanier->addProduct($pull, 4);

var_dump($monPanier);

echo $monPanier->getTotal();

echo $monPanier->count();

$monPanier->removeProduct(3);

echo $monPanier->getTotal();

$monPanier->clear();

echo $monPanier->count();

echo $monPanier->getTotal();

echo "<br>";

$monPanier->addProduct($ceintureCuir, 3);

var_dump($monPanier);

echo "<br>";

var_dump($monPanier->getItems());

$monPanier->update($ceintureCuir, 10);

var_dump($monPanier);

$monPanier->addProduct($bottes, 4);

echo $monPanier->count();

$monPanier  ->addProduct($tshirt, 5)
            ->addProduct($pull, 2)
            ->removeProduct(1);
