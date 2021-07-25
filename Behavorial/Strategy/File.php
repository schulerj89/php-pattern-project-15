<?php

namespace Jschuler\PhpPatternProject15\Behavorial\Strategy;

class File
{
  private $path;

  public function __construct($path)
  {
    $this->path = $path;
  }

  public function exportTo(ExportInterface $exportInterface)
  {
    return $exportInterface->export($this->path);
  }
}