<?php

namespace Jschuler\PhpPatternProject15\Behavorial\Strategy;

use Jschuler\PhpPatternProject15\Behavorial\Strategy\ExportInterface;

class PdfExport implements ExportInterface
{
  /**
   * @param string $filePath
   * @return string - path of the exported file
   */
  public function export($filePath) 
  {
    return $filePath.'newPDFFile.csv';
  }
}