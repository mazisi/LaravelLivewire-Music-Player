<?php

namespace App\Http\Livewire\Traits;

use App\Models\Album;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;

trait WithAlbums{

  use WithFileUploads;

  public $album_title='';
  public $album_release_date;
  public $artist_id ='';
  public $album_cover;

public function getArtistId($id){
    $this->artist_id= $id;
}

public function createAlbum(){
  $this->validate([
      'album_title' => 'required|string|max:255',
      'album_release_date' => '',
  ]); 
  if(!is_null($this->album_cover)){
        $img = $this->album_cover->store('albums','public');
        $image = Image::make("storage/app/public/{$img}")->fit(400,400);
        $image->save();
  }else{
    $img = null;
  }
  Album::create([
      'title' => $this->album_title,
      'release_date' => $this->album_release_date,
      'artist_id' => $this->artist_id,
      'album_cover' => $img,
      'slug' => str_replace(' ', '_', $this->album_title).Str::random(10).uniqid(true)
  ]);
  session()->flash('success','Album added successfully.');
  $this->emit('close-modal');
  return back();
}
}