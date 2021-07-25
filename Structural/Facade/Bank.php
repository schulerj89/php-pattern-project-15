<?php

namespace Jschuler\PhpPatternProject15\Structural\Facade;

class Bank
{
  private $accounts;

  public function __construct(array $accounts)
  {
    $this->accounts = $accounts;
  }

  public function validateCard(CreditCard $card)
  {
    /**
     * ...
     * Executing control mechanisms, etc.
     * Throw \Exception on error
     * ...
     */
    return true;
  }

  public function checkAccountBalance(Customer $customer, $amount)
  {
    /**
     * ...
     * Executing control mechanisms, etc.
     * Throw \Exception on error
     * ...
     */
    return 100;
  }

  public function withdraw(Customer $customer, $amount)
  {
    $account = $this->accounts[$customer->getUid()];
    $account->setBalance($account->getBalance() - $amount);
    $this->accounts[$customer->getUid()] = $account;
  }

  public function getBalance(Customer $customer)
  {
    return $this->accounts[$customer->getUid()]->getBalance();
  }
}