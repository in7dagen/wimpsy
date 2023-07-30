# Welcome to Wimpsy - Simple Routing and Page App 🪄

🎉 Welcome to the magical world of Wimpsy, a delightful script that serves as the foundation of your web projects! 🌟

Wimpsy is a simple, lightweight, and enchanting middleware pipeline using Symfony HttpFoundation. As your HTTP request passes through the pipeline, spells shape and transform the response, crafting captivating web applications. 🌌

Add your own middleware functions to this enchanted pipeline, unleashing Wimpsy's full potential. The possibilities are limitless, and with every development, Wimpsy evolves, presenting exciting features over time. 🪄✨

## Become a Part of the Magic! 🌟

Join the enchanting world of Wimpsy! Its simplicity empowers you to build marvelous web applications with ease. Embrace the world of possibilities and create captivating online experiences that leave a lasting impression on your users. 🌈✨

## Support the Magic! ☕

Wimpsy is open-source magic created with love and passion. If you find Wimpsy useful, consider buying us a cup of coffee to support its further development. 🪄✨

Buy Me A Coffee button is here: https://www.buymeacoffee.com/wimpsy

## So, let the magic unfold! 🌌

Cast your spell and run the Wimpsy script, embracing the possibilities of web development. Your journey into the mystical realm of web magic has just begun! 🚀🪄

---

## How to Use Wimpsy 🧙‍♂️

1. Clone this repository or download the ZIP file.
2. Make sure you have PHP installed on your machine.
3. Run `composer install` to install the required dependencies.
4. Customize the middleware functions in `wimpsy.php` according to your needs.
5. Start the server by running the following command:
   ```
   php -S 0.0.0.0:8000 -d display_errors=0 -t ./public
   ```
6. Visit `http://localhost:8000` in your browser to see the magic happen!

---

**Note:** Wimpsy is designed to be a simple starting point for your web projects. Additional features will be released over time as the development continues.

---

## Example Middleware: EnchantedMiddleware 🪄✨🌟

The EnchantedMiddleware is a magical middleware that adds a sprinkle of enchantment to the HTTP response. As your request weaves through the pipeline, this mystical middleware casts a charm on the response, adding a touch of magic to the content.

🪄✨🌟 Feel the magic unfold as you journey through the mystical realm of web development! 🚀🪄 Embrace the enchantment and create captivating online experiences that leave your users spellbound! 🌈✨

So, are you ready to unleash the power of EnchantedMiddleware? Let's weave some web magic! 🌌🔮

```php
<?php

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
```

The example middleware adds a custom header to the HTTP response. It can be added to the middleware pipeline in `wimpsy.php` to perform various tasks on the incoming request and outgoing response.

---

## License 📜

This project is open-source and available under the MIT License.
```

Feel free to use this content wherever you need it! 🧙‍♂️✨🌟