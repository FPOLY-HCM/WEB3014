<?php

declare(strict_types=1);

namespace Core;

class Request
{
    protected array $post;

    protected array $get;

    protected array $file;

    public function __construct()
    {
        $this->post = $_POST;
        $this->get = $_GET;
        $this->file = $_FILES;
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

    public function all(): array
    {
        return array_merge($this->post, $this->get);
    }

    public function input(string $key): string|null
    {
        return $this->post[$key] ?? null;
    }

    public function query(string $key): string|null
    {
        return $this->get[$key] ?? null;
    }

    public function file(string $key): array|null
    {
        return $this->file[$key] ?? null;
    }
}