<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GymClass extends Model
{
    protected $fillable = [
        'trainer_id',
        'name',
        'description',
        'schedule',
        'duration',
        'max_capacity',
        'current_capacity',
        'status', // active, cancelled, completed
    ];

    function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }

    function members(): BelongsToMany
    {
        return $this->belongsToMany(Member::class, 'class_member')->withTimestamps();
    }
}
