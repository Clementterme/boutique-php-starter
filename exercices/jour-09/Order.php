<?php

include_once("User.php");
include_once("Cart.php");

class Order
{
    public function __construct(
        private int $id,
        private User $user,
        private Cart $cart,
        private string $statut,
        private DateTime $dateOrder = new DateTime()
    ) {}
    
    public function getTotal(): float
    {
        return $this->cart->getTotal();
    }

    public function showOrder(): void
    {
        foreach ($this->cart->getItems() as $item) {
            echo $item->getProduct()->getName();
            echo " x" . $item->getQuantity();
            echo " = " . $item->getTotal() . "€\n";
        }
    }

    public function getItemCount(): int
    {
        $nbItems = 0;
        foreach ($this->cart->getItems() as $item) {
            $nbItems = $nbItems + $item->getQuantity();
        }
        return $nbItems;
    }

    public function setStatut($statut)
        {
                $this->statut = $statut;

                return $this;
        }
}

$maCommande = new Order(1, $clem, $monPanier, "En attente de validation");

echo "<br>";

echo $maCommande->getTotal();

$maCommande->showOrder();

echo $maCommande->getItemCount();