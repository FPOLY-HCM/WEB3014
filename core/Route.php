<?php

declare(strict_types=1);

namespace Core;

use Closure;

class Route
{
    public static function get(string $uri, Closure|array $action): void
    {
        Router::register('GET', $uri, $action);
    }

    public static function post(string $uri, Closure|array $action): void
    {
        Router::register('POST', $uri, $action);
    }

    public static function resource(string $uri, string $controller): void
    {
        Router::register('GET', $uri, [$controller, 'index']);
        Router::register('GET', $uri . '/create', [$controller, 'create']);
        Router::register('POST', $uri . '/store', [$controller, 'store']);
        Router::register('GET', $uri . '/edit', [$controller, 'edit']);
        Router::register('POST', $uri . '/update', [$controller, 'update']);
        Router::register('GET', $uri . '/delete', [$controller, 'destroy']);
    }
}
