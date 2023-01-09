<?php

namespace Core;

class View
{
    public static function render(string $view, array $data = []): string
    {
        ob_start();

        include_once __DIR__ . "/../app/views/$view.php";

        return ob_get_clean();
    }
}