<?php

session_start();

require_once '../core/Router.php';

// Activation du router
$router = new Router();
$router->dispatch($_SERVER['REQUEST_URI']);