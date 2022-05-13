<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory, Searchable;
    protected $guarded = [];

    const ARTIST_STATUSES = [
        'active_artist' => "Active Artist",
        'legacy_artist' => "Legacy Artist",
    ];

    public function albums()
    {
        return $this->hasMany(Album::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function searchableAs()
    {
        return 'artist_index';
    } 
}
