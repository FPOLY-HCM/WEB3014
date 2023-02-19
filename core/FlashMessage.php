<?php

declare(strict_types=1);

namespace Core;

class FlashMessage {
    public function __construct()
    {
        $_SESSION['flash'] ??= [];
    }

    public function add(string $message, string $type): void
    {
        $_SESSION['flash'][] = [
            'message' => $message,
            'type' => $type,
        ];
    }

    public function display(): string|null
    {
        $html = '';
        foreach ($_SESSION['flash'] as $message) {
            $html .= '<div class="alert alert-' . $message['type'] . ' alert-dismissible fade show" role="alert">' . $message['message'] . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
        }
        $_SESSION['flash'] = [];

        unset($_SESSION['flash']);

        return $html;
    }
}