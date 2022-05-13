<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    public function artists()
    {
        $artists = Artist::latest()->get();
        return view('artists',compact('artists'));
    }

    public function view_artist_albums($slug) {
        $artist = Artist::whereSlug($slug)->first();
        if(is_null($artist)){
            return view('_404');
        }
        $albums = Album::with('artist')->whereArtistId($artist->id)->get();
        return view('view_artist_albums',compact('albums'));
    }
}
