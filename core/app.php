<?php
/**
 * App Configuration
 * Database Settings
 * 'db' => Eloquent Settings
 * @var $config Array
 * @var $app    Object
 */

$config = [
    'displayErrorDetails' => true,
    'addContentLengthHeader' => false,
    'db' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'attendance',
        'username' => 'root',
        'password' => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]
];

// App Initialized
$app = new \Slim\App(['settings' => $config]);
