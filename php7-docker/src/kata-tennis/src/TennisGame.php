<?php


namespace Deg540\PHPTestingBoilerplate;

use phpDocumentor\Reflection\Types\Boolean;

class TennisGame
{

    private String $playerOneName;
    private String $playerTwoName;

    private int $playerOnePoints;
    private int $playerTwoPoints;

    private bool $isPlayerOneAdvantage;
    private bool $isPlayerTwoAdvantage;

    private array $pointsScoreAssocArr;

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

        $this->isPlayerOneAdvantage = false;
        $this->isPlayerTwoAdvantage = false;

        $this->pointsScoreAssocArr = array(
            0 => 'Love',
            1 => 'Fifteen',
            2 => 'Thirty',
            3 => 'Forty'
        );

    }

    public function wonPoint( String $playerName ) : void {

        if ( $playerName === $this->playerOneName ) {

            if ( $this->isDeuce() ) {

                if ( $this->isPlayerTwoAdvantage ) {
                    $this->isPlayerTwoAdvantage = false;
                    return;
                }

                if ( !$this->isPlayerOneAdvantage ) {
                    $this->isPlayerOneAdvantage = true;
                    return;
                }
            }

            ++$this->playerOnePoints;
        }

        if ( $playerName === $this->playerTwoName ) {

            if ( $this->isDeuce() ) {

                if ( $this->isPlayerOneAdvantage ) {
                    $this->isPlayerOneAdvantage = false;
                    return;
                }

                if ( !$this->isPlayerTwoAdvantage ) {
                    $this->isPlayerTwoAdvantage = true;
                    return;
                }
            }

            ++$this->playerTwoPoints;
        }

    }

    public function getScore() : String {

        // 1. Check if someone has won.
        if ( strcmp( $this->playerOneName, $this->checkWinner() ) === 0 ) {
            return "Win " . $this->playerOneName;
        }

        if ( strcmp( $this->playerTwoName, $this->checkWinner() ) === 0 ) {
            return "Win " . $this->playerTwoName;
        }

        // 2. In case of deuce, check if players advantage.
        if ( $this->isDeuce() ) {

            if ( strcmp( $this->playerOneName,  $this->checkAdvantage() ) === 0 ) {
                return "Advantage " . $this->playerOneName;
            }

            if ( strcmp( $this->playerTwoName,  $this->checkAdvantage() ) === 0 ) {
                return "Advantage " . $this->playerTwoName;
            }

            return "Deuce";
        }

        // 3. Check non 40 - 40 tied ( example: 0 - 0, 15 - 15, 30 - 30 )
        if ( $this->areTied() ) {
            return $this->pointsScoreAssocArr[ $this->playerOnePoints ] . " All";
        }

        // 4. If not winner and not deuce, then return each player points.
        return $this->pointsScoreAssocArr[ $this->playerOnePoints ] . " - " . $this->pointsScoreAssocArr[ $this->playerTwoPoints ];

    }

    private function checkAdvantage() : String {

        if ( $this->isPlayerOneAdvantage ) {
            return $this->playerOneName;
        }

        if ( $this->isPlayerTwoAdvantage ) {
            return $this->playerTwoName;
        }

        return "";

    }

    private function areTied() : bool {
        return ( $this->playerOnePoints === $this->playerTwoPoints );
    }

    private function isDeuce() : bool {
        return ( ( $this->playerOnePoints === 3 ) && ( $this->playerOnePoints === $this->playerTwoPoints ) );
    }

    /**
     * Returns the winner name. If there is not winner,
     *  return empty string.
     */
    private function checkWinner() : String {

        if ( $this->playerOnePoints === 4 ) {
            return $this->playerOneName;
        }

        if ( $this->playerTwoPoints === 4 ) {
            return $this->playerTwoName;
        }

        return "";

    }

}