<?php

/**
 * Wimpsy - The Magic Wand of Middleware
 * 
 * This class is your personal wizard, conjuring up a middleware pipeline using the mystical Symfony HttpFoundation component.
 * It magically transforms global variables into a request, guides it through the enchanted middleware pipeline,
 * and finally sends the response back into the mortal realm.
 * 
 * @author Geoffrey Stekelenburg <g.stekelenburg@outlook.com>
 */

namespace Wimpsy;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Wimpsy
{
    /**
     * Wimpsy constructor.
     *
     * @param array $middlewares
     */
    public function __construct(private array $middleware = [])
    {
    }

    /**
     * Handle the request and send the response.
     */
    public function handle(): void
    {
        // Create a Request object from PHP's global variables.
        $request = Request::createFromGlobals();

        // Create a magical middleware pipeline.
        $pipeline = array_reduce(
            array_reverse($this->middleware),
            function ($next, $middleware) {
                return function (Request $request) use ($next, $middleware) {
                    return (new $middleware)($request, $next);
                };
            },
            function (Request $request) {
                return new Response('Page not found!', 404);
            }
        );

        // Pass the Request through the magical middleware pipeline to get a Response.
        $response = $pipeline($request);

        // Send the Response to the client.
        $response->send();
    }
}
