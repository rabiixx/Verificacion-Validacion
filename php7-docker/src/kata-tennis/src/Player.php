<?php

namespace Deg540\PHPTestingBoilerplate;

class Player
{
    private string $name;
    private int $currentPoints;
    /**
     * Player constructor.
     * @param string $name
     */
    public function __construct( string $name )
    {
        $this->$name = $name;
        $this->currentPoints = 0;
    }

    public function getCurrentPoints() : int
    {
        return $this->currentPoints;
    }

    /**
     * Generates a random number
     */
    public function play(): int
    {

        define("MIN", 0);
        define("MAX", 100);

        try {
            return random_int( MIN , MAX );
        } catch ( \Exception $ex ){
            error_log( $ex->getMessage() );
            return EXIT_ERROR;
        } catch ( \TypeError $err ) {
            error_log( $err->getMessage() );
            return EXIT_ERROR;
        }

    }

}