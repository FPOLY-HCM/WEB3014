<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\CompanyStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
