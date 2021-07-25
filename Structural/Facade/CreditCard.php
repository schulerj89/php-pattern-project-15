<?php

namespace Jschuler\PhpPatternProject15\Structural\Facade;

class CreditCard
{
  private $number;

  private $pin;

  private $expirationDate;

  public function __construct($number, $pin, \DateTime $expirationDate)
  {
    $this->number = $number;
    $this->pin = $pin;
    $this->expirationDate = $expirationDate;
  }

  public function getExpirationDate()
  {
    return $this->expirationDate;
  }
}