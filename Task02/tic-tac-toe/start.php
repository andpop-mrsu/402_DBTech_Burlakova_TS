#!/usr/bin/env php

<?php

require_once __DIR__ . '/../vendor/autoload.php';

use btat7\TicTacToe\Controller\Controller;

$controller = new Controller;
$controller->startGame();