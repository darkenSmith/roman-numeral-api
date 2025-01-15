<?php

namespace App\Services;

class RomanNumeralConverter
{
    public function convertInteger($number): string
    {
        $romanString = '';

        $romanNumerals = [
            1000 => 'M',
            900 => 'CM',
            500 => 'D',
            400 => 'CD',
            100 => 'C',
            90 => 'XC',
            50 => 'L',
            40 => 'XL',
            10 => 'X',
            9 => 'IX',
            5 => 'V',
            4 => 'IV',
            1 => 'I'
        ];

        foreach ($romanNumerals as $value => $string) {
            while($number >= $value) {
                // we add value of the string for each part that is more or equal to our number then we deduct that value from our number to end the loop
                $romanString .= $string;
                $number -= $value;
            }
        }

        return $romanString;

    }
}
