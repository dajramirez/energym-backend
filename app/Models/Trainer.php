<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trainer extends Model
{
    protected $fillable = [
        'user_id',
        'specialization',
        'certification',
        'years_experience',
        'bio',
        'availability',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function classes(): HasMany
    {
        return $this->hasMany(GymClass::class);
    }

    public function workouts(): HasMany
    {
        return $this->hasMany(WorkoutPlan::class);
    }
}
