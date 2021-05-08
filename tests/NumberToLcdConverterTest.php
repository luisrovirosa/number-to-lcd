<?php declare(strict_types=1);

namespace KataTests;

use Kata\NumberToLcd;
use PHPUnit\Framework\TestCase;

class NumberToLcdConverterTest extends TestCase
{
    /** @test */
    public function convert_1_to_lcd_number(): void
    {
        $converter = new NumberToLcd();

        $result = $converter->convert(1);

        $lcdNumber =
            "   \n" .
            "  |\n" .
            "  |\n";
        self::assertEquals($lcdNumber, $result);
    }
}
