<?php

declare(strict_types=1);

use Core\Auth;
use Core\View;

if (! function_exists('redirect')) {
    function redirect(string $uri = ''): void
    {
        header('Location: ' . $uri);
        exit;
    }
}

if (! function_exists('view')) {
    function view(string $view, array $data = []): string
    {
        return View::render($view, $data);
    }
}

if (! function_exists('compact')) {
    function compact(...$vars): array
    {
        $result = [];
        foreach ($vars as $var) {
            $result[$var] = $$var;
        }

        return $result;
    }
}

if (! function_exists('asset')) {
    function asset(string $path): string
    {
        $protocol = str_contains($_SERVER['SERVER_PROTOCOL'], 'https') ? 'https://' : 'http://';

        $path = ltrim($path, '/');

        return $protocol . $_ENV['APP_URL'] . '/' . $path;
    }
}


if (! function_exists('money_format')) {
    function money_format(int $value): string
    {
        $value = (int) $value;

        if ($value < 1000) {
            return $value . ' đ';
        }

        $suffix = ['Nghìn', 'Triệu', 'Tỷ'];

        $base = log($value, 1000);

        $suffixIndex = (int) floor($base);

        $formattedValue = round($value / (1000 ** $suffixIndex), 1);

        return "{$formattedValue} {$suffix[$suffixIndex - 1]}";
    }
}

if (! function_exists('auth')) {
    function auth(string $guard = 'account'): Auth
    {
        return new Auth($guard);
    }
}

if (! function_exists('request')) {
    function request(): Request
    {
        return new Request();
    }
}