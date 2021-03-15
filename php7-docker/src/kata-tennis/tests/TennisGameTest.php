<?php

use PHPUnit\Framework\TestCase;

use Deg540\PHPTestingBoilerplate\TennisGame;

class TennisGameTest extends TestCase
{

    /**
     * @test
     **/
    public function al_empezar_el_juego_van_0_0_y_el_resultado_es_love_all(): void
    {

        $tennisGame = new TennisGame( "a", "b" );

        self::assertEquals( "Love All", $tennisGame->getScore() );

    }

    /**
     * @test
     **/
    public function si_jugador_gana_uno_punto_resultado_fifteen_love(): void
    {

        $tennisGame = new TennisGame( "Ruben", "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );

        self::assertEquals( "Fifteen - Love", $tennisGame->getScore() );

    }

    /**
     * @test
     **/
    public function if_both_won_point_then_both_fifteen() : void {

        $tennisGame = new TennisGame("Ruben", "Alvaro");

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        self::assertEquals("Fifteen All", $tennisGame->getScore() );

    }

    /**
     * @test
     */
    public function if_both_forty_then_deuce(  ) : void {

        $tennisGame = new TennisGame("Ruben", "Alvaro");

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        self::assertEquals("Deuce", $tennisGame->getScore() );

    }

    /**
     * @test
     */
    public function if_player1_wins_without_advantage_then_win_player1() : void {

        $tennisGame = new TennisGame("Ruben", "Alvaro");

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Ruben" );

        self::assertEquals("Win Ruben", $tennisGame->getScore() );

    }

    /**
     * @test
     */
    public function check_deuce() : void {

        $tennisGame = new TennisGame("Ruben", "Alvaro");

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );


        self::assertEquals("Deuce", $tennisGame->getScore() );

    }

    /**
     * @test
     */
    public function check_advantage() : void {

        $tennisGame = new TennisGame("Ruben", "Alvaro");

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );


        $tennisGame->wonPoint( "Ruben" );


        self::assertEquals("Advantage Ruben", $tennisGame->getScore() );

    }



    /**
     * @test
     */
    public function player1_wins_after_advantage() : void {

        $tennisGame = new TennisGame("Ruben", "Alvaro");

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );


        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Ruben" );


        self::assertEquals("Win Ruben", $tennisGame->getScore() );

    }

    /**
     * @test
     */
    public function return_to_deuce_after_advantage() : void {

        $tennisGame = new TennisGame("Ruben", "Alvaro");

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        self::assertEquals("Deuce", $tennisGame->getScore() );

    }


    /**
     * @test
     */
    public function check_player2_comeback() : void {

        $tennisGame = new TennisGame("Ruben", "Alvaro");

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Ruben" );
        $tennisGame->wonPoint( "Alvaro" );

        $tennisGame->wonPoint( "Alvaro" );
        $tennisGame->wonPoint( "Alvaro" );

        self::assertEquals("Win Alvaro", $tennisGame->getScore() );

    }

}
