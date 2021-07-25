<?php

namespace Jschuler\PhpPatternProject15\Structural\Facade;

class ATMFacade
{
  private $bank;

  private $customer;

  public function __construct(Bank $bank, Customer $customer)
  {
    $this->bank = $bank;
    $this->customer = $customer;
  }

  public function withdraw($amount)
  {
    $this->bank->validateCard($this->customer->getCreditCard());
    $this->bank->checkAccountBalance($this->customer, $amount);
    $this->bank->withdraw($this->customer, $amount);
  }
  
  public function getBalance()
  {
    return $this->bank->getBalance($this->customer);
  }
}