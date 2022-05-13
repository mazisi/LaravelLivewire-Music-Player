<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SignIn extends Component
{
    public $email ='';
    public $password = '';
    public $remember;


    public function authenticate(){
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            session()->regenerate(); 
            return redirect()->intended('dashboard');
        }
         session()->flash('error', 'The provided credentials do not match our records.');
        return back();
    }

    public function render()
    {
        return view('livewire.auth.sign-in');
    }
}
