<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CompanyStatus;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'account_id',
        'name',
        'email',
        'phone',
        'description',
        'content',
        'website',
        'logo',
        'address',
        'cover_image',
        'status',
    ];

    protected $casts = [
        'status' => CompanyStatus::class,
    ];
}