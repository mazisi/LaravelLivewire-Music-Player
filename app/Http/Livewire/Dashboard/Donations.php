<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;
use App\Models\Donation;

class Donations extends Component
{
    use WithFileUploads;

    public $full_name = '';
    public $amount = '';
    public $picture = '';
    public $location = '';

    public function store()
    {
         $this->validate([
            'location' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'amount' => 'required'
        ]); 

        if($this->picture != ''){
                $img = $this->picture->store('donations','public');
                $image = Image::make("storage/app/public/{$img}")->fit(500,500);
                $image->save();
        }else{
            $img = null;
        }
      Donation::create([
            "full_name" => $this->full_name,
            "amount" => $this->amount,
            "picture" => $img,
            "location" => $this->location
        ]);
      session()->flash('success','Donation created successfully.');
      $this->emit('donate');
    }
    public function render()
    {
        $donations = Donation::latest()->get();
        return view('livewire.dashboard.donations',compact('donations'));
    }
}
