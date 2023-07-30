<?php

/**
 * Wimpsy - The Magic Wand of Middleware
 * 
 * This script is your personal wizard, conjuring up a middleware pipeline using the mystical Symfony HttpFoundation component.
 * It magically transforms global variables into a request, guides it through the enchanted middleware pipeline,
 * and finally sends the response back into the mortal realm.
 * 
 * @author Geoffrey Stekelenburg <g.stekelenburg@outlook.com>
 */

// Summon the autoload file to automatically conjure classes as they are needed.
require_once __DIR__ . '/vendor/autoload.php';

// Import the magical classes from the Symfony HttpFoundation component.
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

// Setup Middleware
// Add your magical middleware spells to this array.
// Each middleware should be a callable that takes a Request and a callable $next as parameters.
// It should return a Response.
$middlewares = [
	// Example middleware spell
	\Wimpsy\Middleware\ExampleMiddleware::class,
];

// Create a Request object from PHP's global variables.
$request = Request::createFromGlobals();

// Create a magical middleware pipeline.
// The pipeline is a callable that takes a Request and returns a Response.
// It does this by starting with the last middleware in the array and wrapping each previous middleware around it.
$pipeline = array_reduce(
	array_reverse($middlewares),
	function ($next, $middleware) {
		return function (Request $request) use ($next, $middleware) {
			// Call the middleware with the Request and the $next.
			// If the middleware is an instance of a class, the __invoke method of that class will be called.
			return (new $middleware)($request, $next);
		};
	},
	function (Request $request) {
		// The initial $next is a callable that ignores its argument and returns a default Response.
		return new Response(json_encode(['message' => 'Thank you for using Wimpsy, the magical middleware wizard!']));
	}
);

// Pass the Request through the magical middleware pipeline to get a Response.
$response = $pipeline($request);

// Send the Response to the client.
$response->send();
