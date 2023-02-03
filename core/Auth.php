<?php

namespace Core;

use App\Models\Account;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Auth
{
    protected User|Account|null $user = null;

    protected string $guard;

    protected Model|string|null $model;

    protected string|null $sessionUserId;

    public function __construct(string $guard = 'account')
    {
        $this->guard = $guard;

        if ($this->guard === 'account') {
            $this->model = Account::class;
        } elseif ($this->guard === 'admin') {
            $this->model = User::class;
        }

        $this->sessionUserId = $_SESSION[$this->guard . '_user_id'] ?? null;

        if ($this->sessionUserId) {
            $user = $this->model::query()->findOrFail($this->sessionUserId);

            $this->user = $user;
        }
    }

    public function user(): User|Account|null
    {
        return $this->user;
    }

    public function check(): bool
    {
        return $this->sessionUserId ? true : false;
    }

    public function attempt(string $email, string $password): bool
    {
        $user = $this->model::query()->where('email', $email)->where('password', $password)->first();

        if (! $user) {
            return false;
        }

        $_SESSION[$this->guard . '_user_id'] = $user->id;

        $this->user = $user;

        return true;
    }

    public function logout(): void
    {
        session_destroy();

        return;
    }
}