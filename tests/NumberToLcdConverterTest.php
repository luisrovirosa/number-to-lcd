<?php declare(strict_types = 1);

namespace KataTests;

use Kata\NumberToLcd;
use PHPUnit\Framework\TestCase;

class NumberToLcdConverterTest extends TestCase
{
    /**
     * @test
     * @dataProvider oneDigitNumbers
     */
    public function convert_decimal_number_to_lcd_number(int $decimal, string $expectedLcdNumber): void
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

    /**
     * @test
     * @dataProvider twoDigitNumbers
     */
    public function convert_two_digit_numbers_to_lcd_number(int $decimal, string $expectedLcdNumber): void
    {
        $converter = new NumberToLcd();

        $result = $converter->convert($decimal);

        self::assertEquals($expectedLcdNumber, $result);
    }

    public function twoDigitNumbers(): array
    {
        return [
            [10,"    _ \n" .
                "  || |\n" .
                "  ||_|\n",
            ],
            [23," _  _ \n" .
                " _| _|\n" .
                "|_  _|\n",
            ],
        ];
    }

    /**
     * @test
     * @dataProvider threeDigitNumbers
     */
    public function convert_three_digit_numbers_to_lcd_number(int $decimal, string $expectedLcdNumber): void
    {
        $converter = new NumberToLcd();

        $result = $converter->convert($decimal);

        self::assertEquals($expectedLcdNumber, $result);
    }

    public function threeDigitNumbers(): array
    {
        return [
            [100,"    _  _ \n" .
                "  || || |\n" .
                "  ||_||_|\n",
            ],
            [345," _     _ \n" .
                " _||_||_ \n" .
                " _|  | _|\n",
            ]
        ];
    }
}
