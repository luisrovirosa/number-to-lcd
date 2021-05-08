<?php declare(strict_types = 1);

namespace Kata;

class NumberToLcd
{
    private const NUMBERS = [
        0 => [" _ ", "| |", "|_|"],
        1 => ["   ", "  |", "  |"],
        2 => [" _ ", " _|", "|_ "],
        3 => [" _ ", " _|", " _|"],
        4 => ["   ", "|_|", "  |"],
        5 => [" _ ", "|_ ", " _|"],
        6 => [" _ ", "|_ ", "|_|"],
        7 => [" _ ", "  |", "  |"],
        8 => [" _ ", "|_|", "|_|"],
        9 => [" _ ", "|_|", " _|"],
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
