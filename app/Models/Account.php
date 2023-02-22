<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\AccountType;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'email',
        'name',
        'password',
        'phone',
        'dob',
        'bio',
        'credits',
        'type',
    ];

    protected $casts = [
        'type' => AccountType::class,
    ];
}
