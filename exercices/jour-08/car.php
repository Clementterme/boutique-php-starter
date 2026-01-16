<?php

class Car
{
    public function __construct(
        public string $brand,
        public string $model,
        public int $year
    ) {}

        public function getAge(): int
    {
        return getdate()["year"] - $this->year;
    }

    public function display(): string
    {
        return $this->brand . " " . $this->model . " " . $this->getAge() . ($this->getAge() > 1 ? " ans" : " an");
    }

}

$peugeot = new Car("Peugeot", "206", 2002);
$renault = new Car("Renault", "Hybride", 2021);
$audi = new Car("Audi", "R8", 2018);

echo $peugeot->display();
echo $renault->display();
echo $audi->display();
