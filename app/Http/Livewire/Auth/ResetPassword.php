<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Component
{
    public $user;
    public $token = '';
    public $password = '';
    public $password_confirmation = '';
 
    protected $queryString = ['user'];

    public function mount()
    {
        $this->token = $this->user;
    }

    public function store() {
        $this->validate([
            'password' => 'required|confirmed'
        ]);

        $user = DB::table('password_resets')->where(['token' => $this->token])->first();

        if(!$user){
            session()->flash('error', 'Invalid token!');
            return back();
        }

        User::where('email', $user->email)
                    ->update(['password' => Hash::make($this->password)]);

        DB::table('password_resets')->where(['email'=> $user->email])->delete();
        session()->flash('message', 'Your password has been updated successfully!');
        return redirect(url('/sign-in'));
    }
    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
