<?php

namespace App\Http\Livewire;

use App\Models\Album;
use Livewire\Component;
use Livewire\WithPagination;

class Release extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search_album = '';

    public function render(){
        if($this->search_album != ''){
            $releases = Album::where('title','like','%'.$this->search_album.'%')->where('new_release','Yes')->paginate(12);
        }else{
            $releases = Album::with('artist')->where('new_release','Yes')->latest()->paginate(12);
        }
        
        return view('livewire.release',compact('releases'));
    }
}
