<?php

$container['logger'] = function ($c) {
    $logger = new \Monolog\Logger('my_logger');
    if (is_dir('../logs') === false) {
        mkdir('../logs/');
        fopen('app.log', 'w');
    }
    $file_handler = new \Monolog\Handler\StreamHandler("../logs/app.log");
    $logger->pushHandler($file_handler);
    return $logger;
};
