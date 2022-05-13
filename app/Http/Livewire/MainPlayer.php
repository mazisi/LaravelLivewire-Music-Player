<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MainPlayer extends Component
{

    protected $listeners = ["fastForward" => "render"];

    public function render()
    {
        return view('livewire.main-player');
    }
}
