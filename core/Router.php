<?php

namespace Core;

use Closure;

class Router
{
    protected Request $request;

    protected static array $routes = [];

    public function __construct()
    {
        $this->request = new Request();
    }

    public static function register(string $method, string $uri, Closure|array $action): void
    {
        static::$routes[$method][$uri] = $action;
    }

    public function resolve()
    {
        $routes = static::$routes;

        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $action = $routes[$method][$path] ?? false;

        if (! $action) {
            http_response_code(404);
            require_once __DIR__ . '/../app/views/errors/404.php';
            exit();
        }

        if (is_array($action)) {
            return call_user_func([new $action[0], $action[1]]);
        }

        return call_user_func($action);
    }
}