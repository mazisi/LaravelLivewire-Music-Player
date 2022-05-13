<?php

namespace App\Http\Livewire;

use App\Models\ContactUs;
use Livewire\Component;

class Contact extends Component
{
    public $email = '';
    public $full_name = '';
    public $message = '';
    public $contact_number = '';

    public function store()
    {
        $this->validate([
            'email' => 'required|email',
            'full_name' => 'required|string|max:100',
            'contact_number' => 'required|max:20',
            'message' => 'required|string|min:10|max:300'
        ]);
       ContactUs::create([
        'full_name' => $this->full_name,
        'email' => $this->email,
        'contact_number' => $this->contact_number,
        'message' => $this->message,
       ]);
       $this->reset(['full_name','email','contact_number','message']);
       session()->flash('success','Message sent.');
       return back();
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
