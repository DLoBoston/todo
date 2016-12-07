<?php

// Set functions
require '../src/functions.php';

// Autoloaders
require '../vendor/autoload.php';
spl_autoload_register(function ($classname) {
    require '../src/' . str_replace('\\', '/', $classname) . '.php';
});

// Application settings
$settings = require '../src/settings.php';

// Create app
$app = new \Slim\App(["settings" => $settings]);

// Middleware: Start session for every request
$app->add(function ($request, $response, $next) {
  session_start();
	$response = $next($request, $response);
	return $response;
});

// Add dependecies
require '../src/dependencies.php';

// Register middleware
require '../src/middleware.php';

// Register routes
require '../src/routes.php';

$app->run();