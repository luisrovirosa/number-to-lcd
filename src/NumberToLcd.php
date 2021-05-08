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

    public function convert(int $decimal): string
    {
        if ($decimal === 2) {
            return self::NUMBER_2;
        }
        if ($decimal === 3) {
            return self::NUMBER_3;
        }
        if ($decimal === 4) {
            return self::NUMBER_4;
        }
        if ($decimal === 5) {
            return self::NUMBER_5;
        }
        if ($decimal === 6) {
            return self::NUMBER_6;
        }
        if ($decimal === 7) {
            return self::NUMBER_7;
        }
        if ($decimal === 8) {
            return self::NUMBER_8;
        }
        if ($decimal === 9) {
            return self::NUMBER_9;
        }
        if ($decimal === 0) {
            return self::NUMBER_0;
        }

        return self::NUMBER_1;
    }
}
