<?php

class Product
{
    public function __construct(
        public int $id,
        public string $nom,
        public string $description,
        public float $prix,
        public int $stock,
        public string $categorie
    ) {}

     public function getPriceIncludingTax(float $vat = 20): float
    {
        return $this->prix * ($vat / 100 + 1);
    }

    public function isInStock(): bool
    {
        return $this->stock > 0;
    }


    public function reduceStock(int $quantity)
    {
        if($quantity < $this->stock)
        {
            $this->setStock($this->stock - $quantity);
        }
        else    
        {
            echo "Stock insuffisant.";
        }
    }

    public function applyDiscount(float $percentage)
    {
        $discount = $this->prix * ($percentage / 100);
        $this->setPrix($this->prix - $discount);
    }

    public function display(): string
    {
        return "Nom : " . $this->nom . "</br>Prix : " . $this->prix . "</br>Stock : " . $this->stock . "</br>Catégorie : " . $this->categorie;
    }

        /**
         * Get the value of stock
         */ 
        public function getStock()
        {
                return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */ 
        public function setStock($stock)
        {
                $this->stock = $stock;

                return $this;
        }

        /**
         * Get the value of prix
         */ 
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @return  self
         */ 
        public function setPrix($prix)
        {
                $this->prix = $prix;

                return $this;
        }
}

// $produit = new Product(1, "Produit 1", "Description du produit 1", 5, 20, "Catégorie 1");

// var_dump($produit->getPrix());

// $produit->applyDiscount(30);

// var_dump($produit->getPrix());