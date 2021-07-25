<?php

namespace Jschuler\PhpPatternProject15\Creational\AbstractFactory;

interface BeerInterface
{
  /**
   * Name of the beer (Heineken, Budweiser, Guinness, etc.)
   * @return string
   */
  public function getName();
}