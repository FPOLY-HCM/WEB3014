<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ApplicationStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}