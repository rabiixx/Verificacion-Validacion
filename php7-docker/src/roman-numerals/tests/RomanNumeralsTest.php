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

        $actual = -12;
        $expected = "";

        $romanNumeral = new RomanNumerals();

        self::assertEquals( $expected, $romanNumeral->decimal2roman( $actual ) );

    }

    /**
     * @test
     * This test does not make sense because variables are been
     * casted to integer when passing it as function parameters.
     */
    public function checkNumberIsInt(): void
    {
        $actual = 1.2;
        $expected = "";

        $romanNumeral = new RomanNumerals();

        self::assertEquals( $expected, $romanNumeral->decimal2roman( $actual ));

    }

    /**
     * @test
     */
    public function checkSingleSymbols(): void
    {

        $actual = 50;
        $expected ="L";

        $romanNumeral = new RomanNumerals();

        self::assertEquals($expected, $romanNumeral->decimal2roman( $actual ) );
    }

    /**
     * @test
     * Roman symbols refer to the letters that forms Roman Numerical System.
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

        $actual = 4;
        $expected = "IV";

        $romanNumeral = new RomanNumerals();

        self::assertEquals( $expected, $romanNumeral->decimal2roman( $actual ) );

    }

    /**
     * @test
     **/
    public function checkAddition(): void
    {

        $actual = 6;
        $expected = "VI";

        $romanNumeral = new RomanNumerals();

        self::assertEquals( $expected, $romanNumeral->decimal2roman( $actual ) );

    }

    /**
     * @test
     **/
    public function checkGeneralNumbers( ): void
    {
        $actual = 512;
        $expected = "DXII";

        $romanNumeral = new RomanNumerals();

        self::assertEquals( $expected, $romanNumeral->decimal2roman( $actual ) );
    }

}
