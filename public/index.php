<?php
require __DIR__ . '/../vendor/autoload.php';
// Create and configure Slim app
$config = ['settings' => [
    'addContentLengthHeader' => false,
]];
$app = new \Slim\App($config);

// Automatically load router files
$controllers = glob('controllers/{*}.php', GLOB_BRACE);
foreach ($controllers as $controller) {
    require $controller;
}

// Run app
$app->run();
