<?php

if (! function_exists('redirect')) {
    function redirect(string $uri = ''): void
    {
        header('Location: ' . $uri);
        exit;
    }
}