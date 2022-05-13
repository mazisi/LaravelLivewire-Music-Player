<?php

namespace App\Http\Livewire\Dashboard\Artists;

use App\Models\Album;
use App\Models\Artist;
use Livewire\Component;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

class ArtistDetails extends Component
{
    use WithFileUploads;

    public $artists;
    public $artist;
    public $album_name = '';
    public $new_release = '';
    public $album_cover;
    public $release_date='';
    public $album_id ='';

    protected $queryString = ['artist'];

    public function mount()
    {
        $this->artists= Artist::with('albums')->where('slug', 'like', '%'.$this->artist.'%')->firstOrFail();
    }

    public function editAlbum($slug)
    {
        $album = Album::whereSlug($slug)->first();
        $this->album_cover = $album->album_cover;
        $this->album_name = $album->title;
        $this->release_date = $album->release_date;
        $this->album_id = $album->id;
    }

    public function updateAlbum()
    {
        $this->validate([
            'album_id' => 'required|exists:albums,id',
        ]);
        if(!is_string($this->album_cover)){
            $this->validate(['album_cover' => 'image|max:1024']);
        
        $img = $this->album_cover->store('albums','public');
        $image = Image::make("storage/app/public/{$img}")->fit(500,500);
        $image->save();
        }else{
            $img = null;
        }
                
        Album::whereId($this->album_id)->update([
            'title' => $this->album_name,
            'release_date' => $this->release_date,
            'album_cover' => $img,
            'new_release' => $this->new_release
        ]);
        session()->flash('success','Album updated successfully.');
        return back();
    }

    public function render()
    {
        return view('livewire.dashboard.artists.artist-details');
    }
}
