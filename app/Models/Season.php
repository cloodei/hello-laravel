<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable = [
        'season_number',
        'title',
        'description',
        'content_id',
    ];

    public function content()
    {
        return $this->belongsTo(Content::class);
    }
}
