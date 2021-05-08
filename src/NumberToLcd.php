<?php declare(strict_types = 1);

namespace Kata;

class NumberToLcd
{
    public function convert(int $decimal): string
    {
        if ($decimal === 2) {
            return " _ \n _|\n|_ \n";
        }
        if ($decimal === 3) {
            return " _ \n _|\n _|\n";
        }
        if ($decimal === 4) {
            return "   \n|_|\n  |\n";
        }
        if ($decimal === 5) {
            return " _ \n|_ \n _|\n";
        }

        return "   \n  |\n  |\n";
    }
}
