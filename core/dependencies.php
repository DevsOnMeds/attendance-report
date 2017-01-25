<?php
 /**
  * 1. Initialize Container.
  * 2. Create Service Factories.
  */

// Container Initialized
$container = $app->getContainer();

// Load Twig
$container['view'] = new \Slim\Views\PhpRenderer('../templates/');

$container['HomeController'] = function ($c) {
    $view = $c->get("view");
    return new \App\Controllers\HomeController($view);
};
