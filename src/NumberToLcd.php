<?php declare(strict_types = 1);

namespace Kata;

class NumberToLcd
{
    private const NUMBER_0 = [" _ ", "| |", "|_|"];
    private const NUMBER_1 = ["   ", "  |", "  |"];
    private const NUMBER_2 = [" _ ", " _|", "|_ "];
    private const NUMBER_3 = [" _ ", " _|", " _|"];
    private const NUMBER_4 = ["   ", "|_|", "  |"];
    private const NUMBER_5 = [" _ ", "|_ ", " _|"];
    private const NUMBER_6 = [" _ ", "|_ ", "|_|"];
    private const NUMBER_7 = [" _ ", "  |", "  |"];
    private const NUMBER_8 = [" _ ", "|_|", "|_|"];
    private const NUMBER_9 = [" _ ", "|_|", " _|"];
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
        if ($decimal === 10) {
            $number = self::mergeNumbers(self::NUMBERS[1], self::NUMBERS[0]);
        } else {
            $number = self::NUMBERS[$decimal];
        }

        return implode("\n", $number) . "\n";
    }

    private static function mergeNumbers(array $left, array $right): array
    {
        return [
            $left[0] . $right[0],
            $left[1] . $right[1],
            $left[2] . $right[2],
        ];
    }
}
