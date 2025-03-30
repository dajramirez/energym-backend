<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable = [
        'member_id',
        'membership_id',
        'amount',
        'payment_date',
        'due_date',
        'payment_method',
        'transaction_id',
        'status', // pending, completed, failed, refunded
        'notes',
    ];

    protected $dates = [
        'payment_date',
        'due_date',
    ];

    public function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }

    public function membership(): BelongsTo
    {
        return $this->belongsTo(Membership::class);
    }
}
