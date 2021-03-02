<?php

namespace Deg540\PHPTestingBoilerplate;

class RomanNumerals
{

    /**
     * @param int $decimalNum
     * @return String roman numeral for given decimal number
     * @example if the given number is not valid, return ""
     * @see isInt()
     * @see isGreaterZero()
     */
    public function decimal2roman( int $decimalNum ) : String {

        $romanNumeral = "";

        $decimalRomanAssoc =
            array(
                1000 => 'M',
                500 => 'D',
                100 => 'C',
                50 => 'L',
                10 => 'X',
                5 => 'V',
                1 => 'I'
            );

        if ( !$this->isInt( $decimalNum ) ) {
            return "Given value is not int. Expected: integer number.";
        }

        if ( !$this->isGreaterZero( $decimalNum ) ) {
            return "Given value is not greater than zero. Expected: gr";
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
    public function isInt( int $num ) : bool {

        return is_int( $num );

    }

    /**
     * Checks if the given number is greater than zero or not.
     * @param int $num
     * @return bool
     */
    public function isGreaterZero( int $num ) : bool {

        return $num > 0;

    }


}