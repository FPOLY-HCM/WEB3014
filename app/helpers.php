<?php

declare(strict_types=1);

use Core\Auth;
use Core\View;

function redirect(string $uri = ''): void
{
    header('Location: ' . $uri);
    exit;
}

function view(string $view, array $data = []): string
{
    return View::render($view, $data);
}

function asset(string $path): string
{
    $protocol = str_contains($_SERVER['SERVER_PROTOCOL'], 'https') ? 'https://' : 'http://';

    $path = ltrim($path, '/');

    return $protocol . $_ENV['APP_URL'] . '/' . $path;
}

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

    return "$formattedValue {$suffix[$suffixIndex - 1]}";
}

function auth(string $guard = 'account'): Auth
{
    return new Auth($guard);
}

<<<<<<< HEAD
function selected(bool $condition): string|null
{
    return $condition ? 'selected' : null;
=======
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
>>>>>>> 11e1c2fafcb34797ef81191ae7b1380ffbce4b2b
}