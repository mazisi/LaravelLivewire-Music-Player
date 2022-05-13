<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Song;
use App\Models\Donation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $artists = Artist::latest()->get();
        $releases = Album::with('artist')->where('new_release','Yes')->latest()->get();
        $donators = Donation::orderBy('amount','desc')->get();
        $top_singles = Song::with('album.artist')->where('designation','top_single')->latest()->take(5)->get();
        return view('index',compact('artists','top_singles','releases','donators'));
    }
    
}
