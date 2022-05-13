<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory, Searchable;
    protected $guarded = [];

    const ALBUM_STATUSES = [
        'No' => "No",
        'Yes' => "Yes",
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    public function searchableAs()
    {
        return 'album_index';
    } 
}
