<?php

namespace Deg540\PHPTestingBoilerplate;

class RomanNumerals
{

    /**
     * Converts given integer number to roman numeral
     * @param int $decimalNum
     * @return String roman numeral for given decimal number
     * @return Empty string when given number is not valid
     * @example Given number is not valid when is not int or greater than zero
     * @see isInt()
     * @see isGreaterZero()
     */
    public function decimal2roman( int $decimalNum ) : String {

        $romanNumeral = "";

        $decimalRomanAssoc =
            array(
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
            );

        if ( !$this->isInt( $decimalNum ) ) {
            return "";
        }

        if ( !$this->isGreaterZero( $decimalNum ) ) {
            return "";
        }

        foreach ( $decimalRomanAssoc as $decimal => $roman ) {

            $romanNumAppearances = (int) ( $decimalNum / $decimal );

            $romanNumeral .= str_repeat( $roman, $romanNumAppearances );

            $decimalNum %= $decimal;
        }

        return $romanNumeral;
    }

    /**
     * Checks whether a given number is of type integer or not.
     * @param int $num
     * @return bool
     */
    private function isInt( int $num ) : bool {

        return is_int( $num );

    }

    /**
     * Checks if the given number is greater than zero or not.
     * @param int $num
     * @return bool
     */
    private function isGreaterZero( int $num ) : bool {

        return $num > 0;

    }


}