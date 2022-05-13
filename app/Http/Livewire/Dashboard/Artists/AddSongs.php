<?php

namespace App\Http\Livewire\Dashboard\Artists;

use App\Models\Song;
use App\Models\Album;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AddSongs extends Component
{
    use WithFileUploads;

    public $songs = [];
    public $uploaded_by = '';
    public $album;
    public $album_id;

    protected $queryString = ['album'];

    public function addSongs() {
        $this->validate([
            'songs.*' => 'required|max:50000',
            'uploaded_by' => 'required|max:255'
        ]);
        $album = Album::whereSlug($this->album)->first();
        
        if($album){
            $this->album_id = $album->id;
        }else{
            return view('_404.blade.php');
        }
        $i = 0;
        foreach ($this->songs as $song) {
            $i++;
            $ss = $song->store('songs','public');
            Song::create([
                'track' => 'Track_'.$i,
                'album_id' => $this->album_id,
                'file_path' => $ss,
                'slug' => Str::random(10).uniqid(true),
                'uploaded_by' => $this->uploaded_by,
            ]);
            
        }
        session()->flash('success','Songs added successfully.');
        $this->emit('close-modal');
    }

    public function render()
    {
        return view('livewire.dashboard.artists.add-songs');
    }
}
