<?php

namespace Wimpsy\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * RouterMiddleware
 * 
 * This class represents a middleware that handles routing for the welcome page.
 * It is designed to be used in a middleware pipeline, where it receives a Request and a callable $next,
 * and returns a Response.
 * 
 * 🛤️🧙‍♂️ Welcome to the magical RouterMiddleware! 🚀✨
 * This middleware navigates through the mystical realms of web routing and directs the traveler to the enchanting welcome page of Wimpsy. 🌌🔮
 * The RouterMiddleware reads the delightful content from the mystical welcome.html file and presents it as a Response to the brave traveler. 📜🌟
 * 
 * 🚀 To join the Order of Web Wizards, simply pass through this middleware on your web development quest! 🧙‍♂️🌌
 * 
 * 💡 Fun Fact: The RouterMiddleware uses the power of file_get_contents to read the welcome.html file, unlocking the secrets of the welcome page. 📚🔍
 * 
 * @author Geoffrey Stekelenburg
 */
class RouterMiddleware
{
	/**
	 * Handle an incoming request and direct to the welcome page.
	 *
	 * The __invoke method is called when a script tries to call an object as a function.
	 * It reads the delightful content of the mystical welcome.html file and returns it as a Response.
	 *
	 * @param Request $request The incoming Request.
	 * @param callable $next The next middleware in the pipeline (not used in this case).
	 * @return Response The Response containing the enchanting welcome page.
	 */
	public function __invoke(Request $request, callable $next): Response
	{
		// Read the content of the mystical welcome.html file.
		$content = file_get_contents(__DIR__ . '/../../views/welcome.html');

		// Return the magical Response containing the enchanting welcome page.
		return new Response($content);
	}
}
