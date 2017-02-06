<?php
// $app->get('/', function ($request, $response, $args) {
//     $this->logger->addInfo("Something interesting happened");
// });
$app->get('/', 'IndexController:index');
$app->get('/home', 'HomeController:home');

