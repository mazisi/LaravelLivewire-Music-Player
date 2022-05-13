<?php

namespace App\Http\Livewire\Dashboard;

use App\Http\Livewire\Traits\WithAlbums;
use App\Models\Artist;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class Index extends Component
{
    use WithFileUploads, WithAlbums;

    public $photo;
    public $name = '';
    public $description = '';

    public function createArtist(){
        $this->validate([
            'photo' => 'image|max:1024',
            'name' => 'required|string|max:30',
            'description' => 'required'
        ]); 
        $img = $this->photo->store('artists','public');
        Image::make("storage/app/public/{$img}")->fit(500,500);
        Artist::create([
            'name' => $this->name,
            'description' => $this->description,
            'photo' => $img,
            'slug' => str_replace(' ', '_', $this->name).Str::random(10).uniqid(true)
        ]);
        $this->emit('close-modal');
        return back();
    }

    public function render() {
        $artists = Artist::with('albums')->latest()->get();
        return view('livewire.dashboard.index',['artists' => $artists]);
    }
}
