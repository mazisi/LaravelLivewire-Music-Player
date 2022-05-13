<?php

namespace App\Http\Livewire;

use ZipArchive;
use App\Models\Song;
use App\Models\Album;
use App\Models\Artist;
use App\Models\Comment;
use Livewire\Component;
use App\Models\Download;
use App\Models\Playlist;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use File;

class ViewArtist extends Component
{
    public $artist;
    public $comment = '';
    public $artist_id = '';
    public $album;
 
    protected $queryString = ['album'];

//download each song//
    public function downloadEachSong($slug){
        $song = Song::whereSlug($slug)->firstOrFail();
        Download::create(['song_id' => $song->id]);
        $file_name = $song->file_path;
        $file_path = storage_path('/app/public/'.$file_name);
       return response()->download($file_path);
    }
 
    public function addToPlaylist($slug){
        $song = Song::whereSlug($slug)->firstOrFail();
        $song_already_added = Playlist::whereUserId(auth()->id())->whereSongId($song->id)->first();
        if(is_null($song_already_added)){
        Playlist::create(['user_id' => auth()->id(),'song_id' => $song->id]);
        }
        session()->flash('success','Saved successfully');
        return back();
    }
    public function render()
    {
        $albums = Album::where('slug', 'like', '%'.$this->album.'%')->with('artist','songs')->latest()->first();

        $other_albums = Album::whereArtistId($albums->artist_id)->where('id','!=',$albums->id)->with(['artist','songs' => function ($query){
        $query->where('status','Active');            
     }])->latest()->get();
      $comments = Comment::where('artist_id',$albums->artist_id)->get();
        return view('livewire.view-artist',['albums' => $albums,'other_albums' => $other_albums,'comments' => $comments]);
    }

    //download whole album
    public function downloadAlbum($album_slug){
        $album = Album::whereSlug($album_slug)->first();
        $files = Song::where('album_id',$album->id)->get();

$zip = new ZipArchive();
$zip_name = $album->title.".zip"; // Zip name
$zip->open($zip_name,  ZipArchive::CREATE);
foreach ($files as $file) {
    Download::insert(['song_id' => $file->id,]);
  $path = storage_path('/app/public/'.$file->file_path);
  if(file_exists($path)){
  $zip->addFromString(basename($path),  file_get_contents($path));  
  }
  else{
   echo"file does not exist";
  }
}

$zip->close();
return response()->download(public_path($zip_name));

    }

    public function storeComment($id){
    try {
        $this->artist_id = Crypt::decrypt($id);
    } catch (DecryptException $e) {
        return view('_404');
    }
        $this->validate([
            'comment' =>'required|max:255',
        ]);
        Comment::create([
            'comment' => $this->comment,
            'artist_id' => $this->artist_id,
            'user_id' => auth()->id()
        ]);
        session()->flash('success','Saved!!');
        $this->reset('comment');
        return back();
    }

}
