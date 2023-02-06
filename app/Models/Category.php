<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CategoryStatus;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'icon',
        'status',
    ];

    protected $casts = [
        'status' => CategoryStatus::class,
    ];
}