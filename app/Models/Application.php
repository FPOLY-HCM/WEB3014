<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ApplicationStatus;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'job_id',
        'account_id',
        'status',
    ];

    protected $casts = [
        'status' => ApplicationStatus::class,
    ];
}