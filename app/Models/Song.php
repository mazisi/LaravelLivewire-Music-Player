<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Song extends Model
{
    use HasFactory, Searchable;

    protected $guarded = [];

    const SONG_STATUSES = [
        'new_single' => "New Single",
        'top_single' => "Top Single",
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function downloads()
    {
        return $this->hasMany(Download::class);
    }

    public function playlists()
    {
        return $this->hasMany(Playlist::class);
    }
    public function searchableAs()
    {
        return 'song_index';
    } 
}
