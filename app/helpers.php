<?php

declare(strict_types=1);

use Core\Auth;
use Core\FlashMessage;
use Core\Request;
use Core\Setting;
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
    if ($value < 1000) {
        return $value . ' đ';
    }

    $suffix = ['Nghìn', 'Triệu', 'Tỷ'];

    $base = log($value, 1000);

    $suffixIndex = (int)floor($base);

    $formattedValue = round($value / (1000 ** $suffixIndex), 1);

    return "$formattedValue {$suffix[$suffixIndex - 1]}";
}

function auth(string $guard = 'account'): Auth
{
    return new Auth($guard);
}

function request(): Request
{
    return new Request();
}

function selected(bool $condition): string|null
{
    return $condition ? 'selected' : null;
}

function setting(array|string|null $key = null, string|null $default = null): Setting|string|null
{
    $setting = new Setting();

    if (is_array($key)) {
        foreach ($key as $k => $v) {
            $setting->set($k, $v);
        }

        return $setting;
    }

    return $setting->get($key, $default);
}

function flash(): FlashMessage
{
    return new FlashMessage();
}
