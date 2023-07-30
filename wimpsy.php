<?php

/**
 * This script is the entry point for the Wimpsy application.
 * It sets up the middleware pipeline and handles the incoming request.
 * 
 * @author Geoffrey Stekelenburg <g.stekelenburg@outlook.com>
 */

// Include the Composer autoloader.
// This allows us to use the classes in the project without having to require them manually.
require_once __DIR__ . '/vendor/autoload.php';

// Import the Wimpsy class from the Wimpsy namespace.
use Wimpsy\Wimpsy;

// Define the middleware pipeline.
// This is an array of fully qualified class names.
// Each class should be invokable (i.e., have a __invoke method) and accept a Request and a callable $next as parameters.
// It should return a Response.
$middlewares = [
	// The EnchantedMiddleware adds a custom header to the response.
	\Wimpsy\Middleware\EnchantedMiddleware::class,
	// The RouterMiddleware routes the request to the appropriate controller based on the request URI.
	\Wimpsy\Middleware\RouterMiddleware::class,
];

// Create a new Wimpsy application with the defined middleware pipeline.
$wimpsy = new Wimpsy($middlewares);

// Handle the incoming request and send the response.
// This will pass the request through each middleware in the pipeline in turn,
// allowing each one to modify the request or the response as needed.
$wimpsy->handle();
