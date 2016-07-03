<?php

// To help the built-in PHP dev server, check if the request was actually for
// something which should probably be served as a static file
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

require __DIR__ . '/../vendor/autoload.php';

session_start();

$app = new \Slim\App();

$app->any('/user[/{id:[0-9]+}]', App\Action\HomeAction::class)
    ->setName('homepage');

// Run!
$app->run();
