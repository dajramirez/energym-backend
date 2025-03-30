<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class WorkoutPlan extends Model
{
    protected $fillable = [
        'trainer_id',
        'member_id',
        'name',
        'description',
        'start_date',
        'end_date',
        'goal',
        'status', // active, completed, paused
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }


    public function exercises(): BelongsToMany
    {
        return $this->belongsToMany(Exercise::class)
            ->withPivot(
                ['sets', 'reps', 'rest', 'day']
            )->withTimestamps();
    }
}
