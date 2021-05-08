<?php declare(strict_types=1);

namespace KataTests;

use Kata\NumberToLcd;
use PHPUnit\Framework\TestCase;

class NumberToLcdConverterTest extends TestCase
{
    /**
     * @test
     * @dataProvider oneDigitNumbers
     */
    public function convert_decimal_number_to_lcd_number($decimal, $expectedLcdNumber): void
    {
        $converter = new NumberToLcd();

        $result = $converter->convert($decimal);

        self::assertEquals($expectedLcdNumber, $result);
    }

    public function oneDigitNumbers(): array
    {
        return [
            [1, "   \n" .
                "  |\n" .
                "  |\n"],
            [2, " _ \n" .
                " _|\n" .
                "|_ \n"],
            [3, " _ \n" .
                " _|\n" .
                " _|\n"],
            [4, "   \n" .
                "|_|\n" .
                "  |\n"],
            [5, " _ \n" .
                "|_ \n" .
                " _|\n"],
            [6, " _ \n" .
                "|_ \n" .
                "|_|\n"],
            [7, " _ \n" .
                "  |\n" .
                "  |\n"],
            [8, " _ \n" .
                "|_|\n" .
                "|_|\n"],
            [9, " _ \n" .
                "|_|\n" .
                " _|\n"],
            [0, " _ \n" .
                "| |\n" .
                "|_|\n"]
        ];
    }

    /** @test */
    public function convert_10_to_lcd_number(): void
    {
        $converter = new NumberToLcd();

        $result = $converter->convert(10);

        $lcdNumber =
            "    _ \n" .
            "  || |\n" .
            "  ||_|\n";
        self::assertEquals($lcdNumber, $result);
    }
}
