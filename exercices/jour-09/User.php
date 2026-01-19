<?php

include_once("Address.php");

class User
{
    /** @var Address[] */
    private array $addresses = [];

    public function __construct(
        private string $name,
        private string $email,
        private Address $address,
        private DateTime $dateInscription = new DateTime()
    ) {}

    public function addAddress(string $rue, string $ville, string $codePostal, string $pays): void
    {
        $this->addresses[] = new Address($rue, $ville, $codePostal, $pays);
    }

    public function getAddresses(): array
    {
        return $this->addresses;
    }

    public function getDefaultAddress(): Address
    {
        return $this->addresses[0];
    }
}

$address = new Address("Rue du Campus", "Grenoble", "38000", "France");
$clem = new User("Clem", "clem@gmail.com", $address);

// var_dump($clem);

$clem->addAddress("Rue de Chambé", "Chambéry", "73000", "France");

// var_dump($clem);

$clem->getAddresses();

$clem->getDefaultAddress();

var_dump($clem->getDefaultAddress());
