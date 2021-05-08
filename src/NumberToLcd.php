<?php declare(strict_types = 1);

namespace Kata;

class NumberToLcd
{
    private const NUMBER_0 = [" _ ","| |","|_|"];
    private const NUMBER_1 = ["   ","  |","  |"];
    private const NUMBER_2 = [" _ "," _|","|_ "];
    private const NUMBER_3 = [" _ "," _|"," _|"];
    private const NUMBER_4 = ["   ","|_|","  |"];
    private const NUMBER_5 = [" _ ","|_ "," _|"];
    private const NUMBER_6 = [" _ ","|_ ","|_|"];
    private const NUMBER_7 = [" _ ","  |","  |"];
    private const NUMBER_8 = [" _ ","|_|","|_|"];
    private const NUMBER_9 = [" _ ","|_|"," _|"];
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
            $ten = [
                self::NUMBERS[1][0] . self::NUMBERS[0][0],
                self::NUMBERS[1][1] . self::NUMBERS[0][1],
                self::NUMBERS[1][2] . self::NUMBERS[0][2]
                ];

            return implode("\n", $ten) . "\n";
        }
        return implode("\n", self::NUMBERS[$decimal]) . "\n";
    }
}
