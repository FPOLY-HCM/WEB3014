<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'email',
        'name',
        'password',
        'email_verified_at',
        'remember_token',
    ];
}
