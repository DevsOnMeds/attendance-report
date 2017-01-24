<?php
/**
 * App Configuration
 * @var Array
 */

$config = [
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,
    'db' => [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'dbname' => 'test'
    ]
];

// App Initialized
$app = new \Slim\App(['settings' => $config]);