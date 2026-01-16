<?php

class User
{
    public DateTime $registrationDate;
    public function __construct(
        public string $name,
        public string $email,
        ?string $registrationDate = null
    ) {
        $this->registrationDate = $registrationDate ? DateTime::createFromFormat("d/m/Y", $registrationDate): new DateTime();
    }

    public function isNewMember(): bool
    {
        $date = new DateTime();
        $interval = $date->diff($this->registrationDate);
        if($interval->days < 30)
        {
            return true;
        }
        return false;
    }
        
}

$clement = new User("Clément", "clement@terme.com", "01/01/2026");

var_dump($clement->isNewMember());
