<?php

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