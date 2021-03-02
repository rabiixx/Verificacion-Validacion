<?php

use PHPUnit\Framework\TestCase;

use Deg540\PHPTestingBoilerplate\RomanNumerals;

class RomanNumeralsTest extends TestCase
{

    /**
     * @test
     **/
    public function checkNumberGreaterZero(): void
    {

        define("ACTUAL", 0);
        define('EXPECTED', "");

        $romanNumeral = new RomanNumerals();

        self::assertEquals( EXPECTED, $romanNumeral->isGreaterZero( ACTUAL ) );

    }

    /**
     * @test
     */
    public function checkNumberIsInt(): void
    {

        define("ACTUAL", 1.2);
        define("EXPECTED", "");

        $romanNumeral = new RomanNumerals();

        self::assertEquals( EXPECTED, $romanNumeral->isInt( ACTUAL ));

    }

    /**
     * @test
     */
    public function checkSingleSymbols(): void
    {

        define("ACTUAL", 1);
        define('EXPECTED', 'J');

        $romanNumeral = new RomanNumerals();

        self::assertEquals(EXPECTED, $romanNumeral->decimal2roman( ACTUAL ) );
    }

    /**
     * @test
     * 
     */
    public function checkRomanSymbols(): void
    {
        $decimalRomanAssoc =
            array(
                1 => 'I',
                5 => 'V',
                10 => 'X',
                50 => 'L',
                100 => 'C',
                500 => 'D',
                1000 => 'M'
            );

        $romanNumerals = new RomanNumerals();

        foreach ( $decimalRomanAssoc as $actual => $expected ) {
            self::assertEquals( $expected, $romanNumerals->decimal2roman( $actual ));
        }
    }

    /**
     * @test
     **/
    public function checkSubtraction(): void
    {
        define("ACTUAL", 4);
        define("EXPECTED", "IV");

        $romanNumeral = new RomanNumerals();

        self::assertEquals( EXPECTED, $romanNumeral->decimal2roman( (int) ACTUAL ) );

    }

    /**
     * @test
     **/
    public function checkAddition(): void
    {
        define("ACTUAL", 6);
        define("EXPECTED", "VI");

        $romanNumeral = new RomanNumerals();

        self::assertEquals( EXPECTED, $romanNumeral->decimal2roman( (int) ACTUAL ) );

    }

    /**
     * @test
     **/
    public function checkGeneralNumbers( ): void
    {
        define("ACTUAL", 512);
        define("EXPECTED", "DXXI");

        $romanNumeral = new RomanNumerals();

        self::assertEquals( EXPECTED, $romanNumeral->decimal2roman( (int) ACTUAL ) );
    }

}
