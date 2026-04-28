<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Models\Brand;
use App\Models\Type;
use App\Models\Image;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'name',
        'slug',
        'brand_id',
        'type_id',
        'features',
        'price',
        'star',
        'review',
    ];

    // relationships

    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function type():BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
    public function image():HasMany
    {
        return $this->hasMany(Image::class);
    }
    public function booking():HasMany
    {
        return $this->hasMany(Booking::class);
    }


      // slug
    public function getRouteKeyName():string
    {
        return 'slug';
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
        ->generateSlugsFrom('name')
        ->saveSlugsTo('slug');
    }
}
