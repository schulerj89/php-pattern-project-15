<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Jschuler\PhpPatternProject15\Behavorial\Strategy\File;
use Jschuler\PhpPatternProject15\Behavorial\Strategy\CsvExport;
use Jschuler\PhpPatternProject15\Behavorial\Strategy\PdfExport;
use Jschuler\PhpPatternProject15\Behavorial\Strategy\ExportInterface;

final class BehavorialStrategyTest extends TestCase
{
  public function testCSVExport(): void
  {
    $file = new File('/var/www/');
    $csvExport = new CsvExport();
    $path = $file->exportTo($csvExport);
    $this->assertSame('/var/www/newCSVFile.csv', $path);
  }

  public function testPDFExport(): void
  {
    $file = new File('/var/www/');
    $pdfExport = new PdfExport();
    $path = $file->exportTo($pdfExport);
    $this->assertSame('/var/www/newPDFFile.csv', $path);
  }
}