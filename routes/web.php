<?php
// $app->get('/', function ($request, $response, $args) {
//     $this->logger->addInfo("Something interesting happened");
// });

$app->get('/', function ($request, $response, $args) {
    echo "hello";
    // $this->logger->addInfo("Something interesting happened");
});

$app->get('/home', 'HomeController:home');

