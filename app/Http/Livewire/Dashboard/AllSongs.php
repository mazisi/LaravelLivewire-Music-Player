<?php

namespace App\Http\Livewire\Dashboard;


use App\Models\Song;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Livewire\Traits\MP3File;

class AllSongs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $song_designation = '';
    public $track='';
    public $uploaded_by = '';
    public $slug = '';
    public $search_song ='';

    public function render(){
      if($this->search_song !=''){
        $songs = Song::search($this->search_song)
         ->paginate(8);
      }else{
        $songs = Song::with('album.artist')->latest()->paginate(8);
      }
      return view('livewire.dashboard.all-songs',['songs' => $songs]);
  }

    public function edit($slug){
      $song = Song::whereSlug($slug)->first();
      $this->track = $song->track;
      $this->uploaded_by = $song->uploaded_by;
      $this->slug = $song->slug;
    }

    public function update(){
      $this->validate([
        'track' => 'required',
        'song_designation' => 'in:'.collect(Song::SONG_STATUSES)->keys()->implode(','),
      ]);
      Song::whereSlug($this->slug)->update([
        'track' => $this->track,
        'designation' => $this->song_designation
      ]);
      session()->flash('success','Song updated successfully.');
      $this->emit('close-modal');
      }

    public function changeSongStatus($slug){
      $song = Song::whereSlug($slug)->first();
      if($song->status == 'Active'){
        $song->update(['status' => 'Deactivated']);
      }elseif($song->status == 'Deactivated'){
        $song->update(['status' => 'Active']);
      }
      return back();
    }

    public function delete($slug)
    {
      Song::whereSlug($slug)->delete();
      session()->flash('success','Song deleted successfully.');
      return back();
    }
    public static function getSongDuration($song){
      $mp3file = new MP3File("storage/app/public/".$song);
      $duration1 = $mp3file->getDurationEstimate();//(faster) for CBR only
      // $duration2 = $mp3file->getDuration();//(slower) for VBR (or CBR)
      // echo "duration: $duration1 seconds"."\n";
      // echo "estimate: $duration2 seconds"."\n";
      $result = MP3File::formatTime($duration1)."\n";
      return $result;
    }
}
