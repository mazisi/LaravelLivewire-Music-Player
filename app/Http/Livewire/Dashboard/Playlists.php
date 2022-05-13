<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Playlist;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class Playlists extends Component
{
    public $playlist_id = '';//playlist id

    public function removeFromPlaylist($playlist_id){
        try {
            $this->playlist_id = Crypt::decrypt($playlist_id);
        } catch (DecryptException $e) {
            return "ERRROR";
        }
        Playlist::whereId($this->playlist_id)->delete();
        session()->flash('success','Song removed successfully');
        return back();
    }
    public function render()
    {
        $playlists = Playlist::with('song.album')->whereUserId(auth()->id())->latest()->get();
        return view('livewire.dashboard.playlists',['playlists' => $playlists]);
    }
}
