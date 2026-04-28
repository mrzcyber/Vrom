<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Item;


class Image extends Model
{
    protected $fillable = [
        'path',
        'item_id'
    ];

    // relationships

    public function item():BelongsTo
    {
        return $this->belongsTo(Item::class);

    }

}
