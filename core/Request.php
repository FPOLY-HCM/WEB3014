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

    public function all(string $key = null): string|array|null
    {
        $data = array_merge($this->post, $this->get, $this->file);

        if ($key) {
            return $data[$key] ?? null;
        }

        return $data;
    }

    public function input(string $key = null): array|string|null
    {
        if (! $key) {
            return $this->post;
        }

        return $this->post[$key] ?? null;
    }

    public function query(string $key): string|null
    {
        return $this->get[$key] ?? null;
    }

    public function file(string $key): UploadedFile
    {
        if (! isset($this->file[$key])) {
            return null;
        }

        return new UploadedFile($this->file[$key]);
    }

    public function has(string $key): bool
    {
        return $this->all($key) !== null && $this->all($key) !== '';
    }
}
