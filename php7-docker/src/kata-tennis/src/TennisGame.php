<?php


namespace Deg540\PHPTestingBoilerplate;

use Deg540\PHPTestingBoilerplate\Player;

class TennisGame
{

    public String $player1;
    public String $player2;

    /**
     * TennisGame constructor.
     * @param string $player1Name
     * @param string $player2Name
     */
    public function __construct( string $player1Name, string $player2Name )
    {
        $this->player1 = $player1Name;
        $this->player2 = $player2Name;
    }


    public function getScore() : string {
        return "Fifteen - Love";
    }

}