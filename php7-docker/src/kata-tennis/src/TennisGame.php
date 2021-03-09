<?php


namespace Deg540\PHPTestingBoilerplate;

use Deg540\PHPTestingBoilerplate\Player;

class TennisGame
{

    private String $playerOneName;
    private String $playerTwoName;
    private int $playerOnePoints;
    private int $playerTwoPoints;

    /**
     * TennisGame constructor.
     * @param string $playerOneName
     * @param string $playerTwoName
     */
    public function __construct( string $playerOneName, string $playerTwoName )
    {
        $this->playerOneName = $playerOneName;
        $this->playerTwoName = $playerTwoName;
        $this->playerOnePoints = 0;
        $this->playerTwoPoints = 0;
    }

    public function wonPoint( String $playerName ) : void {

        if ( $playerName === $this->playerOneName ) {
            ++$this->playerOnePoints;
        }

        if ( $playerName === $this->playerTwoName ) {
            ++$this->playerTwoPoints;
        }

    }

    public function getScore() : String {

        if ( $this->playerOnePoints === 1
            && $this->playerTwoPoints === 0 ) {
            return "Fifteen - Love";
        }

        if ( $this->playerOnePoints === 2
            && $this->playerTwoPoints === 0 ) {
            return "Love - Fifteen";
        }

        if ( $this->playerOnePoints === 0
            && $this->playerTwoPoints === 2 ) {
            return "Thirty - Love";
        }

        return "Love all";
    }

}