<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GameRepository
 *
 * @author minthukyaw
 */

require_once __DIR__ . '/../Entity/Game.php';

class GameRepository {
    
    public function findByUserId($id)
    {
        $games = array();
        
        for($i = 0 ; $i <= 6 ; $i++)
        {
            $game = new Game();
            $game->setTitle('Game Title '.$i);
            $game->setImagePath('/images/game.png');
            $game->setRating($i + 1.5);
            $games[] = $game;
        }
        
        return $games;
    }
}
