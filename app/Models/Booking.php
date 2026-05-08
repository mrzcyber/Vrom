<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Item;
use App\Models\User;

class Booking extends Model
{
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'total_day',
        'address',
        'city',
        'zip',
        'payment_type',
        'payment_status',
        'payment_url',
        'total_price',
        'item_id',
        'user_id',
        'snap_token',
        'order_id'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    // relationships

    public function item():BelongsTo{
        return $this->belongsTo(Item::class);
    }

    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
