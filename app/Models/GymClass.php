<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GymClass extends Model
{
    protected $fillable = [
        'activity',
        'format',
        'trainer_id',
        'start',
        'end',
        'capacity'
    ];

    protected function casts()
    {
        return [
            'start' => 'datetime',
            'end' => 'datetime'
        ];
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'class_members');
    }
}
