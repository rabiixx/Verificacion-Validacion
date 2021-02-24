<?php

use PHPUnit\Framework\TestCase;

use Deg540\PHPTestingBoilerplate\RomanNumerals;

class RomanNumbersTest extends TestCase
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
    public function checkSymbolsValue(): void
    {

        define("ACTUAL", 1000);
        define('EXPECTED', 'M');

        $romanNumeral = new RomanNumerals();

        self::assertEquals(EXPECTED, $romanNumeral->decimal2roman( ACTUAL ) );
    }


}
