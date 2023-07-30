<?php

namespace Wimpsy\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * EnchantedMiddleware
 * 
 * This class represents a magical middleware that adds a sprinkle of enchantment to the HTTP response.
 * As your request weaves through the pipeline, this mystical middleware casts a charm on the response,
 * adding a touch of magic to the content.
 * 
 * 🪄✨🌟 Feel the magic unfold as you journey through the mystical realm of web development! 🚀🪄
 * Embrace the enchantment and create captivating online experiences that leave your users spellbound! 🌈✨
 * 
 * So, are you ready to unleash the power of EnchantedMiddleware? Let's weave some web magic! 🌌🔮
 * 
 * Author: Wizardly Web Dev <webmagic@wizardlywebdev.com>
 */
class EnchantedMiddleware
{
    /**
     * Handle an incoming request and cast a magical spell on the response.
     *
     * The __invoke method is called when a script tries to call an object as a function.
     * It calls the next middleware in the pipeline with the Request,
     * adds a sprinkle of enchantment to the resulting Response,
     * and returns the modified Response, now infused with magic!
     *
     * 🎉✨✨ Embrace the magic of EnchantedMiddleware! 🪄✨✨
     *
     * @param Request $request The incoming Request.
     * @param callable $next The next middleware in the pipeline.
     * @return Response The modified Response, now imbued with magic.
     */
    public function __invoke(Request $request, callable $next): Response
    {
        // Call the next middleware in the pipeline, which will return a Response.
        $response = $next($request);

        // Add a custom header to the Response, a touch of magic!
        $response->headers->set('X-Magic-Power', 'Enchanted');

        // Return the modified Response, now imbued with magic!
        return $response;
    }
}
