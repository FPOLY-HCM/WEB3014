<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    protected $fillable = [
        'category_id',
        'company_id',
        'city_id',
        'name',
        'description',
        'content',
        'salary',
        'salary_range',
        'number_of_positions',
    ];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);   
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}