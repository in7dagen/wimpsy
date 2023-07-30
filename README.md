# Wimpsy - The Magic Wand of Middleware

Welcome to Wimpsy, your personal wizard for conjuring up a middleware pipeline using the mystical Symfony HttpFoundation component. It magically transforms global variables into a request, guides it through the enchanted middleware pipeline, and finally sends the response back into the mortal realm.

Remember, simplicity is the key to everything. Wimpsy embodies this philosophy, making the complex task of handling HTTP requests and responses as simple as waving a magic wand.

## Author
Geoffrey Stekelenburg <g.stekelenburg@outlook.com>

## How to Use

1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Run `composer install` to install the necessary dependencies.
4. Run the following command to start the server:

```bash
php -S 0.0.0.0:8000 -d display_errors=0 -t ./public
```

This command will start a PHP server on port 8000, with display errors turned off, and it will set the document root to the `./public` directory.

Now, you can visit `http://localhost:8000` in your web browser to interact with the application.

## Middleware

Add your magical middleware spells to the `$middlewares` array in `wimpsy.php`. Each middleware should be a callable that takes a `Request` and a callable `$next` as parameters. It should return a `Response`.

Here's an example of a middleware spell:

```php
namespace Wimpsy\Middleware;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ExampleMiddleware
{
    public function __invoke(Request $request, callable $next): Response
    {
        $response = $next($request);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
```

This `ExampleMiddleware` is a middleware maestro, adding a custom header to the HTTP response like a wizard casting a spell. It's designed to be a part of a magical middleware pipeline, where it receives a `Request` and a callable `$next`, and returns a `Response`.

## Enjoy the Magic!

Thank you for using Wimpsy, the magical middleware wizard! Enjoy the magic of handling HTTP requests and responses with ease and style. Remember, in the world of coding and magic, simplicity is the ultimate sophistication.