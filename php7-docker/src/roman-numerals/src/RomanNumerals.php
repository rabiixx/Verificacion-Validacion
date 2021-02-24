<?php

namespace Deg540\PHPTestingBoilerplate;

class RomanNumerals
{

    /**
     * @param int $decimalNum
     * @return String roman numeral for given decimal number
     * @example if the given number is not valid, return ""
     * @see isValidNum()
     */
    public function decimal2roman( int $decimalNum ) : String {

        $romanNumbers =
            array(
                1 => 'I',
                5 => 'V',
                10 => 'X',
                50 => 'L',
                100 => 'C',
                500 => 'D',
                1000 => 'M'
            );

        if ( !$this->isInt( $decimalNum ) ) {
            return "";
        }

        if ( !$this->isGreaterZero( $decimalNum ) ) {
            return "";
        }

        if ( $decimalNum === 1 ) {
            return $romanNumbers[ (string) 1 ];
        }

        if ( $decimalNum === 5 ) {
            return $romanNumbers[ (string) 5 ];
        }

        if ( $decimalNum === 10 ) {
            return $romanNumbers[ (string) 10 ];
        }

        if ( $decimalNum === 50 ) {
            return $romanNumbers[ (string) 50 ];
        }

        if ( $decimalNum === 100 ) {
            return $romanNumbers[(string)100];
        }

        if ( $decimalNum === 1000 ) {
            return $romanNumbers[(string)1000];
        }

        return "";
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