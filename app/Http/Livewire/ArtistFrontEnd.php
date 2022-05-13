<?php

namespace App\Http\Livewire;

use App\Models\Artist;
use Livewire\Component;
use Livewire\WithPagination;

class ArtistFrontEnd extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search_artist = '';
    public $filter = '';

    public function render()
    {
        if($this->search_artist != ''){
           $artists = Artist::search($this->search_artist)->paginate(12);
        }elseif($this->filter != '' && $this->filter != 'all'){
            $artists = Artist::where('is_legacy',$this->filter)->inRandomOrder()->paginate(12);
        }elseif($this->filter == 'all'){
            $artists = Artist::inRandomOrder()->paginate(12);
        }else{
            $artists = Artist::inRandomOrder()->paginate(12);
        }
        
        return view('livewire.artist-front-end',['artists' => $artists]);
    }

    public function filterArtist($value){
       $this->filter=$value;
    }
}
