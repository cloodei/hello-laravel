<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'image_url',
        'trailer_url',
        'start_date',
        'content_type',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function genres()
    {
        return $this->hasMany(Genre::class);
    }

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }

    public function watchlist()
    {
        return $this->hasMany(Watchlist::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
