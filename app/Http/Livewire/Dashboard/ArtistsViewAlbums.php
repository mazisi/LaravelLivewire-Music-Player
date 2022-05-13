<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Song;
use App\Models\Album;
use App\Models\Artist;
use Livewire\Component;

class ArtistsViewAlbums extends Component
{
    public $album;
 
    protected $queryString = ['album'];

    public function render()
    {
        $album = Album::where('slug', 'like', '%'.$this->album.'%')->first();
        $songs = Song::with('album')->where('album_id', $album->id)->get();
        $other_albums = Album::whereArtistId($album->artist_id)->where('id','!=',$album->id)->latest()->get();
        return view('livewire..dashboard.artists-view-albums',['songs' => $songs,'other_albums' => $other_albums]);
    }

    public function delete($id)
    {
        Song::whereId($id)->delete();
        session()->flash('success','Song deleted successfully.');
    }
}
