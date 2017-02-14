<?php
 /**
  * 1. Initialize Container.
  * 2. Create Service Factories.
  */


$container['db'] = function ($container) use ($capsule) {
    return $capsule;
};// Load Twig
$container['view'] = new \Slim\Views\PhpRenderer('../templates/');

$container['HomeController'] = function ($container) {
    return new \App\Controllers\HomeController($container);
};

$container['AuthController'] = function ($container) {
    return new \App\Controllers\AuthController($container);
};
