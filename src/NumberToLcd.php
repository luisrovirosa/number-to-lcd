<?php declare(strict_types = 1);

namespace Kata;

class NumberToLcd
{
    private const NUMBER_0 = " _ \n| |\n|_|\n";
    private const NUMBER_1 = "   \n  |\n  |\n";
    private const NUMBER_2 = " _ \n _|\n|_ \n";
    private const NUMBER_3 = " _ \n _|\n _|\n";
    private const NUMBER_4 = "   \n|_|\n  |\n";
    private const NUMBER_5 = " _ \n|_ \n _|\n";
    private const NUMBER_6 = " _ \n|_ \n|_|\n";
    private const NUMBER_7 = " _ \n  |\n  |\n";
    private const NUMBER_8 = " _ \n|_|\n|_|\n";
    private const NUMBER_9 = " _ \n|_|\n _|\n";
    private const NUMBERS = [
        self::NUMBER_0,
        self::NUMBER_1,
        self::NUMBER_2,
        self::NUMBER_3,
        self::NUMBER_4,
        self::NUMBER_5,
        self::NUMBER_6,
        self::NUMBER_7,
        self::NUMBER_8,
        self::NUMBER_9,
    ];

    public function convert(int $decimal): string
    {
        return self::NUMBERS[$decimal];
    }
}
