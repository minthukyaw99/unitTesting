<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once __DIR__ . '/../src/Repository/GameRepository.php';

$repo = new GameRepository();

$games = $repo->findByUserId(1);

var_dump($games);


