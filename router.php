<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    '/' => 'controllers/index.php',
    '/nosotros' => 'controllers/about.php',
    '/contacto' => 'controllers/contact.php',
];

function routeToController(string $uri, array $routes): void
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404): void
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);
