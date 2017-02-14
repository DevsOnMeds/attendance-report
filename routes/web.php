<?php
// $app->get('/', function ($request, $response, $args) {
//     $this->logger->addInfo("Something interesting happened");
// });
$app->get('/', 'AuthController:checkLogin');
$app->post('/', 'AuthController:login');
$app->get('/home', 'HomeController:home');
