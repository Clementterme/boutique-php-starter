<?php

class BankAccount
{
    public function __construct(
        private int $balance
    ) {}

        public function getBalance(): int
    {
        return $this->balance;
    }

        public function setBalance($balance)
        {
                $this->balance = $balance;

                return $this;
        }

        public function deposit(int $amount): void
    {
        $balance = $this->getBalance();
        $balance = $balance + $amount;
        $this->setBalance($balance);
    }

        public function withdraw(int $amount): void
    {
        $balance = $this->getBalance();

        if($balance >= $amount)
        {
            $balance = $balance - $amount;
            $this->setBalance($balance);
        } else {
            echo "Fonds inssufisants.";
        }
    }
}

$bankAccount = new BankAccount(1000);

$bankAccount->deposit(500);
$bankAccount->withdraw(1000);

echo $bankAccount->getBalance();