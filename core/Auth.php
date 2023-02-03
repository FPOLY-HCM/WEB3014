<?php

namespace Core;

use App\Models\User;

class Auth
{
    protected User|null $user = null;

    protected string|null $sessionUserId;

    public function __construct()
    {
        $this->sessionUserId = $_SESSION['user_id'] ?? null;

        if ($this->sessionUserId) {
            $user = User::query()->findOrFail($this->sessionUserId);

            $this->user = $user;
        }
    }

    public function user(): User|null
    {
        return $this->user;
    }

    public function check(): bool
    {
        return $this->sessionUserId && $this->user;
    }

    public function attempt(string $email, string $password): bool
    {
        $user = User::query()->where('email', $email)->where('password', $password)->first();

        if (! $user) {
            return false;
        }

        $_SESSION['user_id'] = $user->id;
        $this->user = $user;

        return true;
    }

    public function logout(): void
    {
        session_destroy();

        return;
    }
}