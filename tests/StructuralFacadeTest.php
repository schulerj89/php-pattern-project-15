<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Jschuler\PhpPatternProject15\Structural\Facade\Account;
use Jschuler\PhpPatternProject15\Structural\Facade\ATMFacade;
use Jschuler\PhpPatternProject15\Structural\Facade\Bank;
use Jschuler\PhpPatternProject15\Structural\Facade\CreditCard;
use Jschuler\PhpPatternProject15\Structural\Facade\Customer;

final class StructuralFacadeTest extends TestCase
{
  public function testGetBalance(): void
  {
    $creditCard = new CreditCard('123456789', '1111', new DateTime('2022-05-03'));
    $customer = new Customer('Josh', 'S', $creditCard);
    $account = new Account(800);
    $bank = new Bank([$customer->getUid() => $account]);
    $atm = new ATMFacade($bank, $customer);
    $this->assertSame(800, $atm->getBalance());
  }
}