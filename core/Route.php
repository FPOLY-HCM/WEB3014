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
}