<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GameTest
 *
 * @author minthukyaw
 */
require_once __DIR__ .'/../../Entity/Game.php';

class GameTest extends PHPUnit_Framework_TestCase {
    
    public function testImage_WithNull_ReturnPlaceholder()
    {
        $game = new Game();
        $game->setImagePath(NULL);
        $this->assertEquals('/image/placeholder.jpg', $game->getImagePath());
    }
    
    public function testImage_WithPath_ReturnPath()
    {
        $game = new Game();
        $game->setImagePath('/image/imagepath.jpg');
        $this->assertEquals('/image/imagepath.jpg', $game->getImagePath());
    }
}
