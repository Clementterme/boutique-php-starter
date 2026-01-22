<?php

class Product
{
    public function __construct(
        public int $id,
        public string $name,
        // public string $description,
        public float $price,
        public int $stock
        // public string $category
    ) {}

     public function getPriceIncludingTax(float $vat = 20): float
    {
        return $this->price * ($vat / 100 + 1);
    }

    public function isInStock(): bool
    {
        return $this->stock > 0;
    }


    public function reduceStock(int $quantity): void
    {
        if($quantity <= $this->stock)
        {
            $this->setStock($this->stock - $quantity);
        }
        else    
        {
            echo "Stock insuffisant.";
        }
    }

    public function applyDiscount(float $percentage): void
    {
        $discount = $this->price * ($percentage / 100);
        $this->setPrice($this->price - $discount);
    }

    public function display(): string
    {
        return "Nom : " . $this->name . "</br>Prix : " . $this->price . "</br>Stock : " . $this->stock;
    }

    public function getStock(): int
    {
            return $this->stock;
    }

    public function setStock(int $stock): self
    {
            $this->stock = $stock;

            return $this;
    }

    public function getPrice(): float
    {
            return $this->price;
    }

    public function setPrice(float $price): self
    {
            $this->price = $price;

            return $this;
    }

    public function getName(): string
    {
            return $this->name;
    }

    public function setName(string $name): self
    {
            $this->name = $name;

            return $this;
    }

    public function getId(): int
    {
            return $this->id;
    }

    public function setId(int $id): self
    {
            $this->id = $id;

            return $this;
    }
}