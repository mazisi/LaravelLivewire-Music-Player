<?php

namespace App\Http\Livewire\Dashboard\Artists;

use App\Models\Artist;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use App\Http\Livewire\Traits\WithAlbums;
use App\Models\Album;
use App\Models\Song;
use Livewire\WithPagination;

class Artists extends Component
{
    use WithFileUploads, WithPagination, WithAlbums;
    
    protected $paginationTheme = 'bootstrap';
    public $photo;
    public $name = '';
    public $artist_id = '';
    public $search_artist = '';
    public $artist_designation = '';

    public function createArtist(){
        $this->validate([
            'photo' => 'required|image|max:1024',
            'name' => 'required|string|max:255'
        ]); 
        $img = $this->photo->store('artists','public');
        $image = Image::make("storage/app/public/{$img}")->fit(500,500);
        $image->save();
        Artist::create([
            'name' => $this->name,
            'photo' => $img,
            'slug' => str_replace(' ', '_', $this->name).Str::random(10).uniqid(true)
        ]);
        $this->emit('close-modal');
        session()->flash('success','Artist added successfully');
        return back();
    }

    public function edit($slug){
        $artist = Artist::whereSlug($slug)->firstOrFail();
        $this->name = $artist->name;
        $this->photo = $artist->photo;
        $this->artist_id = $artist->id;
    }

    public function updateArtist()
    {       
        if(!is_string($this->photo)){
        $img = $this->photo->store('artists','public');
        $image = Image::make("storage/app/public/{$img}")->fit(500,500);
        $image->save();        
    }else{
      $img= $this->photo;
    }
    Artist::whereId($this->artist_id)->update([
        'name' => $this->name,
        'is_legacy' => $this->artist_designation,
        'photo' => $img,
    ]);
    
    session()->flash('success','Artist updated successfully.');
    $this->emit('close-modal');

    }

    public function delete($slug)
    {
        Artist::whereSlug($slug)->delete();
        session()->flash('success','Artist deleted successfully.');
         $this->emit('close-modal');
    }

    public function render()
    {
        if($this->search_artist !=''){
             $artists = Artist::search($this->search_artist)->paginate(2);
          }else{
            $artists = Artist::latest()->paginate(2);
          }
        
        return view('livewire.dashboard.artists.artists',['artists' => $artists]);
    }
}
