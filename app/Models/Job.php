<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\JobStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

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

    protected $casts = [
        'status' => JobStatus::class,
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class);
    }

    public function getSimilarJobs(): Collection
    {
        return Job::query()
            ->where('category_id', $this->category_id)
            ->with(['company', 'city'])
            ->inRandomOrder()
            ->limit(5)
            ->get();
    }
}
