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

        self::assertEquals( "Love all", $tennisGame->getScore() );

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

}
