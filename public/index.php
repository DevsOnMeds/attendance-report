<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

// Load all vendor files
require '../vendor/autoload.php';

// Boot all core files
require '../core/bootstrap.php';

// Run the app!
$app->run();