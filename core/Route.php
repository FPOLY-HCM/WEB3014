<?php

namespace Core;

use Closure;

class Route
{
    public static function get(string $uri, Closure|array $action): void
    {
        Router::register('GET', $uri, $action);
    }

    public static function post(string $uri, Closure $action): void
    {
        Router::register('POST', $uri, $action);
    }
}