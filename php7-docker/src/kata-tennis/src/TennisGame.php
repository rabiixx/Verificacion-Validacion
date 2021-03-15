<?php


namespace Deg540\PHPTestingBoilerplate;

use Deg540\PHPTestingBoilerplate\Player;
use phpDocumentor\Reflection\Types\Boolean;

class TennisGame
{

    private String $playerOneName;
    private String $playerTwoName;
    private int $playerOnePoints;
    private int $playerTwoPoints;
    private array $arr;

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

        $this->arr = array(
            0 => 'Love',
            1 => 'Fifteen',
            2 => 'Thirty',
            3 => 'Forty'
        );


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

        if ( $this->isDeuce() ) {
            return "Deuce";
        }

        if ( $this->areTied() ) {
            return $this->arr[ $this->playerOnePoints ] . "All";
        }

        return $this->arr[ $this->playerOnePoints ] . " - " . $this->arr[ $this->playerTwoPoints ];

    }

    private function areTied() : Boolean {
        return ( $this->playerOnePoints === $this->playerTwoPoints );
    }

    private function isDeuce() : Boolean {
        return ( ( $this->playerOnePoints === 40 ) && ( $this->playerOnePoints === $this->playerTwoPoints ) );
    }

}