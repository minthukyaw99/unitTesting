<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Game
 *
 * @author minthukyaw
 */
class Game {
    
    protected $title;
    protected $rating;
    protected $imagePath;
    
    public function getTitle()
    {
        return $this->title;
    }
    
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    public function getRating()
    {
        return $this->rating;
    }
    
    public function setRating($rating)
    {
        $this->rating = $rating;
    }
    
    public function getImagePath()
    {
        return $this->imagePath;
    }
    
    public function setImagePath($path)
    {
        $this->imagePath = $path;
    }
}
