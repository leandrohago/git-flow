<?php

include 'functions.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$routes = [
    '/cep' => [
        'method' => 'GET',
        'action' => 'buscaCep',
    ],
];

function checkRouteExist($routes, $uri)
{
    if (!array_key_exists($uri, $routes)) {
        http_response_code(404);

        echo json_encode([
            'data' => 'Not Found',
        ]);

        die();
    }
}

function checkMethod($routes, $uri, $method)
{
    $routeMethod = $routes[$uri];

    if ($routeMethod['method'] !== $method) {
        http_response_code(405);

        echo json_encode([
            'data' => 'Method Not Allowed',
        ]);

        die();
    }
}

checkRouteExist($routes, $uri);
checkMethod($routes, $uri, $method);

call_user_func($routes[$uri]['action']);
