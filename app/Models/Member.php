<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    protected $fillable = [
        'user_id',
        'membership_id',
        'first_name',
        'last_name',
        'dni',
        'phone',
        'emergency_phone',
        'birthday',
        'gender',
        'address',
        'health_notes',
        'start_date',
        'end_date',
        'status', // active, suspended, expired
        'profile_image',
    ];

    protected $dates = [
        'birthday',
        'start_date',
        'end_date',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function membership(): BelongsTo
    {
        return $this->belongsTo(Membership::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class);
    }

    public function workouts(): HasMany
    {
        return $this->hasMany(WorkoutPlan::class);
    }
}
