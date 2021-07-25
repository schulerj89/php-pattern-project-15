<?php

namespace Jschuler\PhpPatternProject15\Behavorial\Strategy;

interface ExportInterface
{
  /**
   * @param string $filePath
   * @return string - path of the exported file
   */
  public function export($filePath);
}