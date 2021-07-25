<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Jschuler\PhpPatternProject15\Creational\AbstractFactory\Budweiser;

final class CreationalAbstractFactoryTest extends TestCase
{
  public function testBudweiser(): void
  {
    $beer = new Budweiser();
    $this->assertSame('Budweiser', $beer->getName());
  }
}