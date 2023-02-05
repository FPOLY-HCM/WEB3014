<?php

declare(strict_types=1);

namespace Core;

class Request
{
    protected array $post;

    protected array $get;

    public function __construct()
    {
        $this->post = $_POST;
        $this->get = $_GET;
    }

    public function getPath(): string
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';

        $position = strpos($path, '?');

        if (! $position) {
            return $path;
        }

        return substr($path, 0, $position);
    }

    public function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function input(string $key): string
    {
        return $this->post[$key] ?? '';
    }

    public function query(string $key): string
    {
        return $this->get[$key] ?? '';
    }
}