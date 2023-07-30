<?php

namespace Wimpsy\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * ExampleMiddleware - The Enchanter of HTTP Responses
 * 
 * This class is a middleware maestro, adding a custom header to the HTTP response like a wizard casting a spell.
 * It's designed to be a part of a magical middleware pipeline, where it receives a Request and a callable $next,
 * and returns a Response.
 * 
 * @author Geoffrey Stekelenburg <g.stekelenburg@outlook.com>
 */
class ExampleMiddleware
{
	/**
	 * Handle an incoming request like a pro.
	 *
	 * The __invoke method is called when a script tries to call an object as a function.
	 * It calls the next middleware in the pipeline with the Request, adds a custom header to the resulting Response,
	 * and returns the modified Response like a magician pulling a rabbit out of a hat.
	 *
	 * @param Request $request The incoming Request.
	 * @param callable $next The next middleware in the pipeline.
	 * @return Response The modified Response.
	 */
	public function __invoke(Request $request, callable $next): Response
	{
		// Call the next middleware in the pipeline, which will return a Response.
		$response = $next($request);

		// Add a custom header to the Response, like adding a secret ingredient to a potion.
		$response->headers->set('Content-Type', 'application/json');

		// Return the modified Response, ready to bewitch the client.
		return $response;
	}
}
