<?php

namespace App\Models;

use App\Models\Camp;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Checkout extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'user_id','camp_id','card_number','expired','cvc','is_paid'

    ];
    public function setExpiredAttribute($value)
    {
        $this->attributes['expired'] = date('Y-m-t', strtotime($value));
    }

    public function Camp(): BelongsTo
    {
        return $this->belongsTo(Camp::class);
    }
    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
