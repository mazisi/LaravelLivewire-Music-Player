<?php

namespace App\Http\Livewire\Auth;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Mail\sendResetPasswordLink;
use Illuminate\Support\Facades\Mail;

class ForgotPassword extends Component
{
    public $email = '';

    public function updatedEmail()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email'
        ]);
    }
    public function store(){
        $token = sha1(Str::random(30));
        DB::table('password_resets')->insert([
            'email' => $this->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
          ]);
          $payload = [
            'token' => $token,
          ];

          Mail::to($this->email)->send(new sendResetPasswordLink($payload));
          session()->flash('message', 'We have e-mailed your password reset link!');
        return back();
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
