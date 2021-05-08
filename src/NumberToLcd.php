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
        0 => self::NUMBER_0,
        1 => self::NUMBER_1,
        2 => self::NUMBER_2,
        3 => self::NUMBER_3,
        4 => self::NUMBER_4,
        5 => self::NUMBER_5,
        6 => self::NUMBER_6,
        7 => self::NUMBER_7,
        8 => self::NUMBER_8,
        9 => self::NUMBER_9,
    ];

    public function convert(int $decimal): string
    {
        return implode("\n", self::toLcd($decimal)) . "\n";
    }

    private static function toLcd(int $decimal): array
    {
        if ($decimal >= 10) {
            return self::mergeNumbers(
                self::toLcd((int)($decimal / 10)),
                self::toLcd($decimal % 10)
            );
        }

        return self::NUMBERS[$decimal];
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
