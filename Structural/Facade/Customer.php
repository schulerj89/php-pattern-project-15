<?php

namespace Jschuler\PhpPatternProject15\Structural\Facade;

class Customer
{
    private $uid;

    private $firstName;

    private $lastName;

    private $creditCard;

    public function __construct($firstName, $lastName, CreditCard $creditCard)
    {
        $this->uid = uniqid(); //just an example...
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->creditCard = $creditCard;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    }
}