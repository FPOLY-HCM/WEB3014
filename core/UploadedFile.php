<?php

declare(strict_types=1);

namespace Core;

class UploadedFile
{
    protected string $name;

    protected string $type;

    protected string $tmpName;

    protected int $error;

    protected int $size;

    public function __construct(array $file)
    {
        $this->name = $file['name'];
        $this->type = $file['type'];
        $this->tmpName = $file['tmp_name'];
        $this->error = $file['error'];
        $this->size = $file['size'];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTmpName(): string
    {
        return $this->tmpName;
    }

    public function getError(): int
    {
        return $this->error;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function isValid(): bool
    {
        return $this->error === UPLOAD_ERR_OK;
    }

    public function upload(string $folder, string $name = null): string|false
    {
        if (! $this->isValid()) {
            return false;
        }

        $this->createFolder($folder);

        $name = $name ?: $this->generateName();

        $path = $folder . '/' . $name;

        if (! move_uploaded_file($this->tmpName, $path)) {
            return false;
        }

        return $path;
    }

    protected function createFolder(string $folder): void
    {
        if (! file_exists($folder)) {
            mkdir($folder, 0777, true);
        }
    }

    protected function generateName(): string
    {
        return bin2hex(random_bytes(8));
    }
}
